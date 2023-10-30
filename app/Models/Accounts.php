<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Accounts extends Model
{
    use HasFactory;

    protected $table = 'table_acconts';
    protected $primaryKey = 'id';
    public $increnenting = false;
    protected $fillable = ['username', 'email', 'password'];
    protected $keyType = 'string';
    protected $hidden = ['password'];
}

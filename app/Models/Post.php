<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'postes';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $fillable = ['id' ,'comments' ,'created_at' ,'updated_at' ];
}

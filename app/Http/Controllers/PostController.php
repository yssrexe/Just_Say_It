<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function post(Request $request)
    {
        $post = $request->validate(['comments' => 'required|string']);

        Post::create($post);

        if (!$post) {
            return view('inside.offpage');
        } else {
            $postes = Post::all();
            return view('inside.offpage', ['postes' => $postes]);
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function post(Request $request)
    {
        $validatedData = $request->validate(['comments' => 'required|string']);

        $post = Post::create($validatedData);

        if (!$post) {
            return view('inside.offpage', ['error' => 'Failed to create the post.']);
        } else {
            $postes = Post::orderBy('created_at', 'desc')->get();
            return view('inside.offpage', ['postes' => $postes]);
        }



    }
}

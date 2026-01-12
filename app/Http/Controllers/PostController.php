<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    // SELECT users.name FROM users INNER JOIN posts ON users.id = posts.user_id where posts.id = 3;
    public function postedUser() {;
        $post= Post::find(1); // WHERE id = 1
        $post_user = $post->user->name;
        dd($post_user);

    }
    // List posts of current user
    public function index()
    {
        $posts = Post::where('user_id', auth()->id())->get();
        return view('posts.index', compact('posts'));
    }

    // Show single post (middleware ensures ownership)
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'body'  => 'required|string',
        ]);

        Post::create([
            'user_id' => auth()->id(), //  set automatically
            'title'   => $request->title,
            'body'    => $request->body,
        ]);

        return redirect('/posts')->with('success', 'Post created successfully');
    }

}

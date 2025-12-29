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
}

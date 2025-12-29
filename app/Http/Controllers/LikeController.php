<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;

class LikeController extends Controller
{
    public function showLikedPosts(){
        $user = User::find(14); // get User 1

        // Get all liked posts
        $likedPosts = $user->likedPosts()->get();

        foreach ($likedPosts as $post) {
             // echo $post->title . "<br>";
           $title[] = $post->title;

        }
        dd( $title);
    }

    public function showPostLikers() {
        $post = Post::find(2); // get Post 2

        // Get all users who liked the post
        $likers = $post->likers()->get();

        foreach ($likers as $user) {
            //echo($user->name . "<br>");
            $likername[] = $user->name;
        }
        dd($likername);
    }
}

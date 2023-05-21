<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\PostUserLike;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $posts=Post::paginate(6);
        $randomPosts= Post::get();
        $likedPosts = Post::withcount('LikedUsers')->get()->sortbydesc('liked_users_count')->take(4);
        //dd($likedPosts);
        return view('post.index',compact('posts','randomPosts','likedPosts'));

    }

}

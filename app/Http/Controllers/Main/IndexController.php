<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\PostUserLike;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {

        //dd($likedPosts);
        return redirect()->route('posts.index');

    }

}

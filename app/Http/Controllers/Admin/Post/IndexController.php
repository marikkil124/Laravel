<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Category;

class IndexController extends BaseController
{
    public function __invoke()
    {
        $posts=Post::all();

        return view('Admin.post.index',compact('posts'));
    }

}

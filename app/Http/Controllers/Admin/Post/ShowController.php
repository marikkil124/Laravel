<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;

class ShowController extends BaseController
{
    public function __invoke(Post $post,Category $categories)
    {

        return view('Admin.post.show',compact('post','categories'));
    }

}

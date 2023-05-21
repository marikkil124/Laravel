<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Support\Facades\Storage;

class EditController extends BaseController
{
    public function __invoke(Post $post)
    {
        $categories=Category::all();
        $tags=Tag::all();

        //dd($post->tags->pluck('id')->toArray());
        return view('Admin.post.edit',compact('post','categories','tags'));
    }

}

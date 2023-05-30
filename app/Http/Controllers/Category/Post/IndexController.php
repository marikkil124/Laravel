<?php

namespace App\Http\Controllers\Category\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\PostUserLike;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(Category $category)
    {

       // $posts=Post::where('category_id','=',$category->id)->get();
        $posts = $category->posts()->paginate(5);

        //dd($posts);
        return view('category.post.index',compact('posts','category'));

    }

}

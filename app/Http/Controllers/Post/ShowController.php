<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\PostUserLike;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Post $post)
    {

        $date = Carbon::parse($post->created_at);
        $relatedposts = Post::where('category_id', $post->category_id)
            ->where('id','!=',$post->id)
            ->get()
            ->take(3);
        return view('post.show',compact('post','date','relatedposts'));

    }

}

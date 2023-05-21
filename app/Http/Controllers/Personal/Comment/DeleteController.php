<?php

namespace App\Http\Controllers\Personal\Comment;

use App\Http\Controllers\Controller;
use App\Models\Comment;


class DeleteController extends Controller
{
    public function __invoke(Comment $comment)
    {
        $comment->delete();

        //dd($comments);
        return redirect()->route('personal.comment.index');
    }

}

<?php

namespace App\Http\Controllers\Personal\Comment;

use App\Http\Controllers\Controller;

use App\Http\Requests\Personal\Comment\UpdateRequest;
use App\Models\Comment;


class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request,Comment $comment)
    {
        $data=$request->validated();
        $comment->update($data);
        //dd($data);
        //Category::firstOrcreate(['title'=>$data['title']],['title'=>$data['title']]);
        return redirect()->route('personal.comment.index');

    }

}

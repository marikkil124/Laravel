<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\UpdateRequest;
use Illuminate\Support\Facades\Storage;
use App\Models\Post;
use Mockery\Exception;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request,Post $post)
    {
         $data = $request->validated();
         $post=$this->service->update($data,$post);
             // dd($data);
         //Category::firstOrcreate(['title'=>$data['title']],['title'=>$data['title']]);
         return redirect()->route('admin.post.show', compact('post'));
    }

}

<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\StoreRequest;
use App\Http\Requests\Admin\User\UpdateRequest;
use App\Models\User;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request,User $user)
    {
        $data=$request->validated();
        //dd($data);
        $user->update($data);

        //Category::firstOrcreate(['title'=>$data['title']],['title'=>$data['title']]);
        return redirect()->route('admin.user.show',compact('user'));
    }

}

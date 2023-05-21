<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $data = [];
        $data['UserCount'] = User::all()->count();
        $data['CategoryCount'] = Category::all()->count();
        $data['TagCount'] = Tag::all()->count();
        $data['PostCount'] = Post::all()->count();
        return view('Admin.main.index',compact('data'));
    }

}

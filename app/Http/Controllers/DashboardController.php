<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function allposts(){
        $posts = Post::where('user_id', Auth::user()->id)->get();
        return view('Posts.all-posts', compact('posts'));
    }
}

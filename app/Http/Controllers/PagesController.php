<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PagesController extends Controller
{
    
    public function index()
    {
    	$posts = Post::latest()->get();
    	return view('welcome', compact('posts'));
    }
}

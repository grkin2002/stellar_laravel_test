<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check() && Auth::user()->name =='admin')
        {
            $blogs= \App\Blog::get();
        }
        else
        {
            $blogs = \App\Blog::where('active', 1)->get();  
        }

        return view('home.blog.index', compact('blogs'));
    }

  
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(\App\Blog $blog)
    {

        return view('home.blog.show', compact('blog'));
    }

  
}

<?php

namespace App\Http\Controllers\Admin;



use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request; 
use Auth;
use Redirect;
use View;

class BlogController extends Controller
{


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = Request::all();
        $input['user_id'] = Auth::user()->id;

        \App\Blog::create($input);
        return Redirect::route('BlogList');
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( $blog)
    {
        // dd($blog);
        return view('admin.edit',compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($blog)
    {
        $blog->update(Request::all());
        return Redirect::route('BlogList');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(\App\Blog $post)
    {
        $post->delete();
        return Redirect::route('BlogList');
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostCreate;
use Auth;
use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $post=Post::with('user')->Order()->get();
        return view('posts',compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $users=User::lists('username','id');
        return view('create_post',compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(PostCreate $request)
    {
        
        $user=User::findorFail(Auth::user()->id);
        $post=new Post;
      
        $post->title=$request->input('title');
        $post->body=$request->input('body');
        $user->Post()->save($post);
        $imageName = $post->id . '.' .
            $request->file('image')->getClientOriginalExtension();

        $request->file('image')->move(
            base_path() . '/public/Images', $imageName
        );

        return redirect('posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $post=Post::with('user')->find($id);

        return view('post',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Post::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return Post::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $posts)
    {
        return Post::find($posts);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $posts = Post::find($id);
        $posts->update($request->all());
        return $posts;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return Post::destroy($id);
    }
           /**
     * search the specified resource from storage.
     * @param str $title
     * @return \Illuminate\Http\Response
     *
     */
    public function search($title)
    {
       return Post::where('title', 'like', '%'.$title.'%')->get();
    }
}

<?php

namespace App\Http\Controllers;

use App\Post;
use App\Http\Requests\PostRequest;
use Illuminate\Http\Request;
use App\Category;

class PostController extends Controller
{
    public function index(Post $xyz)
    {
        return view('posts/index')->with(['tests' => $xyz->getPaginateByLimit(5)]);
    }

    public function show(Post $abc)
    {
        return view('posts/show')->with(['tests2'=> $abc]);
    }
   
    // 引数をRequest->PostRequestにする
    public function store(Post $def, PostRequest $request) 
    {
        // dd($request);
        $input = $request['post'];
        $def->fill($input)->save();
        return redirect('/posts/' . $def->id);
    }
    

    public function edit(Post $post)
    {
        return view('posts/edit')->with(['post' => $post]);
    }
    public function update(PostRequest $request, Post $post)
    {
        $input_post = $request['post'];
        $post->fill($input_post)->save();
    
        return redirect('/posts/' . $post->id);
    }
    public function delete(Post $post)
    {
        $post->delete();
        return redirect('/');
    }
    public function create(Category $category)
    {
        return view('posts/create')->with(['categories' => $category->get()]);;
    }
}
?>
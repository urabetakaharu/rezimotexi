@extends('layouts.app')　
@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        {{Auth::user()->name}} 
        <h1>Blog Name</h1>
         <p class='create'>[<a href='/posts/create'>create</a>]</p>
        
        <div class='posts'>
            @foreach ($tests as $xyz)
                <div class='post'>
                    <h2 class='title'>
                        <a href="/posts/{{ $xyz->id }}">{{ $xyz->title }}</a>
                    </h2>
                    <p class='body'>{{ $xyz->body }}</p>
                    
                    
                    <a href="/categories/{{ $xyz->category->id }}">{{ $xyz->category->name }}</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" id="bty">delete</button>
                    <p id="txt"></p>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{$tests->links() }}
        </div>
         
    </body>
</html>
@endsection
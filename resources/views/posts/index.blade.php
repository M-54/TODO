@extends('layouts.app')

@section('title', 'Posts')

@section('content')
    <h1>Posts</h1>

    <ul>
        @foreach($posts as $post)
            <li>{{ $post['title'] }}</li>
        @endforeach
    </ul>
@endsection

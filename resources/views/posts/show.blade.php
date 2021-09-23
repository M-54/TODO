@extends('layouts.app')

@section('title', 'Show ' . $post['title'])

@section('content')
    <h1 id="title">{{ $post['title'] }}</h1>
    <p>{{ $post['body'] }}</p>
@endsection

@extends('layouts.app')

@section('content')
    <h1>{{$post->title}}</h1>
    <div>
        {{-- This syntax parses the HTML --}}
        {!! $post->body !!}
    </div>
    <hr>
    <small>Written on {{$post->created_at}}</small>
    <hr>
    <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
@endsection
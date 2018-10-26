@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>
    {{-- Using Laravel style html forms --}}
    {{-- https://laravelcollective.com/docs/5.4/html --}}
    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'PUT']) !!}
    <div class="form-group">
        {{ Form::label('title', 'Title')}}
        {{ Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
    </div>
    
    <div class="form-group">
        {{ Form::label('body', 'Body')}}
        {{ Form::textarea('body', $post->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
    </div>
    {{ Form::submit('Submit', ['class'=>'btn btn-success'])}}

    {!! Form::close() !!}

@endsection
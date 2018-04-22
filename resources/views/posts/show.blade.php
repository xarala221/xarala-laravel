@extends('layouts.app')
@section('content')
    <a class="btn btn-default" href="/posts" >Go Back</a>
    <h1>{{$post->title}}</h1>
    <div>
            <img class="img-fluid" style="width:100%" src="/storage/cover_images/{{$post->cover_image}}" alt="">
            <br><br> 
        {!!$post->body!!}
    </div>
    <hr>
    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
    <a class="btn btn-primary" href="/posts/{{$post->id}}/edit" >Edit</a>
    {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'class' => 'float-sm-right', 'method' => 'POST' ])!!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Delete',['class' => 'btn btn-danger'])}}
    {!!form::close()!!}
        @endif
    @endif
@endsection
@extends('layouts.master')

@section('content')


        <!-- Static navbar -->




@foreach($posts as $post)
    <h1> {{$post->name}} </h1>

    <p> {{$post->message}} </p>
    <p> <a class= "btn btn-primary" href="{{ route('admin.posts.edit', $post) }}">modifier </a> </p>
@endforeach


@stop
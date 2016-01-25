@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row">
        @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif
        @if ( !$posts->count() )
            <div class="well well-lg">You have no Posts for now</div>
            <a href="{{ route('posts.create') }}" class="btn btn-primary" role="button"></span><span class="btn-text">Create a Post</span></a>
        @else
            <div class="meta">
                <a href="{{ route('posts.list') }}" class="pull-left"></span><span class="btn-text">All Posts</span></a>
                <a href="{{ route('posts.create') }}" class="btn btn-primary pull-right" role="button"></span><span class="btn-text">Add a Post</span></a>
            </div>

            <table>
                <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td>{{$post->title}}</td>
                        <td>{{$post->updated_at}}</td>
                        <td>Username</td>
                        <td>Answers</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>
</div>
@stop
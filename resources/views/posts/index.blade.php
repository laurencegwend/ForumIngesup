@extends('layouts.master')

@section('content')

    <div class="container">
        <div class="row">
        <!-- Static navbar -->

            <h2 style="text-align: center">Here, You can see all your messages</h2>

            @if($errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            @foreach($posts as $post)
                <table>
                    <thead>
                        <td><tr></tr></td>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$post->name}}</td>
                        </tr>
                        <tr>
                            <td>{{$post->created_at}}</td>
                        </tr>
                    </tbody>
                </table>
                <a class= "btn btn-primary" href="{{ route('admin.posts.edit', $post) }}">modifier </a> </p>

            @endforeach

        </div>
    </div>


@stop
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
        @if ( !$questions->count() )
            <div class="well well-lg">You have no Questions for now</div>
            <a href="{{ route('question.create') }}">Create a Post</a>
        @else
            <div class="row">
                <section class="col-md-6">
                    <h2>All Posts</h2>
                </section>
                <section class="col-md-6">
                    <a href="{{ route('question.create') }}" class="pull-right add-post-link">Add a Post</a>
                </section>
            </div>
            <div class="row">
                <table class="table table-responsive table-hover">
                    <tbody>
                    @foreach($questions as $questionItem)
                        <tr>
                            <td class="col-md-4">{{$questionItem->title}}</td>
                            <td class="col-md-4">{{$questionItem->created_at->diffForHumans()}}</td>
                            <td class="col-md-4">
                                <a href="#">{{$user->first_name}} {{$user->last_name}}</a>
                            </td>
                            <td class="col-md-4">Comments</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="pull-right">{!! $questions->render() !!}</div>
            </div>
        @endif
    </div>
</div>
@stop
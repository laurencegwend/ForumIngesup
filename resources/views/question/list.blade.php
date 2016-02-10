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
            <a href="{{ route('question.create') }}">Ask a Question</a>
        @else
            <div class="row">
                <section class="col-md-6">
                    <h2>All Questions</h2>
                </section>
                <section class="col-md-6">
                    <a href="{{ route('question.create') }}" class="pull-right add-post-link">Ask a Question</a>
                </section>
            </div>
            <div class="row">
                <table class="table table-responsive table-hover">
                    <tbody>
                    @foreach($questions as $questionItem)
                        <tr>
                            <td class="col-md-6">
                                <a href="{{ route('question.show', ['id' => $questionItem->id]) }}">{{$questionItem->title}}</a>
                                <div>Updated time ago by ..</div>
                            </td>
                            <td class="col-md-2">{{$questionItem->created_at->diffForHumans()}}</td>
                            <td class="col-md-2">
                                <a href="#">{{$user->first_name}} {{$user->last_name}}</a>
                            </td>
                            <td class="col-md-2">{{$questionItem->answers()->count()}} answer(s)</td>
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
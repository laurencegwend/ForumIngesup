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
                    @foreach($questions as $question)
                        <tr>
                            <td class="col-md-6">
                                <a href="{{ route('question.show', ['id' => $question->id]) }}">{{$question->title}}</a>
                                @if(!$question->answers()->count() == 0)
                                <div>Updated    {{$question->answers()->orderBy('created_at', 'desc')->first()->created_at->diffForHumans()}}
                                    by          {{$question->answers()->orderBy('created_at', 'desc')->first()->user->first_name}}
                                                {{$question->answers()->orderBy('created_at', 'desc')->first()->user->last_name}}
                                </div>
                                @endif
                            </td>
                            <td class="col-md-2">{{$question->created_at->diffForHumans()}}</td>
                            <td class="col-md-2">
                                <a href="#">{{$question->user->first_name}} {{$question->user->last_name}}</a>
                            </td>
                            <td class="col-md-2">{{$question->answers()->count()}} answer(s)</td>
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
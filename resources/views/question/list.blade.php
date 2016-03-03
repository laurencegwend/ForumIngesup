@extends('layouts.master')

@section('content')

<div class="container">
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
            <div class="row question-list-header">
                <section class="col-md-6">
                    <h2>All Questions</h2>
                </section>
                <section class="col-md-6">
                    <a href="{{ route('question.create') }}" class="pull-right add-post-link">Ask a Question</a>
                </section>
            </div>
            @foreach($questions as $question)
                <div class="row question-line">
                    <div class="col-md-6 question-title">
                        <a href="{{ route('question.show', ['id' => $question->id]) }}">{{$question->title}}</a>
                        <div class="content">
                            {{str_limit($question->content, 35)}}
                        </div>
                    </div>
                    <div class="col-md-2 created">{{$question->created_at->diffForHumans()}}</div>
                    <div class="col-md-2 user-full-name">
                        <a href="#">{{$question->user->first_name}} {{$question->user->last_name}}</a>
                    </div>
                    <div class="col-md-2 answers"><div class="nb-answers">{{$question->answers()->count()}}</div><span>answer(s)</span>
                        @if(!$question->answers()->count() == 0)
                            <div class="last-update"> Latest answer {{$question->answers()->orderBy('created_at', 'desc')->first()->created_at->diffForHumans()}}
                            </div>
                        @endif
                    </div>
                </div>
            @endforeach
            <div class="pull-right">{!! $questions->render() !!}</div>
        @endif
</div>
@stop
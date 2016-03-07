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

        <div class="row question-line">
            <div class="col-md-6 question-title">
                <div class="title">
                    {{$question->title}}
                </div>
                <div class="content">
                    {{$question->content}}
                </div>
            </div>
            <div class="col-md-2 created">{{$question->created_at->diffForHumans()}}</div>
            <div class="col-md-2 user-full-name">
                <a href="#">{{$question->user->first_name}} {{$question->user->last_name}}</a>
            </div>
            <div class="col-md-2 answers"><div class="nb-answers">{{$question->answers()->count()}}</div><span>answer(s)</span>
                @if(!$question->answers()->count() == 0)
                    <div class="last-update">
                        Latest answer {{$question->answers()->orderBy('created_at', 'desc')->first()->created_at->diffForHumans()}}
                    </div>
                @endif
            </div>
        </div>

        @foreach($answers as $answer)
            <div class="row answer-content form-group"><p>{{$answer->content}}</p></div>
        @endforeach

        {!! Form::open(array('route' => array('answer.store', $question->id), 'method' => 'POST')) !!}

        <div class="row your-answer form-group">
            {!! Form::label('content', 'Your Answer') !!}
            {!! Form::textarea('content', null, array('class' => 'form-control')) !!}
        </div>
        <div class="row pull-right">
        {!! Form::submit('Send', array('class' => 'btn btn-primary')) !!}
            <br/>
            <br/>
        </div>
    </div>
</div>
@stop
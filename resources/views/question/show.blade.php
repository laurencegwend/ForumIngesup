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
        <div class="row question-header-title">
            <div class="col-md-12 col-xs-12">
                <h2>{{$question->title}}</h2>
            </div>
            <div class="col-md-12 col-xs-12 question-title-user-info">
                Created {{$question->created_at->diffForHumans()}} by <b>{{$question->user->first_name}} {{$question->user->last_name}}</b>
            </div>
        </div>

        <div class="row question-content">
            <div class="col-md-12 col-xs-12">{!! $question->content!!}</div>
        </div>

        <div class="row answers-count">
            <div class="col-md-12 col-xs-12">{{$question->answers()->count()}} Answer(s)</div>
        </div>

        @foreach($answers as $answer)
            <div class="row answer-line">
                <div class="col-md-1 col-xs-1 answer-vote">
                    @if($answer->note_average <> 0)
                        <span>Note</span>
                        <div>{{$answer->note_average}}/5</div>
                    @endif
                </div>
                <div class="col-md-9 col-xs-9">
                    {!!$answer->content !!}
                </div>
                <div class="col-md-2 col-xs-2 answer-user-info"> By <b>{{$answer->user->first_name}} {{$answer->user->last_name}}</b><br>
                    {{$answer->created_at->diffForHumans()}}<br/>
                    @if(Auth::user()->id != $answer->user_id)
                        <button class="btn btn-primary" id="btn-vote" >Vote</button><br/>
                    @endif
                    <div id="input-vote">
                        {!! Form::open(array('route' => array('answer.vote', 'id' => $question->id, 'answerid' => $answer->id), 'method' => 'POST')) !!}
                        {!! Form::text('note', null, array('class' => 'form-control', 'placeholder' =>  'Note From 0 to 5', 'maxlength'=>1)) !!}
                        {!! Form::submit('Send Vote', array('class' => 'pull-right btn btn-primary')) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        @endforeach

        <div class="row">
            {!! Form::open(array('route' => array('answer.store', $question->id), 'method' => 'POST')) !!}
            <div class="col-md-12 col-xs-12 your-answer">
                {!! Form::label('content', 'Your Answer') !!}
                {!! Form::textarea('content', null, array('class' => 'form-control')) !!}
            </div>
            <div class="col-md-12 col-xs-12">
                {!! Form::submit('Send', array('class' => 'pull-right btn btn-primary')) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@stop
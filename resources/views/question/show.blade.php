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
        <div class="row col-md-12 col-xs-12 question-title">
                <h2>{{$question->title}}</h2>
                <div>
                    Created {{$question->created_at->diffForHumans()}} by <a href="#">{{$question->user->first_name}} {{$question->user->last_name}}</a>
                </div>
        </div>

        <div class="row col-md-12 col-xs-12 question-content">{{$question->content}}</div>

        <div class="row col-md-12 col-xs-12 answers-count">{{$question->answers()->count()}} Answer(s)</div>

        @foreach($answers as $answer)
            <div class="row answer-line col-md-12 col-xs-12">
                <div class="col-md-12 col-xs-12">{{$answer->content}}</div>
            </div>
        @endforeach

        {!! Form::open(array('route' => array('answer.store', $question->id), 'method' => 'POST')) !!}

        <div class="row col-md-12 col-xs-12">
            <div class="your-answer">
            {!! Form::label('content', 'Your Answer', array('class' => 'label-answer')) !!}
            {!! Form::textarea('content', null, array('class' => 'form-control')) !!}
            </div>
            <div class="row pull-right">
            {!! Form::submit('Send', array('class' => 'btn btn-primary label-answer')) !!}
            </div>
        </div>
</div>
<script type="text/javascript">
    CKEDITOR.replace( 'content' );
</script>

@stop
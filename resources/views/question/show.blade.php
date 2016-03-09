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
            <div class="col-md-12 col-xs-12">
                Created {{$question->created_at->diffForHumans()}} by <a href="#">{{$question->user->first_name}} {{$question->user->last_name}}</a>
            </div>
        </div>

        <div class="row question-content">
            <div class="col-md-12 col-xs-12">{{$question->content}}</div>
        </div>

<<<<<<< HEAD
            <div class="row question-list-header">
                <section class="col-md-6">
                    <h2>{{$question->title}}</h2>
                </section>
                <section class="col-md-6">
                    <a href="{{ route('question.create') }}" class="pull-right add-post-link">Ask a Question</a>
                </section>
            </div>

        <div class="row question-title form-group">
            <table>
                <tbody>
                    <tr>
                        <td>{{$question->title}}</td>
                    </tr>
                    <tr>
                        <td class="info-user"> Created {{$question->created_at->diffForHumans()}} by <a href="#">{{$question->user->first_name}} {{$question->user->last_name}}</a></td>
                        <td class="info-answers col-md-10 text-right">{{$question->answers()->count()}} Answers</td>
                    </tr>
                </tbody>
            </table>
=======
        <div class="row answers-count">
            <div class="col-md-12 col-xs-12">{{$question->answers()->count()}} Answer(s)</div>
>>>>>>> d368a2e1f9581bbef58fbbea5e6848063ee0b5f6
        </div>

        @foreach($answers as $answer)
            <div class="row answer-line">
                <div class="col-md-1 col-xs-1">A</div>
                <div class="col-md-9 col-xs-9">{!!$answer->content !!}</div>
                <div class="col-md-2 col-xs-2 answer-user-info"> By <a href="#">{{$answer->user->first_name}} {{$answer->user->last_name}}</a><br>
                    {{$answer->created_at->diffForHumans()}}
                </div>
            </div>
        @endforeach

        <div class="row">
            {!! Form::open(array('route' => array('answer.store', $question->id), 'method' => 'POST')) !!}
            <div class="col-md-12 col-xs-12 your-answer">
            {!! Form::label('content', 'Your Answer', array('class' => 'answer-form-label')) !!}
            {!! Form::textarea('content', null, array('class' => 'form-control')) !!}
            </div>
            <div class="col-md-12 col-xs-12">
            {!! Form::submit('Send', array('class' => 'pull-right btn btn-primary answer-form-label')) !!}
            </div>
        </div>
</div>
@stop
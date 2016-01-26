@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row col-md-12">
        @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <h2>Ask Your Question</h2>
        <br/>
        <br/>
        {!!Form::open(['method' => 'POST', 'url' => route('question.store')])!!}
        <div class="row">
            <div class="col-md-4">
                {!! Form::label('title', 'Title') !!}
            </div>
            <div class="col-md-8">
                {!! Form::text('title', null, array('class' => 'form-control','placeholder' => 'title')) !!}
            </div>
        </div>
        <br/>
        <br/>
        <div class="row">
            <div class="col-md-4">
                {!! Form::label('content', 'Content') !!}
            </div>
            <div class="col-md-8">
                {!! Form::textarea('content', null, array('class' => 'form-control')) !!}
            </div>
        </div>
        <br/>
        <br/>
        <div class="row pull-right">
            {!! Form::submit('Send' , array('class' => 'btn btn-primary')) !!}
        </div>

        {!! Form::close() !!}
    </div>
</div>
@stop
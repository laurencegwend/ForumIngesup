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

        <h2>Ask Your Question</h2>

        {!!Form::open(['url' => route('question.store'), 'method' => 'POST'])!!}

        <div class="row">
            <div class="col-md-12 col-xs-12">
                {!! Form::label('title', 'Title') !!}
                {!! Form::text('title', null, array('class' => 'form-control','placeholder' => 'title')) !!}
            </div>
            <div class="col-md-12 col-xs-12">
                {!! Form::label('content', 'Content') !!}
                {!! Form::textarea('content', null, array('class' => 'form-control')) !!}
            </div>
            <div class="col-md-12 col-xs-12">
                {!! Form::submit('Send' , array('class' => 'btn btn-primary pull-right')) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop
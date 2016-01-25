@extends('layouts.master')

@section('content')

    <div class="container">
        <div class="row col-md-12">
            <h2> Create a Subject </h2>
            @if($errors->any())
            <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
            </div>
            @endif

            {!! Html::ul($errors->all(), array('class'=>'errors')) !!}

            {!!Form::open(['method' => 'POST', 'url' => route('posts.store')])!!}
                {!! Form::label('title', 'Title') !!}
                {!! Form::text('title', null, array('class' => 'form-control','placeholder' => 'title')) !!}

                {!! Form::label('message', 'Message') !!}
                {!! Form::textarea('message', null, array('class' => 'form-control','placeholder' => 'message')) !!}

                {!! Form::submit('Send' , array('class' => 'btn btn-primary')) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop
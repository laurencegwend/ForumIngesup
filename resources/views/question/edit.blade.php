@extends('layouts.master')

@section('content')
        <!-- Static navbar -->

    <div class="container">
        <div class="row">

            <h2>Update your Subject</h2>
            @if($errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            {!!Form::open(['method' => 'PUT', 'url' => route('question.update', $post)])!!}

            <div class="form-group">
                {!!Form::label('title', 'Title:', ['class' => 'col-sm-2 control-label'])!!}

                {!!Form::text('title', $post->name, ['class' => 'form-control xs-4'])!!}

            </div>
            <div class="form-group">
                {!!Form::label('message', 'Message:', ['class' => 'col-sm-2 control-label'])!!}
                {!!Form::textarea('message', $post->message, ['class' => 'form-control -xs-4'])!!}
            </div>
            {!! Form::submit('Save', array("class"=>'btn btn-primary btn-large')) !!}

            {!!Form::close()!!}

        </div>
    </div>
@stop
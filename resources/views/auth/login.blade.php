@extends('layouts.auth')

@section('content')

<div class="container login col-md-3 col-md-offset-3">
    <div class="row">
        @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif
        <div class="row">
            {!! Form::open(array('url' => 'auth/login','class'=>'form')) !!}

            {!! Form::label('email', 'E-Mail Address') !!}
            {!! Form::text('email', null, array('class' => 'form-control','placeholder' => 'example@gmail.com')) !!}

            {!! Form::label('password', 'Password') !!}
            {!! Form::password('password', array('class' => 'form-control')) !!}

            {!! Form::submit('Sign In' , array('class' => 'btn btn-primary')) !!}

            {!! Form::close() !!}
        </div>
        <div class="row">
            Don't Have an Account
        </div>
    </div>
</div>
@stop













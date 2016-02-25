@extends('layouts.auth')

@section('content')

<div class="container login">
    <div class="row row-login">
        @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif
        <div class="row-form">
            {!! Form::open(array('url' => 'auth/login','class'=>'form')) !!}
                <div class="form-group">
                    {!! Form::label('email', 'Email') !!}
                    {!! Form::text('email', null, array('class' => 'form-control','placeholder' => 'firstname.lastname@ynov.com')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('password', 'Password') !!}
                    {!! Form::password('password', array('class' => 'form-control','placeholder' => '********')) !!}
                </div>
                {!! Form::submit('Sign In' , array('class' => 'btn btn-primary')) !!}
            {!! Form::close() !!}
            <a href="#" class="forgot-password">Forgot Your Password</a>
        </div>
        <div class="row-register">
            <h5><strong>Don't Have an Account</strong></h5>
            <a href="/auth/register"><button class="btn btn-primary">Sign Up</button></a>
        </div>
    </div>
</div>
@stop













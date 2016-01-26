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
        <div class="row row-form">
            {!! Form::open(array('url' => 'auth/register/post','class'=>'form')) !!}

            {!! Form::label('first_name', 'First Name') !!}
            {!! Form::text('first_name', null, array('class' => 'form-control','placeholder' => 'first_name')) !!}


            {!! Form::label('last_name', 'Last Name') !!}
            {!! Form::text('last_name', null, array('class' => 'form-control','placeholder' => 'last_name')) !!}

            {!! Form::label('email', 'Email') !!}
            {!! Form::text('email', null, array('class' => 'form-control','placeholder' => 'firstname.lastname@ynov.com')) !!}

            {!! Form::label('password', 'Password') !!}
            {!! Form::password('password', array('class' => 'form-control')) !!}

            {!! Form::label('password_confirmation','Confirm Password',['class'=>'control-label']) !!}
            {!! Form::password('password_confirmation',['class'=>'form-control']) !!}
            <br/>
            {!! Form::submit('Sign Up' , array('class' => 'btn btn-primary')) !!}

            {!! Form::close() !!}
        </div>
    </div>
    <div class="row row-register">
        <div class="row">
            <h5>Already Have an Account</h5>
            <a href="/auth/login"><button class="btn btn-primary btn-sm">Sign In</button></a>
        </div>
    </div>
</div>
@stop


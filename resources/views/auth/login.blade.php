@extends('layouts.auth')

@section('content')

    <div class="container">
        <div class="row">
            <div class="">
                <h2>Log in</h2>
                <h3>Hi, here you can log into your account. Just fill in the form and press the "Sign In" button.</h3>
                @if($errors->any())
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    </div>
                @endif
                <div>
                {!! Form::open(array('url' => 'auth/login','class'=>'form')) !!}

                {!! Form::label('email', 'E-Mail Address') !!}
                {!! Form::text('email', null, array('class' => 'form-control','placeholder' => 'example@gmail.com')) !!}

                {!! Form::label('password', 'Password') !!}
                {!! Form::password('password', array('class' => 'form-control')) !!}
                    <br/>
                {!! Form::submit('Sign In' , array('class' => 'btn btn-primary')) !!}

                {!! Form::close() !!}
                <br>
            </div>
        </div>
    </div>
@stop













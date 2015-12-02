<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <h2>Register to create an account</h2>
            <h3>Hi, here you can create a new account. Just fill in the form and press sign up button.</h3>
            @if($errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
            {!! Html::ul($errors->all(), array('class'=>'errors')) !!}

            {!! Form::open(array('url' => 'auth/register/post','class'=>'form')) !!}

            {!! Form::label('first_name', 'First name') !!}
            {!! Form::text('first_name', null, array('class' => 'form-control','placeholder' => 'first_name')) !!}

            {!! Form::label('last_name', 'Last name') !!}
            {!! Form::text('last_name', null, array('class' => 'form-control','placeholder' => 'last_name')) !!}

            {!! Form::label('email', 'E-Mail Address') !!}
            {!! Form::text('email', null, array('class' => 'form-control','placeholder' => 'example@gmail.com')) !!}

            {!! Form::label('password', 'Password') !!}
            {!! Form::password('password', array('class' => 'form-control')) !!}

            {!! Form::label('password_confirmation','Confirm Password',['class'=>'control-label']) !!}
            {!! Form::password('password_confirmation',['class'=>'form-control']) !!}

            {!! Form::submit('Sign Up' , array('class' => 'btn btn-primary')) !!}

            {!! Form::close() !!}

        </div>
    </div>
</div>



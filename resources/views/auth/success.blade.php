<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <h2>Log Out</h2>
            <h3>Hi, here you can log out. Just press the "Sign Up" button.</h3>
            @if($errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            {!! Form::open(array('url' => 'auth/logout','class'=>'form', 'method' => 'GET')) !!}

            {!! Form::submit('Sign Out' , array('class' => 'btn btn-primary')) !!}

            {!! Form::close() !!}
        </div>
    </div>
</div>

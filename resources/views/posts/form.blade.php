@extends('layouts.master')

@section('content')

    <div class="container">
        <div class="row">
                <h2> Create a Subject </h2>

                @if($errors->any())
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    </div>
                @endif

            {!! Html::ul($errors->all(), array('class'=>'errors')) !!}

            {!!Form::open(['method' => 'POST', 'url' => route('admin.posts.store')])!!}

                <div class="col-xs-6">
                    {!! Form::label('name', 'Title') !!}
                    {!! Form::text('name', null, array('class' => 'form-control','placeholder' => 'name')) !!}


                    {!! Form::label('message', 'Message') !!}
                    {!! Form::textarea('message', null, array('class' => 'form-control','placeholder' => 'message')) !!}

                    <br/>
                    {!! Form::submit('Send' , array('class' => 'btn btn-primary')) !!}

                    {!! Form::close() !!}
                </div>

            </div>
    </div>

@stop
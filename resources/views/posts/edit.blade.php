@extends('layouts.master')
@section('content')
        <!-- Static navbar -->



<h1>Modifier votre sujet:</h1>

{!!Form::open(['method' => 'PUT', 'url' => route('admin.posts.update', $post)])!!}

<div class="form-group">
    {!!Form::label('name', 'Titre de votre sujet:', ['class' => 'col-sm-2 control-label'])!!}

    {!!Form::text('name', $post->name, ['class' => 'form-control xs-4'])!!}

</div>
<div class="form-group">
    {!!Form::label('message', 'votre message:', ['class' => 'col-sm-2 control-label'])!!}
    {!!Form::textarea('message', $post->message, ['class' => 'form-control -xs-4'])!!}
</div>
{!! Form::submit('Enregistrer', array("class"=>'btn btn-primary btn-large')) !!}

{!!Form::close()!!}
@stop
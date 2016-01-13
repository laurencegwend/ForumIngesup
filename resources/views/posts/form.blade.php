@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-4">
            <div class="form-block">
                <h1> Creer un sujet </h1>
                <form method="POST" action="{{route("posts.store")}}">
                    {!! csrf_field() !!}

                    <div class="form-group">
                        <labael>Titre du sujet:</labael>
                        <input type="text" name="name" value="{{ old('name') }}">
                    </div>

                    <div class="form-group">
                        <label> Votre message: </labael>
                            <textarea name="message" ></textarea>
                    </div>


                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Envoyer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


@stop
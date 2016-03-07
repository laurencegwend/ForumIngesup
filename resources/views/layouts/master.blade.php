<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        @section('style')
        <!-- Bootstrap -->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"/>
        <link rel="stylesheet" href="/css/stylesheet.css" />
    </head>
    <body>
        <div class="navbar navbar-default">
            <div class="container">
                <li class="navbar-left">
                    <img alt="Logo" src="{{ asset('img/logo.png') }}">
                <li class="pull-left">
                    <a href="/questions">Questions</a>
                </li>
                <li class="col-md-6">
                    <a href="/question/create">Ask a Question</a>
                </li>
                <li class="navbar-right">
                    <a href="#"><i class="ion-person"></i></a>
                    <a href="/auth/logout"><i class="ion-power"></i></a>
                </li>
            </div>
        </div>
        @yield('content')

        @section('script.footer')
                <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <!-- Latest compiled and minified JavaScript -->
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <!-- CKEditor ready-for-use HTML text editor designed to simplify web content creation.
         It's a WYSIWYG editor that brings common word processor features directly to your web pages -->
        <script src="//cdn.ckeditor.com/4.5.7/full/ckeditor.js"></script>
        <script type="text/javascript">
            CKEDITOR.replace( 'content' );
        </script>

        <script type="text/javascript">
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        </script>
    </body>
</html>
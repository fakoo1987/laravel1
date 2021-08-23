<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1 ">
        <meta name="description" content=""/>
        <title>Starter Template for Bootstrap</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css"/>
        <style> body {padding-top: 50px;} .starter-template {padding: 40px 15px;text-align: center;} </style>
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">@yield('titulo')</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="{{ route('noticias') }}">Noticias</a></li>
                        <li><a href="{{ route('blog') }}">Blog</a></li>

                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <div class="starter-template">
                    @yield('contenido')
                    <p><a href="http://getbootstrap.com/getting-started/">http://getbootstrap.com/getting-started/</a></p>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    </body>
</html>
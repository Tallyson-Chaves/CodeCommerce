<!DOCTYPE html>
<html>
    <head>
        <title>CodeCommerce - @yield('title')</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    </head>
    <body>
        @section('header')

        @show
        @section('menu')
            <div>
                <nav class="navbar navbar-default">
                    <a class="navbar-brand" href="/">Code Commerce</a>
                    <ul class="nav navbar-nav">
                        <li><a href="{!! $url = route('admin::products'); !!}">Admin Products</a></li>
                        <li><a href="{!! $url = route('admin::categories'); !!}">Admin Categories</a></li>
                    </ul>
                </nav>
            </div>
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
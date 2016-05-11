<!DOCTYPE html>
<html>
    <head>
        <title>CodeCommerce - @yield('title')</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    </head>
    <body>
        @section('header')
        <div class="container">
            <h1><a href="/">Code Commerce</a></h1>
        </div>
        @show
        @section('menu')
            <div class="container">
                <nav class="navbar navbar-default">
                    <ul class="nav navbar-nav">
                        <li><a href="<?php $url = route('home'); echo $url; ?>">Home</a></li>
                        <li><a href="<?php $url = route('admin::products'); echo $url; ?>">Admin Products</a></li>
                        <li><a href="<?php $url = route('admin::categories'); echo $url; ?>">Admin Categories</a></li>
                    </ul>
                </nav>
            </div>
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
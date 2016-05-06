<!DOCTYPE html>
<html>
    <head>
        <title>CodeCommerce - @yield('title')</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    </head>
    <body>
        @section('menu')
            <div class="container">
            <h1><a href="/">Code Commerce</a></h1>
            <a class="btn btn-default" href="admin/products">Admin Products</a>
            <a class="btn btn-default" href="admin/categories">Admin Categories</a>
            </div>
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
<!DOCTYPE html>
<html>
    <head>
        <title>CodeCommerce - {{ $title }}</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    </head>
    <body>
        
        <div class="container">
            <h1>Categorias</h1>
            <ul>
                @foreach($categories as $category)
                    <li>{{ $category->name }}</li>
                @endforeach
            </ul>
        </div>
    </body>
</html>
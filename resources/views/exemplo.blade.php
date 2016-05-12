<h1>Categorias</h1>
<ul>
    @foreach($categories as $category)
        <li>{{ $category->name }}</li>
    @endforeach
    {{ $categories }}

    <?php print_r(array_values($teste)); ?>

</ul>
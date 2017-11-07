<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>blog</title>
  </head>
  <body>

    @forelse($posts as $post)
        <img width="60px" src="{{ $post->image }}">
        <a href="#">{{ $post->title }}</a>
        {{ $post->category->name }}
        {{ $post->abstract }}

    @empty

        <p>No hay productos cargados</p>

    @endforelse




  </body>
</html>
<tbody>

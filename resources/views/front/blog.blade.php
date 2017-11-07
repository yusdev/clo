@extends('layouts.front')

  @section('content')

  <div class="post-container">

    @foreach($posts as $post)
    <div class="post">
      <article>
        <a href="#"><img src="{{$post->image}}"></a>
        <section>
          <a href="#">{{$post->title}}</a>
          <p>{{$post->abstract}}</p>
          <a class="button" href="#">LEER MAS</a>
        </section>
      </article>
    </div>
   @endforeach
  </div>

<div class="paginate">
    {{ $posts->links() }}
</div>


  @endsection

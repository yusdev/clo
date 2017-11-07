@extends('layouts.front')

  @section('content')

  <div class="post-container">

    @foreach($posts as $post)
    <div class="post">
      <article>
        <a href="{{ route('blog.postshow', ['post'=>$post->category->name,'slug'=>$post->slug])}}"><img src="{{$post->image}}"></a>
        <section>
          <a href="{{ route('blog.postshow', ['post'=>$post->category->name,'slug'=>$post->slug])}}">{{$post->title}}</a>
          <p>{{$post->abstract}}</p>
          <a class="button" href="{{ route('blog.postshow', ['post'=>$post->category->name,'slug'=>$post->slug])}}">LEER MAS</a>
        </section>
      </article>
    </div>
   @endforeach
  </div>

<div class="paginate">
    {{ $posts->links() }}
</div>


  @endsection

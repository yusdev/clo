@extends('layouts.front')

  @section('content')
  <div >

  <div class="post-container" id="masonry">

    @foreach($posts as $post)
    <div class="post" id="masonrycu">
      <article>
        <a href="{{ route('blog.postshow', ['post'=>$post->category->name,'slug'=>$post->slug])}}">
          <div class="imgs">
            <img src="{{$post->image}}">
            <div class="tri-post">
              <img src="/images/tri.svg">
            </div>
          </div>
        <section>
          <div class="prepost-title" href="#">{{$post->title}}</div>
          <p class="prepost-abstract">{{$post->abstract}}</p>
        </section>
        </a>
      </article>
    </div>
   @endforeach
  </div>
</div>
<div class="paginate">
    {{ $posts->links() }}
</div>




  @endsection

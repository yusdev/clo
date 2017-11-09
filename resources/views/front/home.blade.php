@extends('layouts.front')

@section('content')


{{-- SUSCRIPCION AL MAIL -------------------------------------------------- --}}
 <div class="homesubs">
   <div class="subsform-container">
     <div class="subs-title">
       SEGUINOS POR CORREO
     </div>
     <form class="subs-form" action="{{ route('index') }}" method="post">
      {{csrf_field()}}
       <input type="text" name="email" value="" placeholder="Ingrese su e-mail">
       <input type="submit" value="SUSCRIBIRSE">
     </form>
   </div>
 </div>

 {{-- NOTAS --------------------------------------------------------------- --}}


<div class="post-container">

  <h2>Notas más recientes</h2>

  @foreach($posts as $post)
  <div class="post">
    <article>
      <a href="#">
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

@endsection

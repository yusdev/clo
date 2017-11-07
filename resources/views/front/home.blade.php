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

@endsection

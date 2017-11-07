@extends('layouts.front')

  @section('content')


  <div class="aboutus-container">

    <div class="aboutus-text">

      <p> Closhop es una comunidad interesada en el diseño de autor, en la moda emergente, en las ferias, los showrooms, eventos y todo lo referente al mundo de la moda.
        Pero no sólo se interesa por ello, sino que también se interesa por saber qué hay detrás de cada diseñador, de cada prenda o de cada colección.
        Es por eso que además de brindar info acerca de tendencias y moda, también contamos historias de diseñadores que con pasión, día a día, se esmeran por realizar colecciones y prendas que nos hagan sentir únicos de alguna manera.

      Te invitamos a hacerte un té, un café o un mate y disfrutar con nosotros de muchas historias, llenas de amor, dedicación y por supuesto mucho pero mucho diseño.

      <div class="">
        ¿Sos diseñador/a y querés compartir tu historia? <a href="{{route('contactus')}}">Contáctanos</a>
        <br><vr>
        ¿Querés enterarte de todas las notas? <a href="{{route('index')}}">Suscribite</a>
      </div>

      </p>

    </div>


    <div class="aboutus-img">
      <img src="images/aboutus.png">
    </div>

  </div>

  @endsection

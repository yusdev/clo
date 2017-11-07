@extends('layouts.front')

@section('content')


@if (count($errors) > 0)
<div class="">
  <ul>
    @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif

<div class="contact-container">
  <form class="contact-form" action="{{route('contactus')}}" enctype="multipart/form-data" method="post">
    {{csrf_field()}}

    <div class="completename">
      <input type="text" name="name" value="{{old('name')}}" placeholder="Nombre">
      <input type="text" name="email" value="{{old('email')}}" placeholder="Correo electrónico">
    </div>

    <input type="text" name="subject" value="{{old('subject')}}" placeholder="Asunto">
    <textarea name="message" value="" placeholder="Ingrese su mensaje"></textarea>
    <input class="button" style="width:100%" type="submit" value="enviar">
  </form>
</div>

@endsection

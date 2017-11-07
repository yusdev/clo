@extends('layouts.front')

  @section('content')

  <div class="postshow-container">
    <h2 class="post-title"> {{$post->title}} </h2>
    <p class="post-abstract"> {{$post->abstract}} </p>

    <img style="width:100%"src="{{$post->image}}">

    <div class="post-content">
      <p>{{$post->description}}</p>
    </div>

    <div class="post-author"> Por {{$post->user->name}} {{$post->user->lastname}} </div>

  </div>


  @endsection

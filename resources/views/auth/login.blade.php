@extends('layouts.back')

@section('content')
<div class="login-container">
  <div class="">INICIAR SESIÓN</div>

    <form class="login-form" method="POST" action="{{ route('login') }}">
      {{ csrf_field() }}

      <!-- EMAIL -->
      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <label for="email" class="">E-Mail Address</label>
        <input id="email" type="email" class="f" name="email" value="{{ old('email') }}" required autofocus>

            @if ($errors->has('email'))
              <strong>{{ $errors->first('email') }}</strong>
            @endif
      </div>

      <!-- PASSWORD -->
      <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        <label for="password" class="">Password</label>
        <input id="password" type="password" class="" name="password" required>

            @if ($errors->has('password'))
              <strong>{{ $errors->first('password') }}</strong>
            @endif
      </div>

      <!-- REMEMBER ME -->
      <label>
        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me</input>
      </label>

      
      <!-- BUTTON LOGIN       -->
      <button type="submit" class="button">Login</button>

      <!-- FORGOT PASSWORD -->
      <a class="" href="{{ route('password.request') }}">Forgot Your Password?</a>

    </form>
  </div>
</div>

@endsection

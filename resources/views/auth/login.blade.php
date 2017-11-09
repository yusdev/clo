<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/front/styles.css">
    <link rel="stylesheet" href="/css/back/styles.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title> CLOGIN</title>
  </head>
  <body>

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


  </body>
</html>

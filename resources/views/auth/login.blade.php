<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <!-- <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/front/styles.css">
    <link rel="stylesheet" href="/css/back/styles.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->

    <!-- SB Admin 2 - Bootstrap Admin Theme -->
      <!-- Bootstrap Core CSS -->
      <link href="/sb-admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <!-- MetisMenu CSS -->
      <link href="/sb-admin/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
      <!-- Custom CSS -->
      <link href="/sb-admin/dist/css/sb-admin-2.css" rel="stylesheet">
      <!-- Custom Fonts -->
      <link href="/sb-admin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <title> CLOGIN</title>
  </head>
  <body>



    <body>

        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">INICIAR SESION</h3>
                        </div>
                        <div class="panel-body">
                            <form role="form" method="POST" action="{{ route('login') }}">
                              {{ csrf_field() }}
                                <fieldset>
                                    <!-- EMAIL -->
                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <input class="form-control" placeholder="E-mail" name="email" type="email" value="{{ old('email') }}" required autofocus>
                                        @if ($errors->has('email'))
                                            <strong>{{ $errors->first('email') }}</strong>
                                        @endif
                                    </div>
                                    <!-- PASS -->
                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <input class="form-control" placeholder="Password" name="password" type="password" value="" required>
                                        @if ($errors->has('password'))
                                          <strong>{{ $errors->first('password') }}</strong>
                                        @endif
                                    </div>
                                    <!-- REMEMBER ME -->
                                    <div class="checkbox">
                                        <label>
                                            <input name="remember" type="checkbox" value="Remember Me" {{ old('remember') ? 'checked' : '' }}>Remember Me
                                        </label>
                                    </div>

                                    <!-- LOGIN BUTTON -->
                                    <button type="submit" class="btn btn-lg btn-block" style="background-color:black;color:white">Login</button>

                                    <!-- FORGOT PASSWORD -->
                                    <a class="" href="{{ route('password.request') }}">Forgot Your Password?</a>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    <!-- SB Admin 2 - Bootstrap Admin Theme -->
      <!-- jQuery -->
      <script src="/sb-admin/vendor/jquery/jquery.min.js"></script>
      <!-- Bootstrap Core JavaScript -->
      <script src="/sb-admin/vendor/bootstrap/js/bootstrap.min.js"></script>
      <!-- Metis Menu Plugin JavaScript -->
      <script src="/sb-admin/vendor/metisMenu/metisMenu.min.js"></script>
      <!-- Custom Theme JavaScript -->
      <script src="/sb-admin/dist/js/sb-admin-2.js"></script>


  </body>
</html>

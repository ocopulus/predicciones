<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Clima</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{asset('css/materialize.min.css')}}">
  <!--link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}"-->
  <script type="text/javascript" src="{{asset('js/jquery-2.1.1.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/materialize.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/init.js')}}"></script>
</head>
<body>
  <nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="{{url('/')}}" class="brand-logo">Clima</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="{{url('/clima/show')}}">Predicciones</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="#">Predicciones</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <div class="container">

    <div class="row">
      @yield('content')
    <br><br>
  </div>

  <footer class="page-footer orange">
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="orange-text text-lighten-3" href="http://materializecss.com">.l.</a>
      </div>
    </div>
  </footer>

  <!--  Scripts-->
  <!--script src="https://code.jquery.com/jquery-2.1.1.min.js"></script-->

  <script type="text/javascript">
     $(document).ready(function() {
    $('select').material_select();
  });
  </script>

  </body>
</html>

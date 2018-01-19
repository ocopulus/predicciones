<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
      
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Styles -->
        <link rel="stylesheet" href = "{{asset('css/materialize.min.css')}}">
        <script src="{{ asset ('js/jquery-2.1.1.min.js') }}"></script> 
        <script src="{{ asset ('js/materialize.min.js') }}"></script>
        
        <!-- Styles -->
    </head>
    <body>
        <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Logo</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
            @if (Route::has('login'))
              
                    @if (Auth::check())
                       <li> <a href="{{ url('/home') }}">Home</a></li>
                    @else
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @endif
            
            @endif
      </ul>
    </div>
</nav>

<section>
  	<div class="row">
        <div class="col s12 m6">
            <div class="card blue darken-3">
                <div class="card-content white-text">
                <span class="card-title">Ciudad de Guatemala (ayer)</span>
                    <div class="row">          
                                
                        <div class="col s12 m6">
                            <h1>52 °C</h1>
                        </div>
                        <div class="col s12 m6">
                            <figure>
                            <!--<img src="menchu/lluvia.png" width="95" height="95">
                            -->
                            </figure>
                        </div>

                       <div class="input-field col s12 m6">
                            <select>
                            <option value="" disabled selected>Choose your option</option>
                            <option value="1">Option 1</option>
                            <option value="2">Option 2</option>
                            <option value="3">Option 3</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</section>
<a class="waves-effect waves-light btn">Button</a>


</body>


<script>
  $(document).ready(function() {
    $('select').material_select();
  });
</script>         

</html>

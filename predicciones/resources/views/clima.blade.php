@extends('master')
@section('content')
      <div class="col s10 offset-s1">
        <div class="card blue lighten-3">
          <div class="card-content white-text">
            <span class="card-title">Ciudad de Guatemala ({{$fecha}})</span>
            <div class="row">
              <div class="col s12 m6">
                <h6>Temperatura: {{$temp2}}</h6>
                <h6>{{$humedad}}</h6>
                <h6>{{$presion}}</h6>
                <h6>{{$Visibilidad}}</h6>
                <h6>{{$amanecer}}</h6>
                <h6>{{$atardecer}}</h6>
                <h6>Coordenadas: {{$coordenadas}}</h6>
              </div>
              <div class="col s12 m6">
                <figure>
                  <img src="{{$imagen2}}" width="90" height="90">
                </figure>
              </div>
            </div>
          </div>
        </div>
      </div>

      
      {!!Form::open(['route'=>'store','method'=>'post'])!!}
        <div class="input-field col s6">
          <select id="tipoclima" name="tipoclima">
            <option value="" disabled selected>Seleccione un tipo de Clima</option>
            <option value="Templado">Templado</option>
            <option value="Cálido">Cálido</option>
            <option value="Frío">Frío</option>
            <option value="Subtropical árido">Subtropical árido</option>
          </select>
          <label>Tipo de Clima</label>
        </div>
          <div class="input-field col s6">
            <i class="material-icons prefix">account_circle</i>
            <input id="usuario" name="usuario" type="text" class="validate">
            <label for="icon_prefix">Usuario</label>
          </div>
      
          <div class="input-field col s12">
            <i class="material-icons prefix">mode_edit</i>
            <textarea id="comentario" name="comentario" class="materialize-textarea"></textarea>
            <label for="textarea1">Descripción</label>
          </div>
          <button class="btn waves-effect waves-light" type="submit" name="action">Enviar
          <i class="material-icons right">add_box</i>
        </button>
        {!!Form::close()!!}

  <script type="text/javascript">
     $(document).ready(function() {
    $('select').material_select();
  });
  </script>

@endsection
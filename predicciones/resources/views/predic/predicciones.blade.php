@extends('master')
@section('content')
		<br>
		<table class="striped">
			<tread>
				<tr>
					<th>Id</th>
					<th>Usuario</th>
					<th>Clima</th>
					<th>Descripción</th>
					<th>Fecha y Hora</th>
					<th></th>
				</tr>
			</tread>
			<tbody>
				@foreach($comentario as $com)
					<tr>
						<td>{{$com->id}}</td>
						<td>{{$com->usuario}}</td>
						<td>{{$com->clima}}</td>
						<td>{{$com->descripcion}}</td>
						<td>{{$com->created_at}}</td>
						<td><a href="{{action('ComentarioController@destroy', $com->id)}}" class="waves-effect waves-light btn" ><i class="material-icons right">delete_sweep</i>Eliminar</a></td>
						<td></td>
					</tr>
				@endforeach
			</tbody>
		</table>
	
@endsection
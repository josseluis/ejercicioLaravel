@extends('master')
@section('title','Ver todos los contactos')
@section('content')


	<div class="container col-md-8 col-md-offset-2">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h2>Contactos</h2>
			</div>
			@if (session('status'))
				<div class="alert alert-succes">
					{{ session('status') }}
				</div>
			@endif		
			@if ($contactosCtrl->isEmpty())
				<p>No hay contactos creados</p>
			@else
				<table class="table">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nombre</th>
							<th>Télefono</th>
							<th>e-Mail</th>
							<th>Parentesco</th>
						</tr>
					</thead>
					<tbody>
						@foreach($contactosCtrl as $contacto)
							<tr>
								<td>{!! $contacto->id !!} </td>
								<td>
									<a href="{!! action('controladorcontacto@show' , $contacto->name) !!}">{!! $contacto ->name!!}</a>
								</td>
								<td>
									<a href="{!! action('controladorcontacto@show' , $contacto->telephone) !!}">{!! $contacto->telephone!!}</a> 
								</td>
								<td>
									<a href="{!! action('controladorcontacto@show' , $contacto->email) !!}">{!! $contacto ->email!!}</a>
								</td>
								<td>
									<a href="{!! action('controladorcontacto@show' , $contacto->parents) !!}">{!! $contacto ->parents!!}</a>
								</td>


							</tr>
						@endforeach
					</tbody>
				</table>
			@endif
		</div>
	</div>
@endsection												
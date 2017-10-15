@extends('master')
@section('title', 'ver un Contacto')
@section('content')

	<div class="container col-md-8 col-md-offset-2">
		<div class="well well bs-component">
			<div class="content">
				<h2 class="header">{!! $contactos->title !!}</h2>
				<p><strong> Status</strong>:{!! $contactos->status ? 'Pendiente' : 'Respondido' !!}</p>
				<p>{!! $contactos->content !!}</p>
			</div>
			<a href="{!! action('controladorcontacto@edit', $contactos->slug) !!}" class="btn btn-info pull-left"> Editar </a>
			<form method="post" action="{!! action('controladorcontacto@destroy', $contactos->slug) !!}" class="pull-left">
				<input type="hidden" name="_token" value="{!! csrf_token() !!}">
					<div>
						<button type="submit" class="btn btn-warning">Borrar</button>
					</div>
			</form>
			<div class="clearfix"></div>			
		</div>
	</div>

@endsection	
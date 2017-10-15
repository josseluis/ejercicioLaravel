@extends('master')
@section('title', 'editar')

@section('content')
	<div class = "container col-md-8 col-md-offset-2">
		<div class="well well bs-component">
			<form class="form-horizontal" method="post">
				@foreach ($errors->all() as $error)
				<p class="alert alert-danger"> {{ $error }}</p>
                @endforeach

 				@if (session('status'))
 					<div class="alert alert-success">
 						{{ session('status')}}
 					</div>	
 				@endif	

				<input type="hidden" name="_token" value="{!! csrf_token() !!}">
				<fieldset>
					<legend>Crear nuevo contacto</legend>
					<div class="form-group">
						<label for="title" class="col-lg-2 control-label">Titulo</label>
						<div class="col-lg-10">
							<input type="text" class="form-control" id="title" placeholder="titulo" name="title" value="{!! $contactos->title !!}">
						</div>
					</div>
					<div class="form-group">
						<label for="content" class="col-lg-2 control-label">Contenido</label>
						<div class="col-lg-10">
							<textarea class="form-control" rows="3" id="content" name="content">{!! $contactos->content !!}</textarea>
						</div>
					</div>
					<div class="form-group">
						<label>
							<input type="checkbox" name="status" {!! $contactos->status?"":"checked"!!}>
							Cerrar ?
						</label>	
					<div class="form-group">
						<div class="col-lg-10 col-lg-offset-2">
							<button class="btn btn-default">Cancelar</button>
							<button type="submit" class="btn btn-primary">Enviar</span>
						</div>
					</div>
				</fieldset>
			</form>				
		</div>
	</div>
@endsection	
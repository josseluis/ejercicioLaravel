@extends('master')
@section('name', 'Contact')

@section('content')
	<div class = "container col-md-8 col-md-offset-2">
		<div class="well well bs-component">
			<form class="form-horizontal" method="post">
				@foreach ($errors->all() as $error)
				<p class="alert alert-danger"> {{ $error }}</p>
                @endforeach

 				@if (session('name'))
 					<div class="alert alert-success">
 						{{ session('name')}}
 					</div>	
 				@endif	
 				@if (session('telephone'))
 					<div class="alert alert-success">
 						{{ session('telephone')}}
 					</div>	
 				@endif	
 				@if (session('email'))
 					<div class="alert alert-success">
 						{{ session('email')}}
 					</div>	
 				@endif	
 				@if (session('parents'))
 					<div class="alert alert-success">
 						{{ session('parents')}}
 					</div>	
 				@endif	

				<input type="hidden" name="_token" value="{!! csrf_token() !!}">
				<fieldset>
					<legend>Crear Contacto</legend>

					<div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="name" name="name" type="text" placeholder="Name" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="phone" name="phone" type="text" placeholder="Phone" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="email" name="email" type="text" placeholder="Email Address" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"  class="glyphicon glyphicon-star" aria-hidden="true"></span>
                            <div class="col-md-8">
                                <input id="Parentesco" name="parents" type="text" placeholder="Parentesco" class="form-control">
                            </div>
                        </div>

                        

					<div class="form-group">
						<div class="col-lg-10 col-lg-offset-2">
							<button type="submit" class="btn btn-primary">Enviar
							</button>
							<button class="btn btn-default">
							Cancelar
						    </button>

						</div>
					</div>
				</fieldset>
			</form>				
		</div>
	</div>
@endsection	
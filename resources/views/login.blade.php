@extends('footer')
@extends('header')

@section('header')
	@parent

	<div ng-controller="ctrl">
		<div class="login">
			<div class="login-header">
				<h1>Acceder</h1>
			</div>
			<div class="login-body">
				<form>
					<div class="row justify-content-center">
						<div class="col-lg-10">
							<br>
							<input type="text" class="form-control" name="usuario" placeholder="Usuario">
							<br>	
							<input type="password" class="form-control" name="contraseña" placeholder="Contraseña">
							<br>
							<button class="btn btn-success link-button" data-href="{{URL::to('admin')}}">Aceptar</button>
						</div>
					</div>
					
				</form>
			</div>
			<div class="login-footer">
				<p>No tienes una cuenta? <a class="link-button" data-href="{{URL::to('registro')}}" href="">Registrate</a></p>
			</div>
		</div>
	</div>


	@section('footer')
		@parent
		app.controller('ctrl',function($scope,$http){

			//CAMBIAR DE PAGINA
			$(".link-button").click(function () {
			  window.location.href = $(this).data('href');
			});

		});
		
		</script>

	@endsection

@endsection

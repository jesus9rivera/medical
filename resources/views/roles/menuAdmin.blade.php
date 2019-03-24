@extends('roles.footer')
@extends('roles.header')

@section('roles.header')
	@parent

		<div ng-controller="controlador">

			<div class="contenido">
				<li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->email }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
				<div ng-include="opcion"></div>
			</div>			

			<div class="menu">
				<a ng-click="cambiarPagina('default');" href=""><div class="logo"><img src="{{asset('imagenes/logo_medical2.png')}}"></div></a>
				<ul>
					<li>
						<i>MENÚ</i>
						<ul>
							<a ng-click="cambiarPagina('pUsuarios');" href=""><li> -Usuarios</li></a>
							<a ng-click="cambiarPagina('pEmpleados');" href=""><li> -Empleados</li></a>
							<a ng-click="cambiarPagina('pTickets');" href=""><li> -Tickets</li></a>
						</ul>		
					</li>
					
				</ul>
			</div>
		</div>

	@section('roles.footer')
		@parent

		app.controller('controlador',function($scope,$http){
			$scope.opcion="default";
			
			$scope.cambiarPagina=function($pagina){
				$scope.opcion=$pagina;
			}
		});

		</script>

	@endsection

@endsection
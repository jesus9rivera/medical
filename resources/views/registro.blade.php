@extends('footer')
@extends('header')

@section('header')
    @parent
	<div class="formularioStyle" ng-controller="controlador" align="center">
	        <div class="row">
	            <div class="col-md-12">
	                <form class="cuerpo" method="post">
                        <fieldset>
                        	<br><br>
                            <h1>Completa el Registro</h1>
                            
                                
                                <div class="col-lg-8">
                                <input ng-model=personas.nombre name="nombre" type="text" placeholder="Nombre" class="form-control">
                                </div><br>
                                
                                <div class="col-lg-8">
                                <input ng-model="personas.apellidos" name="apellido" type="text" placeholder="Apellidos" class="form-control">
                                </div><br>
                                
                                <div class="col-lg-8">
                                    <input ng-model="personas.email" name="email" type="email" placeholder="E-mail" class="form-control">
                                </div><br>
                            
                                <div class="col-lg-8">
                                    <input ng-model="personas.usuario" name="usuario" type="text" placeholder="Usuario" class="form-control">
                                </div><br>
                            
                                <div class="col-lg-8">
                                    <input ng-model="personas.password" name="password" type="password" placeholder="Contraseña" class="form-control">
                                </div><br>
                          
                                <div class="col-lg-8 text-center">
                                    <button type="submit" class="btn btn-success btn-lg" ng-click="guardar()">Aceptar</button>
                                </div><br>
                        </fieldset>
                    </form>
	            </div>
	        </div>
	    </div>
    @section('footer')
        @parent

        app.controller('controlador',function($scope,$http){
            $scope.personas={};
            $scope.guardar=function()
            {
                 console.log($scope.personas);
            }
           
        });

    </script>

@endsection
@endsection
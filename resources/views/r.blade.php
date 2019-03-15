@extends('footer')
@extends('header')

@section('header')
    @parent
<div class="container" ng-controller="controlador" align="center" style="border: 3px solid #fff">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form class="form-horizontal" method="post">
                    <fieldset>
                        <h1>Completa el Registro</h1>
                        
                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
                                <div class="col-md-5">
                                <input ng-model=personas.nombre name="nombre" type="text" placeholder="Nombre" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
                                <div class="col-md-5">
                                <input ng-model="personas.apellidos" name="apellido" type="text" placeholder="Apellidos" class="form-control">
                                </div>
                            </div>
                        
   
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
                            <div class="col-md-5">
                                <input ng-model="personas.email" name="email" type="email" placeholder="E-mail" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                            <div class="col-md-5">
                                <input ng-model="personas.usuario" name="usuario" type="text" placeholder="Usuario" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                            <div class="col-md-5">
                                <input ng-model="personas.password" name="password" type="password" placeholder="Contraseña" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-5 text-center">
                                <button type="submit" class="btn btn-primary btn-lg" ng-click="guardar()">Aceptar</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
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
                 $scope.personas={};
            }
           
        });

    </script>

@endsection
@endsection
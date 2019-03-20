<!DOCTYPE html>
<html ng-app="app">
    <head>
        <meta charset="utf-8">
        <title>Medical</title>
        <link rel="stylesheet" type="text/css" href="{{asset('css/estilosHome.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" href="">
    </head>
    <body class="bodyRegistro">

        <div class="margen"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card registro" ng-controller="controlador" align="center">
                        <div class="card-header"><div class="titulo">Registrate</div></div>
                        <div class="card-body">
                            <form class="cuerpo" method="post">                                              
                                <div class="row justify-content-center">
                                    <div class="col-lg-9">
                                        <input ng-model=personas.nombre name="nombre" type="text" placeholder="Nombre" class="form-control">
                                    </div>
                                </div><br>
                                <div class="row justify-content-center">
                                    <div class="col-lg-9">
                                        <input ng-model="personas.apellidos" name="apellido" type="text" placeholder="Apellidos" class="form-control">
                                    </div>
                                </div><br>
                                
                                <div class="row justify-content-center">
                                    <div class="col-lg-9">
                                        <input ng-model="personas.email" name="email" type="email" placeholder="E-mail" class="form-control">
                                    </div>
                                </div><br>
                                
                                <div class="row justify-content-center">
                                    <div class="col-lg-9">
                                        <input ng-model="personas.usuario" name="usuario" type="text" placeholder="Usuario" class="form-control">
                                    </div>
                                </div><br>
                                <div class="row justify-content-center">
                                    <div class="col-lg-9">
                                        <input ng-model="personas.password" name="password" type="password" placeholder="Contraseña" class="form-control">
                                    </div>
                                </div><br>
                          
                                <div class="row">
                                    <div class="col-lg-12 text-center">
                                        <button type="submit" class="btn btn-danger" ng-click="guardar()">Aceptar</button>
                                    </div>                                    
                                </div>
                            </form>
                        </div> 
                        
                    </div>
                </div>
            </div>     
        </div>

    </body>
</html>
	
    <script type="text/javascript">

        app.controller('controlador',function($scope,$http){
            $scope.personas={};
            $scope.guardar=function()
            {
                 console.log($scope.personas);
            }
           
        });

    </script>

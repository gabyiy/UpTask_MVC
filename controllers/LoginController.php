<?php 
namespace Controllers;

use MVC\Router;

class LoginController{

    public  static function login(Router $router){


        if($_SERVER["REQUEST_METHOD"]=== "POST"){


        }
        $router->render("auth/login",[
            "titulo"=>"Iniciar sesion"
        ] );

    }

    public static function  logout(){

        echo "logout";
    }

    public static function crear(Router $router){


        if($_SERVER["REQUEST_METHOD"]==="POST"){

        }
        $router->render("auth/crear",[
            "titulo"=>"Crear cuenta"

        ]);

    }

    public static function olvide(Router $router ){

        if($_SERVER["REQUEST_METHOD"]="POST"){


        }

        $router->render("auth/olvide",[
            "titulo"=>"Olvide contrasena"
        ]);

    }
    public static function restablecer(Router $router){

        if($_SERVER["REQUEST_METHOD"]==="POST"){

        }
        $router->render("auth/restablecer",[
            "titulo"=>"Restablecer contrasena"
        ]);

    }

    public static function confirmar(){

    }
    public function mensaje(){
        echo "desde mensaje";
    }
}

?>
<?php 

require_once __DIR__ . '/../includes/app.php';

use Controllers\LoginController;
use MVC\Router;
$router = new Router();



$router->get("/",[LoginController::class,"login"]);
$router->post("/",[LoginController::class,"login"]);

$router->get("/logout",[LoginController::class,"logout"]);

$router->get("/crear",[LoginController::class,"crear"]);
$router->post("/crear",[LoginController::class,"crear"]);

$router->get("/olvidar",[LoginController::class,"olvidar"]);
$router->post("olvidar",[LoginController::class,"olvidar"]);

$router->get("/restablecer",[LoginController::class,"restablecer"]);
$router->post("/restablecer",[LoginController::class,"restablecer"]);

$router->get("/confirmar",[LoginController::class,"confirmar"]);
$router->get("mensaje",[LoginController::class,"mensaje"]);

// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();
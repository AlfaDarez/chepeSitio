<?php 
use App\Rutas\Router;
require_once realpath("vendor/autoload.php");
$request_uri = $_SERVER['REQUEST_URI'];

$inicio = new Router('/',$request_uri,'index');
$contacto = new Router('/contacto', $request_uri, 'about');
$nosotros = new Router('/nosotros', $request_uri, 'contact');


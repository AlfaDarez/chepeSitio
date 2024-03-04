<?php
namespace  App\Rutas;
use App\Rutas\HomeController;

class Router{
    public function __construct($ruta,$url,$archivo) {
       
       if($ruta === $url){
        $aux = new HomeController();
           $aux->$archivo();
       }
    }

    
}
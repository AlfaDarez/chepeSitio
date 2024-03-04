<?php 
namespace App\Rutas;
use App\Vistas\Views;

class HomeController
{  
    public function index(){

      $vista = new Views();
      $vista->view('inicio'); 

    }

    public function about(){
      $vista = new Views();
      $dato = array(
        "Nombre" => "Jose Alfredo",
        "Apellidos" => "Valladares Villanueva",
    );
      $vista->view('contacto',$dato); 

    }

    public function contact(){
      $vista = new Views();
      $vista->view('nosotros'); 

    }

    public function error(){
        echo "Ruta No encontrada";
    }


}
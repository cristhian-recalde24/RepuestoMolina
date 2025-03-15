<?php

class InicioControlador{
    private $modelo;

    public function __construct(){
        //$this->modelo = new Persona();
    }
    public function Inicio(){

        $bd = Database::Conectar();
        require_once "vistas/encabezado.php";
        require_once "vistas/inicio/principal.php";
        require_once "vistas/pie.php";


    }
}
?>
<?php

class Rol{
    private $pdo;

    private $idRol;
    private $descripcion;
    private $estado;

    public function __construct(){
        $this->pdo = Database::Conectar();

    }

    public function getIdRol() : int{
        return $this->idRol;
    }

    public function setIdRol(int $id) {

        $this->idRol = $id;
    }

    public function getDescripcion() : string{
        return $this->descripcion;
    }

    public function setDescripcion(string $descripcion) {

        $this->descripcion = $descripcion;
    }

    public function getEstado() : bool{
        return $this->estado;
    }

    public function setEstado(bool $estado) {

        $this->estado = $estado;
    }
}

?>
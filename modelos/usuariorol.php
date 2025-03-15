<?php

class UsuarioRol{
    private $pdo;

    private $idUsuarioRol;
    private $idUsuario;
    private $idRol;

    public function __construct(){
        $this->pdo = Database::Conectar();
    }

    public function getIdUsuarioRol() : int{
        return $this->idUsuarioRol;
    }

    public function setIdUsuarioRol(int $id) {

        $this->idUsuarioRol = $id;
    }

    public function getIdUsuario() : int{
        return $this->idUsuario;
    }

    public function setIdUsuario(int $idUsuario) {

        $this->idUsuario = $idUsuario;
    }

    public function getIdRol() : int{
        return $this->idRol;
    }

    public function setIdRol(int $idRol) {

        $this->idRol = $idRol;
    }




}
?>
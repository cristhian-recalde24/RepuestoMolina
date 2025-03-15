<?php

class Compra {
    private $pdo;
    private $idCompra;
    private $idPersona;
    private $idUsuario;
    private $fecha;
    private $total;

    public function __construct(){
        $this->pdo = Database::Conectar();
    }
    public function getIdCompra() {
        return $this->idCompra;
    }
    public function setIdCompra(int $idCompra) {
        $this->idCompra = $idCompra;
    }

    public function getIdPersona() {
        return $this->idPersona;
    }
    public function setIdPersona(int $idPersona) {
        $this->idPersona = $idPersona;
    }

    public function getIdUsuario() {
        return $this->idUsuario;
    }
    public function setIdUsuario(int $idUsuario) {
        $this->idUsuario = $idUsuario;
    }

    public function getFecha() {
        return $this->fecha;
    }
    public function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    public function getTotal() {
        return $this->total;
    }
    public function setTotal($total) {
        $this->total = $total;
    }
}


?>


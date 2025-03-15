<?php
class Venta {
    private $pdo;
    private $idVenta;
    private $idPersona;
    private $idUsuario;
    private $fecha;
    private $total;


    public function __construct(){
        $this->pdo = Database::Conectar();
    }
    public function getIdVenta() {
        return $this->idVenta;
    }
    public function setIdVenta(int $idVenta) {
        $this->idVenta = $idVenta;
    }

    public function getIdPersona() {
        return $this->idPersona;
    }
    public function setIdPersona(string $idPersona) {
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
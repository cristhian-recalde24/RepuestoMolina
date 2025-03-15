<?php

class DetalleVenta {

    private $pdo;
    private $idDetalleVenta;
    private $idVenta;
    private $idArticulo;
    private $cantidad;
    private $descuento;
    private $IVA;
    private $subtotal;

    public function __construct(){
        $this->pdo = Database::Conectar();
    }
    public function getIdDetalleVenta() {
        return $this->idDetalleVenta;
    }
    public function setIdDetalleVenta(int $idDetalleVenta) {
        $this->idDetalleVenta = $idDetalleVenta;
    }

    public function getIdVenta() {
        return $this->idVenta;
    }
    public function setIdVenta(int $idVenta) {
        $this->idVenta = $idVenta;
    }

    public function getIdArticulo() {
        return $this->idArticulo;
    }
    public function setIdArticulo(int $idArticulo) {
        $this->idArticulo = $idArticulo;
    }

    public function getCantidad() {
        return $this->cantidad;
    }
    public function setCantidad($cantidad) {
        $this->cantidad = $cantidad;
    }

    public function getDescuento() {
        return $this->descuento;
    }
    public function setDescuento($descuento) {
        $this->descuento = $descuento;
    }

    public function getIVA() {
        return $this->IVA;
    }
    public function setIVA($IVA) {
        $this->IVA = $IVA;
    }

    public function getSubtotal() {
        return $this->subtotal;
    }
    public function setSubtotal($subtotal) {
        $this->subtotal = $subtotal;
    }
}

?>
<?php

class DetalleCompra {
    private $pdo;
    private $idDetalleCompra;
    private $idCompra;
    private $idArticulo;
    private $cantidad;
    private $subtotal;
    private $IVA;

    public function __construct(){
        $this->pdo = Database::Conectar();
    }

    public function getIdDetalleCompra() {
        return $this->idDetalleCompra;
    }
    public function setIdDetalleCompra($idDetalleCompra) {
        $this->idDetalleCompra = $idDetalleCompra;
    }

    public function getIdCompra() {
        return $this->idCompra;
    }
    public function setIdCompra($idCompra) {
        $this->idCompra = $idCompra;
    }

    public function getIdArticulo() {
        return $this->idArticulo;
    }
    public function setIdArticulo($idArticulo) {
        $this->idArticulo = $idArticulo;
    }

    public function getCantidad() {
        return $this->cantidad;
    }
    public function setCantidad($cantidad) {
        $this->cantidad = $cantidad;
    }

    public function getSubtotal() {
        return $this->subtotal;
    }
    public function setSubtotal($subtotal) {
        $this->subtotal = $subtotal;
    }

    public function getIVA() {
        return $this->IVA;
    }
    public function setIVA($IVA) {
        $this->IVA = $IVA;
    }
}

?>
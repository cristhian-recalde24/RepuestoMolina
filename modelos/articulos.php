<?php

class Articulo {
    private $pdo;
    private $idArticulo;
    private $nombre;
    private $codigo;
    private $descripcion;
    private $precioUnitario;
    private $stock;
    private $idCategoria;
    private $estado;

    public function __construct(){
        $this->pdo = Database::Conectar();
    }
    
    public function getIdArticulo() {
        return $this->idArticulo;
    }
    public function setIdArticulo(int $id) {
        $this->idArticulo = $id;
    }

    public function getNombre() {
        return $this->nombre;
    }
    public function setNombre(string $nombre) {
        $this->nombre = $nombre;
    }

    public function getCodigo() {
        return $this->codigo;
    }
    public function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }
    public function setDescripcion(string $descripcion) {
        $this->descripcion = $descripcion;
    }

    public function getPrecioUnitario() {
        return $this->precioUnitario;
    }
    public function setPrecioUnitario($precioUnitario) {
        $this->precioUnitario = $precioUnitario;
    }

    public function getStock() {
        return $this->stock;
    }
    public function setStock($stock) {
        $this->stock = $stock;
    }

    public function getIdCategoria() {
        return $this->idCategoria;
    }
    public function setIdCategoria($idCategoria) {
        $this->idCategoria = $idCategoria;
    }

    public function getEstado() {
        return $this->estado;
    }
    public function setEstado(bool $estado) {
        $this->estado = $estado;
    }
}

?>
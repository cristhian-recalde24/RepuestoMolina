<?php

class Categoria {

    private $pdo;
    private $idCategoria;
    private $nombre;
    private $estado;

    public function __construct(){
        $this->pdo = Database::Conectar();
    }

    public function getIdCategoria() {
        return $this->idCategoria;
    }
    public function setIdCategoria(int $id) {
        $this->idCategoria = $id;
    }

    public function getNombre() {
        return $this->nombre;
    }
    public function setNombre(string $nombre) {
        $this->nombre = $nombre;
    }

    public function getEstado() {
        return $this->estado;
    }
    public function setEstado(bool $estado) {
        $this->estado = $estado;
    }
}
?>
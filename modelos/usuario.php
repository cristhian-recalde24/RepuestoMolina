<?php

class Usuario{
    private $pdo;
    
    private $idUsuario;
    private $nombre;
    private $apellido;
    private $direccion;
    private $cedula;
    private $correo;
    private $clave;
    private $estado;

    public function __construct(){
        $this->pdo = Database::Conectar();
    }

    public function getIdUsuario() : int{
        return $this->idUsuario;
    }

    public function setIdUsuario(int $id) {

        $this->idUsuario = $id;
    }

    public function getNombre(): string {
        return $this->nombre;
    }

    public function setNombre(string $nombre) {
        $this->nombre = $nombre;
    }

    public function getApellido(): string {
        return $this->apellido;
    }

    public function setApellido(string $apellido) {
        $this->apellido = $apellido;
    }

    public function getCorreo(): string {
        return $this->correo;
    }

    public function setCorreo(string $correo) {
        $this->correo = $correo;
    }

    public function getClave(): string {
        return $this->clave;
    }

    public function setClave(string $clave) {
        $this->clave = password_hash($clave, PASSWORD_BCRYPT); // Encripta la clave
    }

    public function getEstado(): int {
        return $this->estado;
    }

    public function setEstado(int $estado) {
        $this->estado = $estado;
    }

}


?>
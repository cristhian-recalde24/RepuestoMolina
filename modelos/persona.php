<?php

class Persona{
    private $pdo;

    private $idPersona;
    private $nombre;
    private $apellido;
    private $telefono;
    private $correo;
    private $direccion;
    private $tipo;
    private $estado;

    public function __construct(){
        $this->pdo = Database::Conectar();

    }

    public function getIdPersona(): int{
        return $this->idPersona;
    }

    
    public function getNombre(): string { 
         return $this->nombre; }
    public function setNombre(string $nombre) { 
        $this->nombre = $nombre;
     }
    public function getApellido(): string { 
        return $this->apellido;
     }
    public function setApellido(string $apellido) { 
        $this->apellido = $apellido; 
    }

    public function getTelefono(): string { 
        return $this->telefono;
     }
    public function setTelefono(string $telefono) { 
        $this->telefono = $telefono; 
    }

    public function getCorreo(): string { 
        return $this->correo;
     }
    public function setCorreo(string $correo) { 
        $this->correo = $correo; 
    }

    public function getDireccion(): string { 
        return $this->direccion;
     }
    public function setDireccion(string $direccion) { 
        $this->direccion = $direccion; 
    }

    public function getTipo(): string { 
        return $this->tipo;
     }
    public function setTipo(string $tipo) { 
        $this->tipo = $tipo; 
    }

    public function getEstado(): bool { 
        return $this->estado;
     }
    public function setEstado(bool $estado) { 
        $this->estado = $estado; 
    }




}

?>
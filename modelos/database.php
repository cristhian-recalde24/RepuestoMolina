<?php
class Database{
    const servidor="localhost";
    const usuarioBD= "root";
    const claveBD= "";
    const nombreBD= "respuestosmolina";

    public static function Conectar(){
        try{
            $conexion = new PDO
            ("mysql:host=".self::servidor.";
             dbname=".self::nombreBD."; chartset=utf8",
            self::usuarioBD,
            self::claveBD);

            $conexion->setAttribute(PDO::ATTR_ERRMODE,
            PDO::ERRMODE_EXCEPTION);
            return $conexion;
        } catch (PDOException $e) {
            return "Fallo".$e->getMessage();
        }

        
    }
}

?>
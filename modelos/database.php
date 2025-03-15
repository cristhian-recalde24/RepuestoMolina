<?php
class Database{
    const servidor="localhost";
    const ususarioBD= "root";
    const claveBD= "";
    const nombreBD= "RespuestosMolina";

    public static function Conectar(){
        try{
            $conexion = new PDO
            ("mysql:host=".self::servidor."dbname=".
            self::nombreBD."charset=utf8",self::ususarioBD,
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
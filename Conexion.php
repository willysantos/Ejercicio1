<?php


class Conexion
{

    private static $conexion = null;
    private static $pdo = null;

    private function __construct()
    {
        try {
            self::$pdo = new \PDO('mysql:hostname=68.183.131.91;dbname=negociosclases',
                'root', 'andrade97');
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }

    public static function getConexion()
    {
        if (self::$pdo === null){
            new Conexion();
        }
        return self::$pdo;
    }

}
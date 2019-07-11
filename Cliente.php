<?php

require_once 'Conexion.php';

class Cliente
{

    public $nombre_completo;
    public $email;

    public static function llenar(array $datos)
    {
        $cl = new Cliente();
        $cl->setNombreCompleto($datos[0]);
        $cl->setEmail($datos[1]);
        self::guardarDatos(Conexion::getConexion() ,$datos);
    }


    public static function guardarDatos(PDO $pdo, $datos)
    {

        try {
            $stms = $pdo->prepare("INSERT INTO cliente(nombre_completo, email)" .
                " VALUES(?,?)");
            $stms->bindValue(1, $datos[0]);
            $stms->bindValue(2, $datos[1]);
            $stms->execute();
            echo 'Guardado perrus';
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }




    /**
     * @return mixed
     */
    public function getNombreCompleto()
    {
        return $this->nombre_completo;
    }

    /**
     * @param mixed $nombre_completo
     */
    public function setNombreCompleto($nombre_completo)
    {
        $this->nombre_completo = $nombre_completo;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }



}
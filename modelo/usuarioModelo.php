<?php

include_once "conexion.php";


class usuariosModelo
{


    public static function mdlInsertar($nombres, $apellidos)
    {

        $mensaje = "";
        try {

            $objrespuesta = conexion::conectar()->prepare("INSERT INTO usuarios(nombre,apellido) values (:nombre,:apellido) ");
            $objrespuesta->bindParam(":nombre", $nombres, PDO::PARAM_STR);
            $objrespuesta->bindParam(":apellido", $apellidos, PDO::PARAM_STR);

            if ($objrespuesta->execute()) {
                $mensaje = "ok";
            } else {
                $mensaje = "error";
            }
        } catch (Exception $th) {
            $mensaje=$th;
        }

        return $mensaje;




    }

    public static function mdlModificar($nombres, $apellidos)
    {

        $mensaje = "";

        if ($nombres != "" && $apellidos != "") {
            $mensaje = "ok";
        } else {
            $mensaje = "no";
        }
        return $mensaje;
    }
}

<?php



class conexion{


  public static function conectar(){

    $nombreServidor ="localhost";
    $baseDatos="repasoadsi";
    $usuario="root";
    $password="";

    try {
        $objConexion= new PDO('mysql:host='.$nombreServidor.';dbname='.$baseDatos.';',$usuario,$password);
        $objConexion->exec("set names utf8");





        
    } catch (Exception $e) {
     //  $objConexion=gettext($e);


    }

    return $objConexion;





  }




}
<?php


include_once "../modelo/usuarioModelo.php";
class usuariosControlador
{

    public $nombres;
    public $apellidos;


    public function ctrlListar()
    {
    }

    public function ctrlInsertar()
    {
        $objModelo= usuariosModelo::mdlInsertar($this->nombres,$this->apellidos);
       echo json_encode($objModelo);
    }

    public function ctrlModificar()
    {
        $objModificar=usuariosModelo::mdlModificar($this->nombres,$this->apellidos);
        echo  json_encode($objModificar);


    }

    public function ctrlEliminar()
    {
    }

    public function ctrlListarTodos()
    {
    }
}


if (isset($_POST["nombres"]) && isset($_POST["apellidos"] )) {
 
    $objReg = new usuariosControlador();
    $objReg->nombres= $_POST["nombres"];
    $objReg->apellidos= $_POST["apellidos"];
    $objReg->ctrlInsertar();



}

if (isset($_POST["nombreM"] ) && isset($_POST["apellidoM"]) ) {
    $objM = new usuariosControlador();
    $objM->nombres = $_POST["nombreM"];
    $objM->apellidos=$_POST["apellidoM"];
    $objM->ctrlModificar();
}
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
        json_encode($objModelo);
    }

    public function ctrlModificar()
    {
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
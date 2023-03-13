<?php


abstract class empleado{
    private $id;
    private $nombre;
    public function __construct($id,$nombre){
        $this-> id = $id;
        $this->$nombre;
    }
    abstract function calSalario();
    
}
?>

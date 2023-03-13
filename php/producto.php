<?php
class producto
{
    //atrivutos
    private $id;
    private$nombre;
    private$precio;
    private$stock;
    //constructores
    public function __construct(){}

    //metodos para encapsular los atributos
    public function getId ()
    {
        return $this->id;
    }
    public function setId (int $id)
    {
         $this->id = $id;
    }
    public function getNombre ()
    {
        return $this->nombre;
    }
    public function setNombre (string $nombre)
    {
        return $this->nombre;
    }
    public function getPrecio ()
    {
        return $this->precio;
    }
    public function setPrecio (float $precio)
    {
        $this-> precio = $precio;
    }
    public function getStock ()
    {
        return $this-> stock;
    }
    public function setStock (int $stock)
    {
        $this-> stock = $stock;
    }

}
?>
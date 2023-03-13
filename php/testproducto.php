<?php
include 'producto.php';
$producto1 = new producto();
$producto1 -> setId(1);
$producto1 -> setNombre("arroz San Francisco");
$producto1 -> setPrecio(5.00);
$producto1 -> setStock(48);
//echo $producto1 ->getNombre();

$producto2 = new producto();
$producto2 -> setId(2);
$producto2 -> setNombre("leche de soya");
$producto2 -> setPrecio(8.00);
$producto2 -> setStock(25);

$producto3 = new producto();
$producto3 -> setId(3);
$producto3 -> setNombre("frijol de seda");
$producto3 -> setPrecio(4.00);
$producto3 -> setStock(75);

//creando un areglo para almacenar temporalmente los objetos 
$productos = array();
array_push($productos, $producto1);
array_push($productos, $producto2);
array_push($productos, $producto3);
//recogiendo el arreglo de $producto con ciclo de foreach
echo 'LISTADO DE PRODUCTOS <br>';
echo '<table border=1><tr><th><producto>/th><th>PRECIO>/th><th>STOCK</th></th>';

foreach($productos as $p)
{
    echo '<tr>';
    echo '<td>' . $p->getNombre().'</th>' . '<th>' .$p->getprecio() . '</th>'. 'td'. $p-> getStock();
    echo '</tr>';
}
echo '</table>'
?>
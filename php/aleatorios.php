<?php
if (isset($_POST['cantidad'])) {
    $cant = $_POST['cantidad'];
//arreglo para almacenar los numeros aleatorios
    $nums[] = array($cant);
    $i = 0;
    while($i<$cant){
//generamos un numero aleatorio entre un rango
        $nums[$i] = rand(1,600);
//incrementamos el contador $i
        $i++;
    }
    echo 'NUMEROS ALEATORIOS GENERADOS'.'<br>';
//recorremos el areglo con el ciclo while
    var_dump($nums);
    echo '<a href="./while">Atras...</a>';

}
?>
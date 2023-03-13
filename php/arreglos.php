<?php
//Trabajando con arreglos en php
$dias[] = "Lunes";
$dias[] = "Martes";
$dias[] = "Miercoles";
$dias[] = "Jueves";
$dias[] = "Viernes";
/*$i=0;
echo $dias[$i + 2];
/*var_dump($dias);
//recorriendo el arreglo con ciclo foreach*/
echo 'IMPRESION DE ELEMENTOS CON CICLO foreach<br/>';
foreach($dias as $dia){
    echo $dia . '<br/>';
}
echo 'IMPRESION DE ELEMENTOS CON CICLO for<br/>';

for($i=0;$i<count($dias);$i++){
echo $dias[$i] . '<br/>';
}
//arreglos asociativos
$productos = array(
    "nombre" => "teclado USB",
    "Marca" => "Genius",
    "Precio" => 10
);
var_dump($productos);
echo $productos["nombre"] .'<br>';
//arreglos asociativo de dos dimenciones (bidimencional o matriz)
$alimentos = array("fruta"=>array("tropical"=>"kiwi","citrico"=>"Mandarina","otros"=>"Manzana"),
"leche"=>array("animal"=>"Vaca","vegetal"=>"coco"),"carne"=>array("res"=>"lomo","cerdo"=>"costilla","costilla"));
var_dump($alimentos);
echo'';
foreach ($alimentos as $key_alimentos => $value_alimento) {
    echo $key_alimentos . 'br';
    foreach ($value_alimento as $key => $valor) {
        echo $key . " = " . $valor . '<br>';
    }
}
?>
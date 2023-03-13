<?php
  // comentario de linea
  # otra forma
  /*
  Un comentario de
   varias lineas
   */
  //EJEMPLO DE CONSTANTE EN PHP
  define('MODULO', "Construcción de Aplicaciones web en PHP");
  //EJEMPLO DE VARIABLE EN PHP

$nombreDefault = "Carlos Calles";
$edadDefault = 70;
echo "<br>" . "Modulo: " . MODULO;
//TRABAJANDO CON VARIABLESPOR URL METODO GET
$modulo = "Construcción de aplicaciones Web en PHP";
if (isset($_GET["nombre"])) {
    if(strlen($_GET['nombre'])>0){
        echo "<br>" . " Bienvenido/a : " . $_GET['nombre'];
    } else {
        echo "<br>" . "Falta asignar valor a la variable nombre";
    }
}else{
    echo"<br>" . "bienvenido" . $nombreDefault;
 }   
if (isset($_GET["edad"])) {
    echo "<br>" . " Su Edad es: " . $_GET['edad'];
} else {
    echo "<br>" . "su edad es: " . $edadDefault;
}
echo "<br>" . '<a href=" ../index.php">ir al Inicio</a>';
?>
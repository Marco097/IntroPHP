<?php

if(isset($_POST['op'])) {
//capturamos los valores que vienen por el metodo http POST
   // $n1 = $_POST['n1'];
   // $n2 = $_POST['n2'];
//evaluamos cada operacion
    switch($_POST['op']){
        case 'suma':
            $suma = $_POST['n1'] + $_POST['n2'];
            echo "La Suma Es: " .$suma;
            break;
        case 'resta':
            echo "La Resta Es: " . restar($_POST['n1'], $_POST['n2']);
             break;
        case 'multiplicacion':
                echo "La Multiplicasión Es: " . multiplicacion($_POST['n1'], $_POST['n2']);
             break;
        case 'división':
            $division = $_POST['n1'] / $_POST['n2'];
        echo "La divicion es : " .$division;
             break;
    }

}else{
    echo "Error al enviar la peticion";
}
function restar($num1,$num2)
{
    return $num1 - $num2;
}
function multiplicacion($num1,$num2)
{
    return $num1 * $num2;
}

echo "<br>" . '<a href="Operadores.php">Ir a Operadores</a>';
?>

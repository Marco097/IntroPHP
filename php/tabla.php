<?php
$tabla = $_POST['tabla'];
if ($tabla === '') {
    echo json_encode('error');
} else {
    $result = "";
    for($i = 1; $i <=10; $i++) {
        $result .= $tabla . "X". $i."=". $tabla * $i. "<br>";
    }
    echo json_encode($result);
}
?>
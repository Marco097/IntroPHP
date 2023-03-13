
<?php

$pago = $_REQUEST['pago'];
$seguro = $pago * 0.03;
$pension = $pago * 0.05;
$renta = $pago * 0.07;
$pagoFinal = $pago - $seguro - $pension - $renta;


echo"SUELDO <br> Sueldo neto $" . $pago . "<br>";
echo"Pago Seguro Social: $" . $seguro . "<br>";
echo"Pago Pension: $" . $pension . "<br>";
echo"Pago de Renta: $" . $renta . "<br>";
echo"Sueldo Final: $" . $pagoFinal . "<br>";

?>

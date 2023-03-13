<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fundamentos de PHP - Operadores</title>
</head>
<body>
<header>
    <h2>Uso de Operadores Aritméticos</h2>
</header> 

    <form action="operaciones.php" method="POST">
        <table>
            <tr>
                <td>
                    <label for="">Seleccione una Operación</label>
                </td>
                <td>
                <input type="radio" value="suma" name="op" checked> Suma
                 &nbsp;&nbsp;
                 <input type="radio" value="resta" name="op" checked> Resta
                 &nbsp;&nbsp;
                 <input type="radio" value="multiplicacion" name="op" checked> Multiplicación
                 &nbsp;&nbsp;
                 <input type="radio" value="divicion" name="op" checked> Division
                </td>
            </tr>
            <tr></tr>
            <tr>
                <td>Primer Número</td>
                <td><input type="text" name="n1" size ="6" required></td>
            </tr>
            <tr>
            <td>Segúndo Número</td>
                <td><input type="text" name="n2" size ="6" required></td>
            </tr>
            <tr>
                <td><input type="submit" value="Calcular"></td>
            </tr>       
        </table>
    </form> 
    <a href="../index">Ir al inicio</a>
</body> 
</html>

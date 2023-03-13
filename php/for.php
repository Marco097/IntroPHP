<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X.VA-Compatible" content="IE-edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Fundamentos de php- For</title>
</head>

<body>
   <header>
      <hgroup>
         <h2> Estructuras de control - ciclo For</h2>
      </hgroup>
   </header>
   <form id="form-data">
      <table>
         <tr>
            <td>Digite tabla multiplicar a Generar </td>
            <td><input type="text" name="tabla" size="6" required></td>
         </tr>
         <tr>
            <td colspan="2">
               <input type="submit" value="Generar">
            </td>
         </tr>
      </table>
   </form>
   <div id="result">
    <!-- Se mostrara la tabla -->
   </div>
   <a href="./estructuras.php">Atras...</a>
   <script>
    var form1 = document.getElementById('form-data');
    var respuesta = document.getElementById('result');

    form1.addEventListener('submit', function(e){
        e.preventDefault();

        var data = new FormData(form1);
        fetch('tabla.php',{
            method: 'POST',
            body:data
        })
        .then(resp => resp.json())
        .then(data => {
            if(data === 'error'){
                respuesta.innerHTML = `<div>Digite un valor entero, para generar la tabla</div>`
            }else{
                respuesta.innerHTML = `<div>${data}</div>`
            }
        })
    });
   </script>
</body>

</html>
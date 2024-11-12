<h2>Ejercicio 12</h2>
<!-- Ejercicio 12 -->
<form method="post" action="/index.php?modulo=Ejercicio12">
   
    <label for="nombre">Ingrese su nombre</label>
    <input type="text" name="nombre">
    <br>
    
    Seleccione en que rango esta sus ingresos:
    <select name="ingresos">
        <option value="1">1-1000</option>
        <option value="2">1001-3000</option>
        <option value="3">>3000</option>
    </select>

    <button type="sumbit">Confirmar</button>
</form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST['nombre'];
        $ingreso = $_POST['ingresos'];
        echo ($nombre);
        if ( $ingreso == 3) {
            echo " debe pagar impuestos.";
        } else {
            echo " no debe pagar impuestos a las ganancias.";
        };
    }
?>
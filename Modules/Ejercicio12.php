<h2>Ejercicio 12</h2>
     <!-- Ejercicio 12 -->
    <form method="post" action="">
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
        echo $_POST['nombre'];
        if ($_POST['ingresos'] == 3) {
            echo " debe pagar impuestos.";
        } else {
            echo " no debe pagar impuestos a las ganancias.";
        };
    ?>
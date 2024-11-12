<h2>Ejercicio 15</h2>
<!-- Ejercicio 15 -->
<form method="post" action="index.php?modulo=Ejercicio15">
    <label for="nombre">Ingrese su nombre</label>
    <input type="text" name="nombre">
    <br>
    Dirección:
    <input type="text" name="direccion" size="40">
    <br>
    Jamon y Queso:
    <input type="checkbox" name="jamonqueso">
    <input type="text" name="cantjamonqueso" size="3">
    <br>
    Napolitana:
    <input type="checkbox" name="napolitana">
    <input type="text" name="cantnapolitana" size="3">
    <br>
    Muzzarella:
    <input type="checkbox" name="muzzarella">
    <input type="text" name="cantmuzzarella" size="3">
    <br>
    <button type="sumbit">Confirmar</button>
</form>

<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $ar = fopen("datos.txt", "a") or
            die("Problemas en la creacion");
        fputs($ar, "Nombre:");
        fputs($ar, $_REQUEST['nombre']);
        fputs($ar, "\n");
        fputs($ar, "Dirección:");
        fputs($ar, $_REQUEST['direccion']);
        fputs($ar, "\n");
        if (isset($_REQUEST['jamonqueso'])) {
            fputs($ar, "Cantidad de Jamón y Queso:");
            fputs($ar, $_REQUEST['cantjamonqueso']);
            fputs($ar, "\n");
        }
        if (isset($_REQUEST['napolitana'])) {
            fputs($ar, "Cantidad de Napolitana:");
            fputs($ar, $_REQUEST['cantnapolitana']);
            fputs($ar, "\n");
        }
        if (isset($_REQUEST['muzzarella'])) {
            fputs($ar, "Cantidad de Muzzarella:");
            fputs($ar, $_REQUEST['cantmuzzarella']);
            fputs($ar, "\n");
        }

        fputs($ar, "--------------------------------------------------------");
        fputs($ar, "\n");
        fclose($ar);
        echo "El pedido se cargó correctamente.";
    };
?>
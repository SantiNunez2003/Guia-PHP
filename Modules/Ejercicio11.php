<h2>Ejercicio 11</h2>
<!-- Ejercicio 11 -->
<form method="post" action="index.php?modulo=Ejercicio11">
    <label for="nombre">Ingrese su nombre</label>
    <input type="text" name="nombre">
    <br>
    Deportes:
    <input type="checkbox" name="check1">Fútbol
    <input type="checkbox" name="check2">Basquet
    <input type="checkbox" name="check3">Tenis
    <input type="checkbox" name="check4">Voley
    <br>
    <button type="sumbit">Confirmar</button>
</form>

<?php 
    $cantDeportes = 0;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $nombre = $_POST['nombre']; 

        if (isset($_POST['check1'])) {
            $cantDeportes++;
        };
        if (isset($_POST['check2'])) {
            $cantDeportes++;
        };
        if (isset($_POST['check3'])) {
            $cantDeportes++;
        };
        if (isset($_POST['check4'])) {
            $cantDeportes++;
        };

        echo("Hola $nombre, practicas: $cantDeportes deportes ");
    }
?>
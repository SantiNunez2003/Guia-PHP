<h2>Ejercicio 9</h2>
<!-- Ejercicio 9 -->
<form method="post" action="index.php?modulo=Ejercicio9">
    <label for="nombre">Ingrese su nombre</label>
    <input type="text" name="nombre">
    <br>
    <label for="nombre">Ingrese su edad</label>
    <input type="text" name="edad">
    <br>
    <button type="sumbit">Confirmar</button>
</form>

<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST['nombre']; 
        $edad = (int)$_POST['edad'];

        echo "<br>El nombre y la edad son $nombre, $edad años<br>";

        if ($edad >= 18) {
            echo "Es mayor de edad tiene: $edad años";
        } else {
            echo "Es menor de edad tiene: $edad años";
        };
    }
?>
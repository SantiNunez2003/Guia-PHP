<h2>Ejercicio 18</h2>
<!-- Ejercicio 18 -->
<form method="post" action="/index.php?modulo=Ejercicio18">
    <label for="nombre">Ingrese su nombre</label>
    <input type="text" name="nombre">
    <br>
    Ingrese su clave:
    <input type="text" name="clave1" size="40">
    <br>
    Verifique su clave:
    <input type="text" name="clave2">
    <br>
    
    <button type="sumbit">Confirmar</button>
</form>

<?php

    function verificarClaves($cla1, $cla2)
    {
        if ($cla1 != $cla2)
        echo "Las claves ingresadas son distintas";
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        verificarClaves($_POST['clave1'], $_POST['clave2']);
        echo("<p>Se verificaron las claves ingresadas.</p>");
    }
?>

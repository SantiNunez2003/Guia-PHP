<h2>Ejercicio 18</h2>
    <!-- Ejercicio 18 -->
    <form method="post" action="">
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

        verificarClaves($_POST['clave1'], $_POST['clave2']);
    ?>
    <h2>Se verificaron las claves ingresadas.</h2>
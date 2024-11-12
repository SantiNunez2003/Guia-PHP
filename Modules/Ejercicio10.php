<h2>Ejercicio 10</h2>
     <!-- Ejercicio 10 -->
    <form method="post" action="">
        <label for="nombre">Ingrese su nombre</label>
        <input type="text" name="nombre">
        <br>
        Estudios:
        <input type="radio" name="rad1" value="sin">Sin Estudios
        <input type="radio" name="rad2" value="primario">Estudios Primarios
        <input type="radio" name="rad3" value="secundario">Estudios Secundarios
        <br>
        <button type="sumbit">Confirmar</button>
    </form>
    
    <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = $_POST['nombre']; 
            
            echo("Hola $nombre, tus estudios son:" );

            if ($_POST['rad1'] == "sin") {
                echo "Sin estudios.";
            };
            if ($_POST['rad2'] == "primario") {
                echo "Estudios primarios.";
            };
            if ($_POST['rad3'] == "secundario") {
                echo "Estudios secundarios.";
            };
        }
    ?>
<h2>Ejercicio 10</h2>
     <!-- Ejercicio 10 -->
    <form method="post" action="index.php?modulo=Ejercicio10">
        <label for="nombre">Ingrese su nombre</label>
        <input type="text" name="nombre">
        <br>
        Estudios:
        <input type="radio" name="estudio" value="sin">Sin Estudios
        <input type="radio" name="estudio" value="primario">Estudios Primarios
        <input type="radio" name="estudio" value="secundario">Estudios Secundarios
        <br>
        <button type="sumbit">Confirmar</button>
    </form>
    
    <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = $_POST['nombre']; 
            $estudio = $_POST['estudio'];

            echo("Hola $nombre, tus estudios son:" );

            switch ($estudio) {
                case 'sin':
                    echo "Sin estudios.";
                    break;
                case 'primario':
                    echo "Estudios primarios.";
                    break;
                case 'secundario':
                    echo "Estudios secundarios.";
                default:
                    # code...
                    break;
            }
        }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guia de Ejercicios</title>
</head>
<body>
    <h1>Guia de Ejercicios de PHP</h1>
    <br>

    <h2>Ejercicio 4</h2>
    <!-- Ejercicio 4 -->
    <?php 
        $num = rand(1,100);

        if ($num <= 50) {
            echo"El numero es menor o igual a 50";
            echo "<br>";
            echo $num;
        }elseif ($num > 50) {
            echo "El numero es mayor a 50";
            echo "<br>";
            echo $num;
        }
    ?>
    <hr>

    <h2>Ejercicio 5</h2>
    <!-- Ejercicio 5 -->
    <?php 
        $int = 10;
        $double = 10.5;
        $string = "Hola Mundo";
        $boolean = true;

        echo"Variable Integer: ";
        echo $int;
        echo "<br>";
        echo"Variable Double: ";
        echo $double;
        echo "<br>";
        echo"Variable String: ";
        echo $string;
        echo "<br>";
        echo"Variable Boolean: ";
        echo $int;
        echo "<br>";

    ?>
    <hr>
    
    <h2>Ejercicio 6</h2>
    <!-- Ejercicio 6 -->
    <?php 
        $precioIndividual = 5;
        $cantidad = 10;
        $total = 50;

        echo $panchos = "Pediste $cantidad de Panchos, te sale $precioIndiviual el total es: $total";
    ?>
    <hr>

    <h2>Ejercicio 7</h2>
    <!-- Ejercicio 7 -->
    <?php 
       $aleatorio = rand(1,3);

       if ($aleatorio == 3) {
        echo "El valor es 3: $aleatorio";
       }elseif ($aleatorio == 2) {
        echo "El valor es 2: $aleatorio";
       }elseif ($aleatorio == 1) {
        echo "El valor es 1: $aleatorio";
       };
    ?>
    <hr>

    <h2>Ejercicio 8</h2><br>
    <!-- Ejercicio 8 -->
    <?php 
        $num = 0;
        $num2 = 0;
        $num3 = 0;

        echo "La tabla deL 2 con el FOR";
        echo "<br>";
        for ($i=2; $i <= 10 ; $i++) { 
            $num += 2;
            echo "$num -";
        }
        echo "<br>";

        echo "La tabla del 2 con el WHILE";
        echo "<br>";
        while ($num2 <= 20) {
            $num2 += 2;
            echo "$num2 -";
        }
        echo "<br>";

        echo "La tabla del 2 con el DO/WHILE";
        echo "<br>";
        do {
            $num3 += 2;
            echo "$num2 -";
        } while ($num3 <= 20);
    ?>
    <hr>

    <h2>Ejercicio 9</h2>
    <!-- Ejercicio 9 -->
    <form method="post" action="">
        <label for="nombre">Ingrese su nombre</label>
        <input type="text" name="nombre">
        <br>
        <label for="nombre">Ingrese su edad</label>
        <input type="text" name="edad">
        <br>
        <input type="sumbit" value="confirmar">
    </form>
    
    <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = $_POST['nombre']; 
            $edad = (int)$_POST['edad'];

            echo "El nombre y la edad son $nombre, $edad años<br>";

            if ($edad >= 18) {
                echo "Es mayor de edad tiene: $edad años";
            } else {
                echo "Es menor de edad tiene: $edad años";
            };
        }
    ?>
    <hr>

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
        <input type="sumbit" value="confirmar">
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
    <hr>

    <h2>Ejercicio 11</h2>
     <!-- Ejercicio 11 -->
    <form method="post" action="">
        <label for="nombre">Ingrese su nombre</label>
        <input type="text" name="nombre">
        <br>
        Deportes:
        <input type="checkbox" name="check1">Fútbol
        <input type="checkbox" name="check2">Basquet
        <input type="checkbox" name="check3">Tenis
        <input type="checkbox" name="check4">Voley
        <br>
        <input type="sumbit" value="confirmar">
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
    <hr>

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
        <input type="sumbit" value="confirmar">
    </form>

    <?php
        echo $_POST['nombre'];
        if ($_POST['ingresos'] == 3) {
            echo " debe pagar impuestos.";
        } else {
            echo " no debe pagar impuestos a las ganancias.";
        };
    ?>
    <hr>

    <h2>Ejercicio 13</h2>
     <!-- Ejercicio 13 -->
     <form method="post" action="">
        Completar contrato:<br>
        <textarea name="contrato" rows="8" cols="80">
            En la ciudad de [........], se acuerda entre la Empresa [..........] representada por el Sr. [..............] en su carácter de Apoderado, con domicilio en la calle [..............] y el Sr. [..............], futuro empleado con domicilio en [..............], celebrar el presente contrato a Plazo Fijo, de acuerdo a la normativa vigente de los artículos 90,92,93,94, 95 y concordantes de la Ley de Contrato de Trabajo N° 20.744.
        </textarea>
        <br>
        <input type="sumbit" value="confirmar">
    </form>

    <?php  
       echo $_POST['contrato'];
    ?>
    <hr>

    <h2>Ejercicio 14</h2>
     <!-- Ejercicio 14 -->
    <?php
        $diaSemana = array("Lunes", "Martes", "Miércoles", "Jueves","Viernes", "Sábado", "Domingo");
        echo "Primer dia:" . $diaSemana[0] "<br>";
        echo "Ultimo dia:" . $diaSemana[6];
    ?>
    <hr>

    <h2>Ejercicio 15</h2>
    <!-- Ejercicio 15 -->
    <form method="post" action="">
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
        <input type="sumbit" value="confirmar">
    </form>

    <?php
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
    ?>
    <hr>

    <h2>Ejercicio 16</h2>
    <!-- Ejercicio 16 -->
    <?php
        $ar = fopen("pedidos.txt", "r") or
            die("No se pudo abrir el archivo");
        while (!feof($ar)) {
            $linea = fgets($ar);
            $lineasalto = nl2br($linea);
            echo $lineasalto;
        }
        fclose($ar);
    ?>
    <hr>

    <h2>Ejercicio 16</h2>
    <!-- Ejercicio 16 -->
    <?php 
        $usuarios = array(
            'Javier' => 'claveJavier',
            'Jose' => 'claveJose',
            'Mariano' => 'claveMariano',
            'Santiago' => 'claveSantiago',
            'Joaquin' => 'claveJoaquin',
        );

        echo($registro['Santiago']);
    
    ?>
    <hr>

    <h2>Ejercicio 17</h2>
    <!-- Ejercicio 17 -->
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
        <input type="sumbit" value="confirmar">
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

</body>
</html>
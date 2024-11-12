<?php 
    include("./Utils/conexion.php");
    conectar();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guia de Ejercicios</title>

    <link rel="stylesheet" href="./Styles/styles.css">
</head>
<body>
    <header class="header">
        <h1>Guia de Ejercicios de PHP</h1>
    </header>
    
    <div class="container">
        <aside class="sidebar">
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <?php
            $sql = "SELECT nombre_item, nombre_modulo FROM menu";
            if (!$resultados = $con->query($sql)) {
                printf("Falló en la obtención de datos\n");
                exit();
            }

            $modulos = $resultados->fetch_all(MYSQLI_ASSOC);
            foreach ($modulos as $modulo) {
                echo "<li><a href=\"index.php?modulo=$modulo[nombre_modulo]\">$modulo[nombre_item]</a></li>";
            }

            ?>
        </ul>
        </aside>
        
        <main class="content">
        <?php

            if (isset($_GET["modulo"])) {
            include("Modules/$_GET[modulo].php");
            } else {
            ?>
                <h2>Bienvenido a la Guía PHP</h2>
                <p>Este es la pagina principal</p> 
                <p>Esta pagina contiene los ejercicios de la guía 20 y 22 de php.</p>
            <?php
            }

        ?>
        </main>
    </div>

</body>
</html>
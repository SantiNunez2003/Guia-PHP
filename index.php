<?php 
    include("./Utils/conexion.php")
    conectar();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guia de Ejercicios</title>

    <link rel="stylesheet" href="./Syles/styles.css">
</head>
<body>
    <header class="header">
        <h1>Guia de Ejercicios de PHP</h1>
    </header>
    
    <div class="container">
        <aside class="sidebar">
            <ul>
                <li><a href="#inicio">Inicio</a></li>
                <li><a href="#acerca">Acerca de</a></li>
                <li><a href="#servicios">Servicios</a></li>
                <li><a href="#contacto">Contacto</a></li>
            </ul>
        </aside>
        
        <main class="content">
            <h2>Contenido Principal</h2>
            <p>Contenido de la Pagina</p>
        </main>
    </div>

</body>
</html>
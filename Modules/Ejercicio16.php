<h2>Ejercicio 16</h2>
<!-- Ejercicio 16 -->
<?php
    $ar = fopen("datos.txt", "r") or
        die("No se pudo abrir el archivo");
    while (!feof($ar)) {
        $linea = fgets($ar);
        $lineasalto = nl2br($linea);
        echo $lineasalto;
    }
    fclose($ar);
?>
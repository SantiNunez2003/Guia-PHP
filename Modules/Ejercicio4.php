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
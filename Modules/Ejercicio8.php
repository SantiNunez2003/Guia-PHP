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
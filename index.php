<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guia de Ejercicios</title>
</head>
<body>
    <!-- Actividad 4 -->
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

    <!-- Actividad 5 -->
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

    <!-- Actividad 6 -->
    <?php 
        $precioIndividual = 5;
        $cantidad = 10;
        $total = 50;

        echo $panchos = "Pediste $cantidad de Panchos, te sale $precioIndiviual el total es: $total";
    ?>
    
    <!-- Actividad 7 -->
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

    <!-- Actividad 8 -->
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

    <!-- Actividad 9 -->
    <?php 
       
    ?>

</body>
</html>
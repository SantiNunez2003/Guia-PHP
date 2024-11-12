<h2>Ejercicio 13</h2>
<!-- Ejercicio 13 -->
<form method="post" action="index.php?modulo=Ejercicio13">
    Completar contrato:<br>
    <textarea name="contrato" rows="8" cols="80">
        En la ciudad de [........], se acuerda entre la Empresa [..........] representada por el Sr. [..............] en su carácter de Apoderado, con domicilio en la calle [..............] y el Sr. [..............], futuro empleado con domicilio en [..............], celebrar el presente contrato a Plazo Fijo, de acuerdo a la normativa vigente de los artículos 90,92,93,94, 95 y concordantes de la Ley de Contrato de Trabajo N° 20.744.
    </textarea>
    <br>
    <button type="sumbit">Confirmar</button>
</form>

<?php  
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo $_POST['contrato'];
 }
?>
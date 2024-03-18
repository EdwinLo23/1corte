<?php
$nombre = $_POST["nombre"];
echo $nombre;
$documento = $_POST["documento"];
echo $documento;
$fechadenacimiento = $_POST["fechadenacimiento"];
echo $fechadenacimiento;
$sexo = $_POST["sexo"];
echo $sexo;

$numero = 100;
 $suma = $numero + $documento;
 if ($documento > 200) 
 {
    echo "AY CARAMBA";
 }
 else {
    echo "estamos normal";
 }

?>

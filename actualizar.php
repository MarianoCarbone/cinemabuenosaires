<?php

include'conexion.php';

//actualizar los datos..UPDATE

echo "<pre>";
var_dump($_POST);
echo "</pre>";

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$dni=$_POST['dni'];
$email=$_POST['email'];
$id=$_POST['id'];

$actualizar= "UPDATE registros SET nombre='$nombre',apellido='$apellido',dni='$dni',email='$email' WHERE id_usuario=$id";


$actualizarBD=mysqli_query($conexion,$actualizar);

include 'registros.php'; 





?>
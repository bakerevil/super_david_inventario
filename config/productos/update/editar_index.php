<?php
require_once('../../consulta.php');

$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$stock = $_POST['stock'];
$categoria = $_POST['categoria'];
$IDProducto = $_POST['IDProducto'];



$query = "UPDATE producto set nombre='$nombre', precio='$precio', stock='$stock', categoria='$categoria' ";

$conexion->query($query);


header("location: ../../../index.php");
?>


<?php
require 'conexion.php';

$consultar = "SELECT * FROM datosus";
$query = mysqli_query($conectar,$consultar);
$array = mysqli_fetch_array($query);
?>
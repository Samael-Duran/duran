<?php
$Usuario= $_GET['Correo'];
$Password= $_GET['PSWD'];

session_start();
$_SESSION['Login']=$Usuario;

?>
<?php
$Usuario= $_POST['Correo'];
$Password= $_POST['PSWD'];

$hostname = 'localhost';
$database = 'web18100166';
$username = 'root';
$password = '';

$link = new mysqli($hostname, $username, $password, $database);

if($link->connect_error){
    $row['resultado'] = '1';
    $row['informacion'] = 'Error Data Base';
    $row['mensaje'] = 'Error en Conexion';
    $row['detalle'] = 'No se logro la conexion';
}   else{
    $consulta="select Correo,PSWD from usuarios
                where Correo = '".$Usuario."' and PSWD ='".$Password."'";

    $result = $link->query($consulta);

    if ($result->num_rows > 0) {
        $registro = $result->fetch_assoc();

        $row['resultado']  = '0';
        $row['informacion']= 'Login Correcto';
        $row['mensaje']    = 'Acceso Concecido';
        $row['detalle']    = 'Bienvenid@ '.$registro['Correo'].' '.$registro['PSWD'];

        session_start();
        $_SESSION['Correo']=$registro['Correo'];
        $_SESSION['PSWD']=$registro['PSWD'];

} else  {
    $row['resultado']  = '1';
    $row['informacion']= 'Login Incorrecto';
    $row['mensaje']    = 'Acceso Negado';
    $row['detalle']    = 'Usuario y/o Password Incorrecto';
} 

$link->close();

}

//var_dump($row);


$encoded_row = array_map('utf8_encode',$row);


echo json_encode($encoded_row);
?>
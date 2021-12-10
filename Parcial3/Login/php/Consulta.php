<?php
$IdUsuario = $_POST['idUsuario'];
// $IdUsuario = '3';

$hostname = 'localhost';
$database = 'apseguros';
$username = 'root';
$password = '';

try {
    $dbh = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
} catch(PDOException $e) {
    $row['resultado']  = '1';
    $row['informacion']= 'Error DB';
    $row['mensaje']    = 'Exeption';
    $row['detalle']    = $e->getMessage();
}

$sql = "SELECT * FROM cusuario WHERE idUsuario = ?";
$stmt = $dbh->prepare($sql);
$stmt->bindParam(1, $IdUsuario);

 if($stmt->execute()){
       $result = $stmt->fetch(PDO::FETCH_ASSOC);

       $row['resultado']  = '0';
       $row['informacion']= 'Consulta Exitosa';
       $row['mensaje']    = 'Registro Encontrado';
       $row['detalle']    = $result;
} else {
       $row['resultado']  = '2';
       $row['informacion']= 'Error Consulta';
       $row['mensaje']    = 'Error';
       $row['detalle']    = "Error al haccer la consulta";
}

// $encoded_row = array_map('utf8_encode',$row);

echo json_encode($row);
?>
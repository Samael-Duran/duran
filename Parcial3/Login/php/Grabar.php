<?php
$vNombre    = $_POST['nom'];
$vCorreoE = $_POST['crr'];
$vPassword  = $_POST['pss'];
$vCalleP = $_POST['cll'];
$vNumExt    = $_POST['nue'];

$hostname = 'localhost';
$database = 'web18100166';
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
try {
    $query = "INSERT INTO Usuarios
              SET Nombre = ?, Correo = ?, PSWD  = ?, CalleP = ?, NumExt = ?";

    $stmt = $dbh->prepare($query);
    $stmt->bindParam(1, $vNombre);
    $stmt->bindParam(2, $vCorreoE);
    $stmt->bindParam(3, $vPassword);
    $stmt->bindParam(4, $vCalleP);
    $stmt->bindParam(5, $vNumExt);

   if ($stmt->execute()) {

        $stmt = $dbh->prepare("select LAST_INSERT_ID() as consecutivo");
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        $row['resultado']  = '0';
        $row['informacion']= 'Exito';
        $row['mensaje']    = "Registro Insertado exitosamente";
        $row['detalle']    = $result['consecutivo'];
   } else {
        $row['resultado']  = '2';
        $row['informacion']= 'Error DB';
        $row['mensaje']    = 'Error Ejecucion de Insert';
        $row['detalle']    = 'Error al hacer sentecia de insercion';
   }

} catch(PDOException $exception) {
    $row['resultado']  = '3';
    $row['informacion']= 'Error DB';
    $row['mensaje']    = 'Exepcion en Insercion';
    $row['detalle']    =  $exception->getMessage();
}


$encoded_row = array_map('utf8_encode',$row);
echo json_encode($encoded_row);
?>
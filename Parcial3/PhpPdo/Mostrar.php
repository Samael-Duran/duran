<?php
require 'Consultas.php';

?>

<!DOCTYPE html>
<html lang='es'>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA Compatible" content="ie=edge">
    <title>Mostrar datos</title>
</head>
<body>
    <table class="table">
        <thead>
            <tr>
                <th scope="coL">idUsuario</th>
                <th scope="coL">Nombre</th>
                <th scope="coL">Correo</th>
                <th scope="coL">PSWD</th>
                <th scope="coL">CalleP</th>
                <th scope="coL">NumExt</th>
                <th scope="coL">NumInt</th>
                <th scope="coL">Carrera</th>
            </tr>
        </thead>
        <tbody id="datos">
            <?php
            foreach ($query as $row){ ?>
            <tr>
                <td><?php echo $row['idUsuario'];   ?>  </td>
                <td><?php echo $row['Nombre'];  ?>  </td>
                <td><?php echo $row['Correo'];  ?>  </td>
                <td><?php echo $row['PSWD'];    ?>  </td>
                <td><?php echo $row['CalleP'];  ?>  </td>
                <td><?php echo $row['NumExt'];  ?>  </td>
                <td><?php echo $row['NumInt'];  ?>  </td>
                <td><?php echo $row['Carrera'];  ?> </td>
            </tr>    
        </tbody>
        <?php
        }
        ?>
    </table>
</body>
<?php 
    require_once 'config/Conexion.php';
    require_once 'controller/Departamento.php';

    $departamento = new Departamento();
    $datos = $departamento->lista($conn);

    #print_r($datos);  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>myCRUD - PostgreSQL</title>
</head>
<body>
    <hr>
    <form action="procs/insertar.php" method="GET">
        <br>
        <label>ID</label>
        <input type="text" name="id">
        <br>
        <label>Nombre</label>
        <input type="text" name="nombre">
        <br>
        <label>Detalle</label>
        <input type="text" name="detalle">
        <br>
        <label>Estado</label>
        <input type="text" name="estado">
        <br>
        <br>
        <input type="submit" value="Registrar">
    </form>
    <hr>
    <table border="1px">
        <tr>
            <td>ID</td>
            <td>NOMBRE</td>
            <td>DETALLE</td>
            <td>ESTATUS</td>
        </tr>
        <tr>
            <?php 
                foreach($datos as $colDepartamento){
                    echo "<tr>";
                    echo '<td>'.$colDepartamento[0].'</td>';
                    echo '<td>'.$colDepartamento[1].'</td>';
                    echo '<td>'.$colDepartamento[2].'</td>';
                    echo '<td>'.$colDepartamento[3].'</td>';
                    echo "</tr>";
                }
            ?>
        </tr>
    </table>
</body>
</html>
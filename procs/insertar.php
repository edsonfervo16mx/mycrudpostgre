<?php
    require_once '../config/Conexion.php';
    require_once '../controller/Departamento.php';

    $atrr = array(
        'id' => $_GET['id'],
        'nombre' => $_GET['nombre'],
        'detalle' => $_GET['detalle'],
        'estado' => $_GET['estado']
    );

    $departamento = new Departamento();
    $departamento->registrar($conn,$atrr);

    if($departamento){
        header('Location: ../index.php');
    }else{
        echo "ha ocurrido un error";
    }

?>
<?php 

    $conn = pg_pconnect("host=localhost port=5432 dbname=mydb_prueba user=postgres password=1024");

    if (!$conn) {
        echo "Ocurrió un error.\n";
        exit;
    }

?>
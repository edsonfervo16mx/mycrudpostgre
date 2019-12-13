<?php 
    
    Class Departamento{

        public function lista($conn){
            $sql = "SELECT * FROM departamento";
            $result = pg_query($conn, $sql);
            if (!$result) {
                echo "Ocurrió un error.\n";
                exit;
            }
            while ($row = pg_fetch_row($result)) {
                $arr[] = array_map('utf8_encode', $row);
            }
            return $arr;
        }

        public function registrar($conn,$atrr){
            $sql = "INSERT INTO departamento(id_departamento,nombre_departamento,detalle_departamento,estado_departamento) VALUES ('{$atrr['id']}','{$atrr['nombre']}','{$atrr['detalle']}','{$atrr['estado']}')";
            $result = pg_query($conn, $sql);
            if (!$result) {
                echo "Ocurrió un error.\n";
                exit;
            }
            while ($row = pg_fetch_row($result)) {
                $arr[] = array_map('utf8_encode', $row);
            }
            return $arr;
            
        }


    }

    

?>
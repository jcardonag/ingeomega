<?php 

	include_once '../Controlador/database.php';

	class Model extends Database{

    function getAll(){
        $usuario = array();
        $usuario['items'] = array();
        

        $query = $this->connect()->query("SELECT * FROM usuario");

        if($query->rowCount()){
            while($row = $query->fetch()){

                array_push($usuario['items'], array(
                    'idusuario'     => $row['idusuario'],
                    'usuario' => $row['usuario'],
                    'rol' => $row['rol']

                ));
            }

            return $usuario;
        }
    }
}
 ?>
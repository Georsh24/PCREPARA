<?php

class RepositorioUsuario{

    public static function obtener_todos($conexion){
        $usuarios = array();

        if(isset($conexion)){

        try{
            include_once 'Usuario.inc.php';

            $sql = "SELECT * FROM usuarios";

            $sentencia = $conexion -> prepare($sql);
            $sentencia -> execute();
            
            $resultado = $sentencia -> fetchAll();

            if (count($resultado)){
                foreach ($resultado as $fila){
                   $usuarios[] = new Usuario(
                        $fila['id'], $fila['nombre'], $fila['apellidos'], $fila['email'], $fila['password'], $fila['calle'], $fila['fraccionamiento'], $fila['numero'], $fila['telefono'], $fila['fecha_registro'], $fila['activo']

                   );
                }
            }else{
                print 'No hay usuarios';
            }


        }catch (PDOException $ex){
            print "ERROR" . $ex -> getMessage();
        }
    }
    return $usuarios;
}
public static function obtener_numero_usuarios($conexion){
    $total_usuarios = null;
    if (isset($conexion)){
        try{
            $sql = "SELECT COUNT(*) as total FROM usuarios";

            $sentencia = $conexion -> prepare($sql);
            $sentencia -> execute();
            $resultado = $sentencia -> fetch();

            $total_usuarios = $resultado['total'];

        }catch (Exception $ex){
            print "ERROR" . $ex -> getMassage();

        }
    }

    return $total_usuarios;
}

}
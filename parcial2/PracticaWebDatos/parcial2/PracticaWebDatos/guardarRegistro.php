<?php

    include 'conexion.php';

    $id = $_GET["id"];
    $nombre = $_GET["nombre"];
    $sexo = $_GET["sexo"];
    $edad = $_GET["edad"];
    $domicilio = $_GET["domicilio"];
    $fecha_nacimiento = $_GET["fecha_nacimiento"];

    $sql = "UPDATE usuarios SET nombre='".$nombre."' , edad= ".$edad.",".
    "sexo = '".$sexo."', domicilio = '".$domicilio."', fecha_nacimiento ='".$fecha_nacimiento."'".
    "WHERE id=".$id;

    if($conexion->query($sql) === TRUE){
        echo "Registro guardado con Exito <a href='consultarDatos.php'>Regresar</a>";
    }else{
        echo "Error: ".$sql."<br>".$conexion->error."<br><br><a href='consultarDatos.php'>Regresar</a>";
    }

    $conexion->close();

?>
<?php

include 'conexion.php';

$id = $_GET["id"];

$sql = "DELETE FROM usuarios WHERE id=" . $id;

if ($conexion->query($sql) === TRUE) {
    echo "Se eliminĂ³ el registro con ID" .$id. "<br>";
    echo "<a href='consultarDatos.php'>Regresar</a>";
}else{
    echo "ocurrio un error: " . $conexion->error ."<br>";
    echo "<a href='consultarDatos.php'>Regresar</a>";
}

?>
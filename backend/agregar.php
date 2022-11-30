<?php 

    require_once "../conexion.php";

    $conexion = conexion();
    $nombrepais = $_POST['nombrePais'];
    $continente = $_POST['continente'];
    $imagen = $_FILES['imagen']["tmp_name"];
    $guardarImnagen = addslashes(file_get_contents($imagen));

    $query = "INSERT INTO t_paisesMundo (nombre, continente, bandera) VALUES ('$nombrepais', '$continente', '$guardarImnagen')"; 

    $respuesta = mysqli_query($conexion, $query);

    if($respuesta){
        header('location:../index.php');
    }else{
        echo "ERROR, No se pudo agregar el pais";
    }

?>
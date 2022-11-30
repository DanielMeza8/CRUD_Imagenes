<?php 

    require_once "../conexion.php";

    $conexion = conexion();
    $idPais = $_POST['id_pais'];
    $nombre = $_POST['nombrePais'];
    $continente = $_POST['continente'];
    $imagen = $_FILES['imagen']["tmp_name"];
    $guardarImnagen = addslashes(file_get_contents($imagen));

    $query = "UPDATE t_paisesMundo SET nombre = '$nombre', continente = '$continente', bandera = '$guardarImnagen' WHERE id_pais = '$idPais'";
    $respuesta = mysqli_query($conexion, $query);

    if($respuesta){
        header('location:../index.php');
    }else{
        echo "ERROR, no sepuedo actualizar";
    }


?>
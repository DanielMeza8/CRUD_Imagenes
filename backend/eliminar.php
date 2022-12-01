<?php 

    require_once "../conexion.php";

    $conexion = conexion();
    $idPais = $_GET['id_pais'];

    $query = "DELETE FROM t_paisesMundo WHERE id_pais = '$idPais'";
    $respuesta = mysqli_query($conexion,$query);

    if($respuesta){
        header('location:../index.php');
    }else{
        echo "ERROR, No se puedo eliminar";
    }

?>
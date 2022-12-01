<?php 

    require_once "./conexion.php";
    $conexion = conexion();
    $idPais = $_GET['id_pais'];
    $query = "SELECT * FROM t_paisesMundo WHERE id_pais = '$idPais'";
    $respuesta = mysqli_query($conexion, $query);
    
    require_once "./header.php"; 
?>



<div class="container">

    <div class="card mt-4">
        <div class="card-header text-center">
            <h3><Strong>Eliminar pais <span class="fa-regular fa-flag"></span></Strong></h3>
        </div>
        <div class="card-body">
            <table id="paises" class="table table-responsive table-white text-white">
                <thead class="table-light">
                    <tr>
                        <th>Nombre Pais</th>
                        <th>Continente</th>
                        <th>Bandera</th>
                    </tr>
                </thead>
                <tbody class="table-light">
                    <?php while ($ver = mysqli_fetch_assoc($respuesta)): ?>
                        
                        <tr>
                            <td value=""><?php echo $ver['nombre']; ?></td>
                            <td><?php echo $ver['continente']; ?></td>
                            <td><img src="data:image/jpg;base64,<?= base64_encode($ver['bandera']); ?>" width="50"></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
            <p><a href="./backend/eliminar.php?id_pais=<?php echo $idPais; ?>" class="btn btn-danger" type="submit">Eliminar pais</a></p>
        </div>
        <div class="card-footer text-muted">
            <div class="d-flex flex-row-reverse bd-highlight">
                <a href="./index.php" class="btn btn-outline-dark">Regresar <i class="fa-solid fa-plane"></i></a>
            </div>
        </div>
    </div>
</div>


<?php require_once "./footer.php"; ?>
<?php
require_once "./conexion.php";
require_once "./header.php";


$conexion = conexion();
$query = "SELECT * FROM t_paisesMundo";
$respuesta = mysqli_query($conexion, $query);

?>



<div class="container">
    <div class="row">
        <div class="col mt-4">
            <h1 class="text-center">Paises del mundo <span class="fa-solid fa-earth-oceania"></span></h1>
            <p><a href="agregar.php" class="btn btn-primary">Agregar nuevo pais <span class="fa-solid fa-location-crosshairs"></span></a></p>
            <table id="paises" class="table table-responsive table-white text-white">
                <thead class="table-light">
                    <tr>
                        <th>Nombre Pais</th>
                        <th>Continente</th>
                        <th>Bandera</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody class="table-light">
                    <?php while ($ver = mysqli_fetch_assoc($respuesta)): ?>
                        
                        <tr>
                            <td><?php echo $ver['nombre'] ?></td>
                            <td><?php echo $ver['continente'] ?></td>
                            <td><img src="data:image/jpg;base64,<?= base64_encode($ver['bandera'])?>" width="50"></td>
                            <td><a href="./editar.php?id_pais=<?php echo $ver['id_pais']; ?>" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalEditar">Editar</a></td>
                            <td><a href="#" class="btn btn-danger">Eliminar</a></td>
                        </tr>
                    <?php endwhile; ?>

                </tbody>
            </table>
        </div>
    </div>
</div>

<?php require_once "./footer.php"; ?>


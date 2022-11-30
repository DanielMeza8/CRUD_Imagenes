<?php 

    require_once "./conexion.php";
    $conexion = conexion();
    $idPais = $_GET['id_pais'];
    $query = "SELECT * FROM t_paisesMundo WHERE id_pais = '$idPais'";
    $respuesta = mysqli_query($conexion, $query);
    $item = mysqli_fetch_array($respuesta);
    require_once "./header.php"; 
?>



<div class="container">

    <div class="card mt-4">
        <div class="card-header text-center">
            <h3><Strong>Actualizar pais <span class="fa-regular fa-flag"></span></Strong></h3>
        </div>
        <div class="card-body">
            <form action="./backend/actualizar.php" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <input type="text" name="id_pais" value="<?php echo $idPais; ?>" hidden>
                </div>
                <div class="mb-3">
                    <label for="nombrePais" class="form-label">Nombre del pais</label>
                    <input type="text" name="nombrePais" id="nombrePais" value="<?php echo $item['nombre']; ?>" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="continente" class=" form-label">Continente</label>
                    <select name="continente" id="continente" value="<?php echo $item['continente']; ?>" class="form-control">
                        <option value="america">America</option>
                        <option value="africa">Africa</option>
                        <option value="europa">Europa</option>
                        <option value="asia">Asia</option>
                        <option value="oceania">Oceania</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="imagen" class="form-label">Subir bandera</label>
                    <input type="file" class="form-control" name="imagen" id="imagen">
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-warning text-center">Actualizar pais <span class="fa-solid fa-file-signature"></span></button>
                </div>               
            </form>
        </div>
        <div class="card-footer text-muted">
            <div class="d-flex flex-row-reverse bd-highlight">
                <a href="./index.php" class="btn btn-outline-dark">Regresar <i class="fa-solid fa-plane"></i></a>
            </div>
        </div>
    </div>
</div>


<?php require_once "./footer.php"; ?>
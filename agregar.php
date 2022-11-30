<?php require_once "./header.php"; ?>



<div class="container">

    <div class="card mt-4">
        <div class="card-header text-center">
            <h3><Strong>Ingresar nuevo pais <span class="fa-solid fa-flag"></span></Strong></h3>
        </div>
        <div class="card-body">
            <form action="./backend/agregar.php" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="nombrePais" class="form-label">Nombre del pais</label>
                    <input type="text" name="nombrePais" id="nombrePais" class="form-control">
                </div>
                <div class="mb-3">
                    <label name="continente" id="continente">Continente</label>
                    <select name="continente" id="continente" class="form-control" required>
                        <option value="america">America</option>
                        <option value="africa">Africa</option>
                        <option value="europa">Europa</option>
                        <option value="asia">Asia</option>
                        <option value="oceania">Oceania</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="">Subir bandera</label>
                    <input type="file" class="form-control" name="imagen">
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary text-center">Agregar pais <span class="fa-solid fa-globe"></span></button>
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
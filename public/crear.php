<!-- <?php
include '../conexion.php';







$consul = "select id,nombre from rol";

$result = mysqli_query($conex, $consul);



?> -->

<!DOCTYPE html>
<html lang="Es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Crear usuario</title>
</head>

<body>
    <!-- Button trigger modal -->




    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal9">
        crear usuario
    </button>
<!-- <a href="../public/crear.php" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal9">crear usuario</a> -->
    <!-- Modal -->
    <div class="modal fade" id="exampleModal9" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Crear usuario</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <form class=" m-auto " style=" width: 23rem; " action="../public/formulario_crear.php" method="POST">

<div class="mb-3 container">
    <select class="form-select" aria-label="Default select example" name="select" required>
        <?php
        while ($row = mysqli_fetch_array($result)) {
            if($idrol<3){ 
        ?>
           <?php if($idrol<2){?><option value='<?= $row['id'] ?>'><?= $row['nombre'] ?></option><?php };?>
        <?php
            };
        };
        ?>


    </select>
</div>

<div class="mb-3 container">
    <label for="nombre" class="form-label text-black">Nombre</label>
    <input type="text" class="form-control" id="nombre" name="nombre"  placeholder="nombre">

</div>


<div class="mb-3 container">
    <label for="Apellido" class="form-label text-black">Apellido</label>
    <input type="text" class="form-control" id="Apellido" name="apellido"  placeholder="apellido">

</div>

<div class="mb-3 container">
    <label for="username" class="form-label text-black">Username</label>
    <input type="text" class="form-control" id="username" name="username"  placeholder="username">

</div>



<div class="mb-3 container">
    <label for="exampleInputEmail1" class="form-label text-black">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email"  placeholder="email">

</div>


<div class="mb-3 container">
    <label for="password" class="form-label text-black">Password</label>
    <input type="password" class="form-control" id="password" name="password"  placeholder="password">

</div>


<input type="hidden" name="id" >
<a href="./index.php" class="btn btn-secondary">cerrar</a>
<button type="submit" class="btn btn-success" name="enviar">Crear</button>


</form>

                </div>
                <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div> -->
            </div>
        </div>
    </div>









    <!-- Modal -->
   

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>
<?php
include '../conexion.php';



if (isset($_GET['editar'])) {
    $editar = $_GET['editar'];

    $user = "select * from usuario where id=$editar";

    $usuario = mysqli_query($conex, $user);


    $p = mysqli_fetch_array($usuario);
};






$consul="select id,nombre from rol";

$result=mysqli_query($conex,$consul);



?>

<!DOCTYPE html>
<html lang="Es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Actualizar Usuario</title>
</head>

<body>
    <!-- Button trigger modal -->




    <!-- <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop2" name="editar" >
        editar
    </button>
    -->





    <!-- Modal -->
    <div class="card m-auto mt-2 pb-3 bg-primary bg-gradient bg-opacity-50" style="width: 25rem;">
        <div>
            <h5 class="modal-title text-center text-black" id="staticBackdropLabel2">Actualizar Usuario</h5>

        </div>
        <div >
                    <form class=" m-auto " style=" width: 23rem; " action="../update.php" method="POST">

            <div class="mb-3 container">
                <select class="form-select" aria-label="Default select example" name="select" required>
                    <?php
                    while ($row = mysqli_fetch_array($result)) {
                    ?>
                        <option value='<?= $row['id'] ?>' selected><?= $row['nombre'] ?></option>
                        
                    <?php
                    };
                    ?>


                </select>
            </div>

            <div class="mb-3 container">
                <label for="nombre" class="form-label text-black">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value='<?php echo $p[2] ?>' placeholder="nombre">

            </div>


            <div class="mb-3 container">
                <label for="Apellido" class="form-label text-black">Apellido</label>
                <input type="text" class="form-control" id="Apellido" name="apellido" value='<?php echo $p[3] ?>' placeholder="apellido">

            </div>
                    
            <div class="mb-3 container">
                <label for="username" class="form-label text-black">Username</label>
                <input type="text" class="form-control" id="username" name="username" value='<?php echo $p[4] ?>' placeholder="username">

            </div>



            <div class="mb-3 container">
                <label for="exampleInputEmail1" class="form-label text-black">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="email" value='<?php echo $p[6] ?>' placeholder="email">

            </div>


            <div class="mb-3 container">
                <label for="password" class="form-label text-black">Password</label>
                <input type="password" class="form-control" id="password" name="password" value='<?php echo $p[5] ?>' placeholder="password">

            </div>


            <input type="hidden" name="id" value='<?php echo $p[0] ?>'>
            <a href="../public/tablas.php" class="btn btn-secondary">cerrar</a>
            <button type="submit" class="btn btn-success" name="actualizar">Actualizar</button>


            </form>
        </div>

    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>
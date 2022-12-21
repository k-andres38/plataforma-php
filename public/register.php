<?php

include_once '../conexion.php';

$consul = "select id,nombre from rol";

$result = mysqli_query($conex, $consul);


?>

<!DOCTYPE html>
<html lang="Es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/style.css">
    <title>REgister</title>
</head>

<body>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Registrar
    </button>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header ">
                    <h5 class="modal-title text-center text-black" id="staticBackdropLabel">Registar Usuario</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form class="m-auto container bg-primary bg-gradient bg-opacity-50 pt-3 rounded-1 " action="formulario.php" method="POST">


                            <input type="hidden" name="select" value="5">

                        <div class="mb-3 container">
                            <label for="nombre" class="form-label text-black">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre" minlength="3" required>

                        </div>



                        <div class="mb-3 container">
                            <label for="Apellido" class="form-label text-black">Apellido</label>
                            <input type="text" class="form-control" id="Apellido" name="apellido" placeholder="apellido" minlength="5" required>

                        </div>

                        <div class="mb-3 container">
                            <label for="username" class="form-label text-black">Username</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="username" minlength="5" required>

                        </div>



                        <div class="mb-3 container">
                            <label for="exampleInputEmail1" class="form-label text-black">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="email" minlength="5" required>

                        </div>


                        <div class="mb-3 container">
                            <label for="password" class="form-label text-black">Password</label>
                            <input type="password" class="form-control invalid-focus" id="password" name="password" placeholder="password" minlength="5" required>

                        </div>

                        <div class=" container pb-3">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary" name="enviar">Enviar</button>

                        </div>



                    </form>


                </div>




            </div>

        </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>
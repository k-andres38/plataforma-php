<?php

session_start();
$nombre = ( isset($_SESSION['nombre'] )) ? $_SESSION['nombre'] : '';

$idrol=( isset($_SESSION['idrol'] )) ? $_SESSION['idrol'] : '';
$puesto= ( isset($_SESSION['puesto'] )) ? $_SESSION['puesto'] : '';

$id = ( isset($_SESSION['id'] )) ? $_SESSION['id'] : '';
if (!isset($id)) {
    session_destroy();
    header("Location: ../public/index.php");
    
};





?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/perfil.css">

    <title>HOME::<?= $nombre ?> </title>
</head>

<body class="bg-success  " style="--bs-bg-opacity: .5;">



    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><span class="text-white">Plataforma Educativa</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon p-0"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">

                        <!-- <a class="nav-link active btn btn-primary text-white" aria-current="page" href="#" >Home</a> -->
                        <button class="btn btn-primary" type="button">Home</button>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">Tareas</button>
                    </li>


                </ul>

                <ul class=" navbar-nav ">
                    <li class="nav-item dropdown   d-flex">

                        <a class="nav-link dropdown-toggle p-0 d-flex flex-column justify-content-center  align-items-end" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="index2">
                                <img class="perfil" src="../imagenes/logo.webp" alt="">
                            </div>
                            <div><span class="text-white"><?= $nombre ?></span></div>

                        </a>

                        <ul class="dropdown-menu p-0">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="../backend/logout.php">Log Out</a></li>
                        </ul>
                    </li>
                </ul>

            </div>
        </div>
    </nav>


    <main>
        <aside>



            <div class="offcanvas offcanvas-start bg-success offcanvas-m border-0" style="--bs-bg-opacity: .0;width:38vh;" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
                <div class="offcanvas-header mt-5">
                    <h5 class="offcanvas-title text-center" id="offcanvasScrollingLabel">Listas de tareas 📖</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <div class=""><span class="fs-4 "><?= $puesto?></span></div>
                    <div class="">

                        <div class="border border-end-0 border-start-0 d-flex align-items-center justify-content-center pt-3">
                            <h6 class="text-center text-black mb-0  ">Invitado</h6>
                        </div>
                        <ul class="text-center p-0">
                        <li style="list-style: none;--bs-bg-opacity: .2" class="bg-dark "><a href="#"  class="text-decoration-none  mb-2  "><span class="fs-5 text-white">Tarea 1</span></a></li>
                             
                            <li style="list-style: none;--bs-bg-opacity: .2" class="bg-dark  " ><a href="#"  class="text-decoration-none "><span class="fs-5  text-white">Tarea 2</span></a></li>
                        </ul>

                    </div>

                    <?php if($idrol<4){ 
                        
                        ?>
                    <div>

                        <div class="border border-end-0 border-start-0 pt-3">
                            <h6 class="text-center text-black mb-0">admin y jefe</h6>
                        </div>

                        <ul class="text-center p-0">
                        
                        <li style="list-style: none;--bs-bg-opacity: .2" class="bg-dark "><a href="../calculadora/index.php" class="text-decoration-none  mb-2  "><span class="fs-5 text-white">Calculadora</span></a></li>
                        <li style="list-style: none;--bs-bg-opacity: .2" class="bg-dark "><a href="#" class="text-decoration-none  mb-2  "><span class="fs-5 text-white">Tarea 1</span></a></li>

                             
                            <li style="list-style: none;--bs-bg-opacity: .2" class="bg-dark  " ><a href="#" class="text-decoration-none "><span class="fs-5  text-white">Tarea 2</span></a></li>
                        </ul>

                    </div>

                   
                    <div class="border border-end-0 border-start-0 pt-3 ">
                            <h6 class="text-center text-black mb-0">Administración</h6>
                        </div>
                        

                        <ul class="text-center p-0">
                        <li style="list-style: none;--bs-bg-opacity: .2" class="bg-dark "><a href="../public/tablas.php" target="_blank" class="text-decoration-none  mb-2  "><span class="fs-5 text-white">Tabla</span></a></li>
                        <?php if($idrol<3){ ?>
                        <li style="list-style: none;--bs-bg-opacity:.2" class="bg-dark "><a href="#" target="_blank" class="text-decoration-none  mb-2  "><span class="fs-5 text-white">Tarea 1</span></a></li>
                             
                            <li style="list-style: none;--bs-bg-opacity: .2" class="bg-dark  " ><a href="#" target="_blank" class="text-decoration-none "><span class="fs-5  text-white">Tarea 2</span></a></li>
                        </ul>

                    </div>

                    <?php
                    };
                         };
                    ?>

                  

                </div>
            </div>
        </aside>


        <section class="d-flex flex-wrap m-auto col-8">
            <!-- <div class="container bg-success opacity-50 w-100">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Mollitia dolorum dolorem provident consequuntur quos earum sit, dicta doloremque nemo maxime odit ex. Nam magni possimus placeat amet similique quidem aperiam!
        </div> -->
        <?php if($idrol<3){ ?>
            <div class="row m-2 ">
                <div class="col-sm-4 ">
                    <div class="card shadow" style="width: 15rem;">
                        <img src="../imagenes/plataforma/calc.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#" class=" text-decoration-none">
                                <p class="text-black fs-4 text-center">Calculadora en CSS, HTML Y PHP</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row m-2">
                <div class="col-sm-4">
                    <div class="card shadow" style="width: 15rem;">
                        <img src="../imagenes/plataforma/calc.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#" class=" text-decoration-none">
                                <p class="text-black fs-4 text-center">Calculadora en CSS, HTML Y PHP</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>



            <div class="row m-2">
                <div class="col-sm-4">
                    <div class="card shadow" style="width: 15rem;">
                        <img src="../imagenes/plataforma/calc.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#" class=" text-decoration-none">
                                <p class="text-black fs-4 text-center">Calculadora en CSS, HTML Y PHP</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>



            <div class="row m-2">
                <div class="col-sm-4">
                    <div class="card shadow" style="width: 15rem;">
                        <img src="../imagenes/plataforma/calc.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#" class=" text-decoration-none">
                                <p class="text-black fs-4 text-center">Calculadora en CSS, HTML Y PHP</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>



            <div class="row m-2">
                <div class="col-sm-4">
                    <div class="card shadow" style="width: 15rem;">
                        <img src="../imagenes/plataforma/calc.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#" class=" text-decoration-none">
                                <p class="text-black fs-4 text-center">Calculadora en CSS, HTML Y PHP</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row m-2">
                <div class="col-sm-4">
                    <div class="card shadow" style="width: 15rem;">
                        <img src="../imagenes/plataforma/calc.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <a href="#" class=" text-decoration-none">
                                <p class="text-black fs-4 text-center">Calculadora en CSS, HTML Y PHP</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <?php
                         };
                    ?>
        </section>




    </main>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</html>
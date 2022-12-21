<?php

session_start();


?>

<!DOCTYPE html>
<html lang="Es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="../css/index.css">


  <title>HOME</title>
</head>

<body>

  <header>
    <nav class="navbar navbar-expand-lg bg-primary d-flex justify-content-end   ">
      <ul class="d-flex flex-direccion mb-0 " style="list-style:none">
        <li><button class="btn btn-primary">Home</button></li>
        <li style="margin-left:10px;"><?php include '../public/login.php' ?></li>
        <li style="margin-left:10px;"><?php include '../public/register.php' ?></li>
      </ul>

    </nav>

  </header>


  <main class="card-body m-auto">

    <div class="index">
      <div>
        <img class="logo" src="../imagenes/logo.webp" alt="">
      </div>

    </div>
    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="1000">
          <img src="../imagenes/foto1.webp" class="d-block w-100" alt="prueba">
          <div class="carousel-caption d-none d-md-block">
            <h5 class="">Recomendado</h5>
            <p>La tecnología esta controlando al mundo</p>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <img src="../imagenes/foto2.webp" class="d-block w-100  " alt="prueba2">
          <div class="carousel-caption d-none d-md-block">
            <h5 class="">Recomendado</h5>
            <p>La tecnología esta controlando al mundo</p>
          </div>
        </div>
        <div class="carousel-item">
        
          <img src="../imagenes/foto3.webp" class="d-block w-100" alt="prueba3">
          <div class="carousel-caption d-none d-md-block">
            <h5 class="">Recomendado</h5>
            <p>La tecnología esta controlando al mundo</p>
          </div>
        
        </div>
      </div>

      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>


  </main>


</body>


<footer class="fixed-bottom bg-primary ">
  <div class="d-flex justify-content-around  align-items-center footer__uno" >
    <div class="d-flex justify-content-between  align-items-center  ">
      <h6 class="mb-0 mr-2">Contacto <span class="text-white mb-0 ">  314 123 45 67</span>  </h6> 
      
      
    </div>
    <div><span class="fs-8 text-white">todos los derechos reservados 2022</span></div>
  </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

</html>

<?php


if($_SESSION['mensaje']){


?>
<script>


  $(function(){
    $('#exampleModal').modal('show');
  });


</script>

<?php
};
//unset($_SESSION['mensaje']);
session_destroy();



?>

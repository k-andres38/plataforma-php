<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../css/nosotros.css">

  <title>Nosotros</title>
</head>

<body class="bg-success  " style="--bs-bg-opacity: .5;">

  <header>
    <nav class="navbar navbar-expand-lg bg-primary d-flex justify-content-end   ">
      <ul class="d-flex flex-direccion mb-0 " style="list-style:none">
        <li><a href="../public/nosotros.php" class="btn btn-primary">Nosotros</a></li>
        <li><a href="../public/index.php" class="btn btn-primary">Inicio</a></li>


      </ul>

    </nav>

  </header>

  <main class="">
    <form class="container-sm mt-5 col-3" method="POST" action="../backend/contacto.php">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nombre">

      </div>

      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">

      </div>

      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Asunto</label>
        <input type="text" class="form-control"  name="asunto">

      </div>

     

      <div class="form-floating mb-3">
        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="comentarios"></textarea>
        <label for="floatingTextarea2">Comments</label>
      </div>
      <button type="submit" class="btn btn-primary" name="enviar">Enviar</button>
    </form>



    <!-- modal alerta  -->
    <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade " id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog bg-success">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h1 class="modal-title fs-5 bg-primary text-white" id="staticBackdropLabel">Recibido!!..</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body bg-success">
        <h4 class="text-white">nos estaremos contactando con usted lo mas pronto posible!!</h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>

<!-- este alerta es por si no se pudo enviar el mensaje -->


<div class="modal fade " id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel1" aria-hidden="true">
  <div class="modal-dialog bg-success">
    <div class="modal-content">
      <div class="modal-header bg-danger">
        <h1 class="modal-title fs-5  text-white" id="staticBackdropLabel1">Algo pasa!!.. <br>asegurate de que esten todos los datos requeridos.</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      
    </div>
  </div>
</div>


  </main>



</body>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  


</html>

<?php 
if(isset($_SESSION['envio'])){
 
  ?>
 

<script>


$(function(){
  $('#staticBackdrop').modal('show');
});


</script>
<?php 
unset($_SESSION['envio']);
};

if(isset($_SESSION['envio2'])){
  ?>
  <script>


$(function(){
  $('#staticBackdrop1').modal('show');
});


</script>
<?php
unset($_SESSION['envio2']);
};

?>
<?php

 session_start();
 
?>



<!DOCTYPE html>
<html lang="Es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Login
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
            <div class="alert alert-danger mt-2 w-75 m-auto mb-0 pt-2 d-none" id="alerta"><span class="text-center" >Usuario o Contraseña inconrrectos 😓</span></div>
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Login</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body  ">


                    <form class="modal-body form-control bg-primary bg-gradient bg-opacity-50" method="POST" action="../backend/log.php">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  minlength="5"  required name="email">
                            
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" 
                            minlength="5"  required name="password" >
                        </div>
                        
                        <div class="mb-3">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">login</button>
                        </div>

                    </form>

                </div>

            </div>
        </div>
    </div>
     <?php 


if(isset($_SESSION['mensaje'])){
    $mensaje = $_SESSION['mensaje'];
    if($mensaje){
            
        
        echo "<script>document.getElementById('alerta').classList.remove('d-none');</script>";    

            

    };
    session_destroy();
 }
   
       
    
        

?> 

</body>

</html>


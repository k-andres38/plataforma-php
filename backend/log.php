<?php

include '../conexion.php';



if(isset($_POST)){
    $email= $_POST['email'];
    $password= $_POST['password'];

    $quer3="select * from usuario where email='$email'";

    $resultado=mysqli_query($conex,$quer3);
    

    $row=mysqli_fetch_array($resultado);

    if($row[6]===$email && $row[5]===hash('sha1',$password)) {

        session_start();
        $_SESSION['id']=$row[0];
        $_SESSION['nombre']=$row[2];

        header("Location: ../public/plataforma.php ");
    }else{
        ?>
        <script>
            alert("No te has logueado")
        </script>
    
        <?php
          header("Location: ../public/index.php");  
};
};

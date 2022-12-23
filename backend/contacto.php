<?php

include '../conexion.php';

if(isset($_POST['enviar'])){

   $nombre = $_POST['nombre'];
   $email = $_POST['email'];
   $asunto = $_POST['asunto'];
   $comentarios = $_POST['comentarios'];

   $insert="INSERT INTO `contacto` (`nombre`, `email`, `asunto`, `comentarios`) VALUES ('$nombre', '$email', '$asunto', '$comentarios')";

   $contacto=mysqli_query($conex,$insert);


   
   if($contacto){
      if(strlen($email)>1 && strlen($asunto)>1){
         mail($email,$asunto,$comentarios);
    session_start();
    $_SESSION['envio']="formulario";
    
    header("location: ../public/contacto.php");
   }else{
      session_start();
      $_SESSION['envio2']="form";
      header("location: ../public/contacto.php");
    
   };


      };
    

   

};
<?php

include "../conexion.php";



if (isset($_POST["enviar"])) {
    $idrol = intval($_POST['select']);

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $username = $_POST['username'];
    $email = $_POST['email'];

    $password = $_POST['password'];
    //$select = $_POST['select'];


    $con = "INSERT INTO `usuario` (`idrol`, `nombre`, `apellido`, `username`, `password`, `email`,`estado`) VALUES ($idrol,'$nombre', '$apellido', '$username', SHA1('$password'),'$email',1)";
    $sentencia = mysqli_query($conex, $con);
   
    if($sentencia){
        

       header("Location:../public/tablas.php");
    };


};
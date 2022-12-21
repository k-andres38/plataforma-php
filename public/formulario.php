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
    print_r($sentencia);
    if($sentencia){
        echo "<script>alert('funnciona')</script>";
        echo "ahi que";
    }else{
        echo "<script>alert('no funnciona')</script>";
        echo "esta raro";
    };


//////consulta 2
        

    // $consulta2 = "select * from rol where id='$file[0]'";
    // $consul2 = mysqli_query($conex, $consulta2);
    // $rol = mysqli_fetch_row($consul2);

    // if ($sentencia) {
    //     header('Location: index.php');
    // } else {
    //     echo "algo falla" . mysqli_connect_error();
    // }
}else{
    echo "no llega nada de nada";
}

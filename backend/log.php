<?php

include '../conexion.php';



if(isset($_POST)){
    $email= $_POST['email'];
    $password= $_POST['password'];

    $quer3="select * from usuario where email='$email'";
   

    $resultado=mysqli_query($conex,$quer3);


    
    

    $row=mysqli_fetch_array($resultado);
   

    if($row[6]===$email && $row[5]===hash('sha1',$password)) {
        
        $query="select * from rol where id='$row[1]'";
        
        $roles=mysqli_query($conex,$query);
        $rol=mysqli_fetch_array($roles);

        session_start();
        $_SESSION['id']=$row[0];
        $_SESSION['nombre']=$row[2];
        $_SESSION['estado']=$row['idrol'];
        $_SESSION['puesto']=$rol[1];

        header("Location: ../public/plataforma.php ");
    }else{
        session_start();
        $_SESSION['mensaje']='usuario';
         header("Location: ../public/index.php?p=0");  
};
};

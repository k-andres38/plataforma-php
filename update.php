
<?php
include './conexion.php';


if (isset($_POST["actualizar"])) {
    $idrol=$_POST['select'];
    $id= $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    //$select = $_POST['select'];


    

    $query = "UPDATE usuario SET idrol=$idrol, nombre='$nombre', apellido='$apellido', username='$username',email='$email', password=sha1('$password')  WHERE id='$id'";

$resul=mysqli_query($conex,$query);


    if(!$resul){
        echo "algo falla";
    }
    echo "holii";
   header("Location:public/tablas.php");

};




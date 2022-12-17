<?php

include_once '../conexion.php';

if (isset($_POST['id'])) {
    $id = $_POST['id'];

    $eliminar = "delete from usuario where id=$id";

    mysqli_query($conex, $eliminar);
}





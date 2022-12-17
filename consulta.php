<?php

include '../conexion.php';



$consulta = "select * from usuario";
$consul = mysqli_query($conex, $consulta);

$pi = mysqli_fetch_row($consul);









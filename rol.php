<?php
$consulta2 = "select * from rol where id='$pi[1]'";
$consul = mysqli_query($conex, $consulta2);
$row = mysqli_fetch_row($consul);
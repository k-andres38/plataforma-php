<?php
session_start();
$id = ( isset($_SESSION['id'] )) ? $_SESSION['id'] : '';
$rol = ( isset($_SESSION['estado'] )) ? $_SESSION['estado'] : '';


if(!$rol>3){
    session_start();
    session_destroy();
    header("Location: ../public/plataforma.php");
}



if(!$id){
    header("Location: ../public/index.php");
    session_destroy();
}

?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>tablas</title>
</head>


<body>

<header>
    <nav class="navbar navbar-expand-lg bg-primary d-flex justify-content-end">
      

    </nav>

  </header>


    <main>

        
                        <div class="table-responsive m-auto">

                            <table class="table table-sm align-middle  table-success table-striped table-hover table-bordered">
                                <thead class="align-middle  justify-content-center flex-direction">
                                    <tr>
                                        <th class="text-black text-center">ID</th>
                                        <th class="text-black text-center">ROL USUARIO</th>
                                        <th class="text-black text-center">NOMBRE</th>
                                        <th class="text-black text-center">APELLIDO</th>

                                        <th class="text-black text-center">USERNAME</th>
                                      <?php  if($rol<3){ ?><th class="text-black text-center">PASSWORD</th><?php };?>
                                        <th class="text-black text-center">CORREO</th>

                                        <?php

if($rol<3){ ?><th colspan="2" class="text-black text-center"><?php include '../public/crear.php'; ?></th><?php }else{ echo "<th colspan='2' class='text-black text-center'></th>";};?>


                                    </tr>
                                </thead>
                                <tbody class="text-center" >
<?php
include '../conexion.php';
include '../eliminar.php';
//include './editar.php';




include '../consulta.php';


while ($file = mysqli_fetch_row($consul)) {
    $consulta2 = "select * from rol where id='$file[1]'";
    $consulta = mysqli_query($conex, $consulta2);
    $row = mysqli_fetch_row($consulta);

    echo "<tr >
<td class='text-black'>$file[0]</td>

<td class='text-black'>$row[1]</td>
<td class='text-black'>$file[2]</td>
<td class='text-black'>$file[3]</td>
<td class='text-black'>$file[4]</td>";
 if($rol<3){ ?><td class='text-black'><?=$file[5]?></td><?php };?>
<td class='text-black'><?=$file[6]?></td>

 <?php   $consulta2 = "select * from rol where id='$file[0]'";

?>

<td><?php if($rol<3){ ?><a href=" editar.php?editar=<?php echo $file[0] ?> " class=" btn btn-primary">editar</a></td class="align-bottom"><?php }; ?>

<?php if($rol<3){  echo "<td><form  method='POST'>
<button  class='btn btn-danger' name='id' value='$file[0]' >eliminar</button>
</form></td></tr>"; };
                            };

                                ?>

                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </main>





</body>



</html>

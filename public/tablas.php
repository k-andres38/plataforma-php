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
    <nav class="navbar navbar-expand-lg bg-primary d-flex justify-content-end   ">
      <ul class="d-flex flex-direccion mb-0 " style="list-style:none">
        <li  ><a href="../public/plataforma.php" class="btn btn-primary">Home</a></li>
      
      </ul>

    </nav>

  </header>


    <main>

        <!-- Button trigger modal -->
        <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Tabla
        </button> -->

        <!-- Modal -->
        <!-- <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Tabal de Usuario con su rol</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body"> -->
                        <div class="table-responsive m-auto">

                            <table class="table table-sm align-middle  table-success table-striped table-hover table-bordered">
                                <thead class="align-middle  justify-content-center flex-direction">
                                    <tr>
                                        <th class="text-black text-center">ID</th>
                                        <th class="text-black text-center">ROL USUARIO</th>
                                        <th class="text-black text-center">NOMBRE</th>
                                        <th class="text-black text-center">APELLIDO</th>

                                        <th class="text-black text-center">USERNAME</th>
                                        <th class="text-black text-center">PASSWORD</th>
                                        <th class="text-black text-center">CORREO</th>

                                        <th colspan="2" class="text-black text-center"><?php include '../public/crear.php'; ?></th>


                                    </tr>
                                </thead>
                                <tbody class="text-center" ">
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
<td class='text-black'>$file[4]</td>
<td class='text-black'>$file[5]</td>
<td class='text-black'>$file[6]</td>";

    $consulta2 = "select * from rol where id='$file[0]'";

?>
<td>
  

<a href=" editar.php?editar=<?php echo $file[0] ?> " class=" btn btn-primary">editar</a>

                                    </td class="align-bottom">
                                <?php




                                echo "<td>
<form  method='POST'>
<button class='btn btn-danger' name='id' value='$file[0]' ;'  >eliminar</button>
</form>
</td>

</tr>

";
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
<?php
if(true){
    ?>
    <script>
        $(function(){
            $('#exampleModal').modal('show')
        });
    </script>
    <?php
};

?>
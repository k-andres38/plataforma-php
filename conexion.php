<?php

$host = '127.0.0.1';
$user = 'usuario';
$password = 'carlos';
$db = 'empresa';

$conex = mysqli_connect($host, $user, $password, $db);

if (!$conex) {
     die("Error conexion " . mysqli_connect_error());
}




// class mysqlconex{
//     public function conex(){
//         $conex=mysqli_connect('localhost','root','','empresa');
//         return $conex;
//     }
    
//     }


// form action='./editar.php' method='POST' >
              
//             <button class='btn btn-info' name='id' value='$file[0]'>editar</button>
//             </form>
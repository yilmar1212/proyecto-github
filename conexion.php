<?php

//$conexion=mysqli_connect('0.0.0.0','root','root','biblioteca_g1') or die("<br> error en conexión");
//mysqli_set_charset($conexion,'utf8');


    $server = "localhost";
    $user = "root";
    $pass = "";
    $bd = "bonsai";
    
    
    $conexion = mysqli_connect($server, $user, $pass,$bd) 
        or die("Ha sucedido un error inexperado en la conexion de la base de datos");
    
    return $conexion;
    
    $conexion = connectDB();
    

?>
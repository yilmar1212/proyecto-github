<?php

session_start();


//echo "Estoy donde proceso mis datos de usuario";

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$password = $_POST['password'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$fechanacimiento = $_POST['fechanacimiento'];


//echo "<br><br>".$nombre." - ".$apellido." - ".$email." - ".$password." - ".$direccion." - ".$telefono." - ".$fechanacimiento;


    
    include("conexion.php");    
    mysqli_set_charset($conexion, "utf8");
    
    $password_encriptado=md5($password);
    $consulta = "INSERT INTO t_usuario(nombre_usu, apellido_usu, correo_electronico, contraseña, direccion_usu, cel_usu, date_nac) VALUES ('$nombre','$apellido','$email','$password','$direccion','$telefono','$fechanacimiento')";
    $resultado = mysqli_query($conexion,$consulta);

    $_SESSION['usuario']=$email;
  
    
    //Generamos la consulta
    $sql = "SELECT * FROM t_usuario";
    if(!$result = mysqli_query($conexion, $sql)) 
    {
     echo "Usuario creado correctamente";
    }
    else {
        echo "Usuario NO creado correctamente";
    }
header('location:index.html');
?>
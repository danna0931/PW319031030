<?php
$servidor="localhost";
$user="root"; 
$psw="";
$db="registros";

$conn=new mysqli($servidor,$user,$psw,$db);

$idd=$_POST['id'];
$correoo=$_POST['correo'];
$contrasenaa=$_POST['password'];
// Recuperar los datos de la tabla
if(empty($_POST['id']))  {
   header("Location: actualizar.php");
   echo"esta vacio";
    return;
}

else{
    $sql = "UPDATE usuarios SET correo='$correoo' , password='$contrasenaa' WHERE id=$idd";
}

mysqli_query($conn,$sql);

header("Location: actualizar.php");



// Cerrar la conexión
$conn->close();
?>
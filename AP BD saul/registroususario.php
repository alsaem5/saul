

<?php
include('conec.php');
if(isset($_POST['enviar'])){

    $telefono = $_POST ['numtelefono'];
    $nombrepersona =$_POST ['nombrepersona'];
    $apellidopaterno = $_POST ['apellidopaterno'];
    $apellidomaterno = $_POST ['apellidomaterno'];
    $correo =$_POST ['correo'];
    $ususario = $_POST ['usuario'];
    $contrasena = $_POST ['contrasena'];

    $insertarususario = "INSERT INTO ususarios (telefono,nombrepersona,apellidopaterno,apellidomaterno,correo,usuario,contraseña) 
    VALUES ('$telefono','$nombrepersona','$apellidopaterno','$apellidomaterno','$correo','$ususario','$contrasena')";
    $resultado2 = mysqli_query ($conexion,$insertarususario);

    if(!$resultado2){
        echo '<script>alert("Los datos se insertaron")</script>';
    }
    else{
        echo '<script>alert("Los datos si se insertaron")</script>';
    }
}
header('Location: ususario.php');
?>  
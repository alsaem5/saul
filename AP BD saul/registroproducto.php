<?php

include('conec.php');
if(isset($_POST['enviar'])){

    $nomProducto = $_POST ['nomProducto'];
    $precioProducto =$_POST ['precioProducto'];
    $codProducto = $_POST ['codProducto'];
    $insertarproducto = "INSERT INTO producto (nombre,precio,codigo_fabricante) VALUES ('$nomProducto','$precioProducto','$codProducto')";
    $resultado = mysqli_query ($conexion,$insertarproducto);

    if(!$resusltado){
        echo '<script>alert("Los datos se insertaron")</script>';
    }
    else{
        echo '<script>alert("Los datos si se insertaron")</script>';
    }
}
header('Location: productos.php');
?>


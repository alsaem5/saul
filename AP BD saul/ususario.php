<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
     rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
     crossorigin="anonymous">
    <title>Usuarios</title>
  
        
</head>
<body>
<h3>Ingrese los datos</h3>
    <form action="registroususario.php" method="POST">
        <div class="mb-3">
            <label class="from-lable">Ingresa el telefono </label>
            <input type="text" class="form-control" name="numtelefono" required/>
        </div>
        <div class="mb-3">
            <label class="from-lable">Ingresa el nombre</label>
            <input type="text" class="form-control" name="nombrepersona" required/>
    
        </div>
        <div class="mb-3">
            <label class="from-lable">ingresa apellido paterno </label>
            <input type="text" class="form-control" name="apellidopaterno" required/>
        </div>
        <div class="mb-3">
            <label class="from-lable">Ingresa el apellido materno</label>
            <input type="text" class="form-control" name="apellidomaterno" required/>
        </div>

        <div class="mb-3">
            <label class="from-lable">Correo</label>
            <input type="text" class="form-control" name="correo" required/>
    
        </div>
        <div class="mb-3">
            <label class="from-lable">Usuario</label>
            <input type="text" class="form-control" name="usuario" required/>
        </div>
        <div class="mb-3">
            <label class="from-lable">Contraseña</label>
            <input type="text" class="form-control" name="contrasena" required/>
        </div>

      

               
</select>

</div>


<input type="submit" name="enviar" value="enviar" class="btn btn-primary">





 <!--INICIO TABLA-->
 <table class="table">
        <thead>
          <tr>
            <th scope="col">Telefono</th>
            <th scope="col">Nombre</th>
            <th scope="col">apellido paterno</th>
            <th scope="col">apellido materno</th>
            <th scope="col">correo</th>
            <th scope="col">usuario</th>
            <th scope="col">contraseña</th>
            

          </tr>
        </thead>
        <tbody>
        <?php
          include('conec.php'); // Conexion a la bd
          $consulta = "SELECT * FROM  ususarios";

          $resultado =mysqli_query($conexion,$consulta);

          while($fila =mysqli_fetch_array($resultado)){

          
          ?>
          <tr>
            <th scope="row"> <?php echo $fila["telefono"] ?></th>
            <td> <?php echo $fila["nombrepersona"] ?></td>
            <td> <?php echo $fila["apellidopaterno"] ?></td>
            <td> <?php echo $fila["apellidomaterno"] ?></td>
            <td> <?php echo $fila["correo"] ?></td>
            <td> <?php echo $fila["usuario"] ?></td>
            <td> <?php echo $fila["contraseña"] ?></td>
            

           
           
               
          </tr>

          
          
          <tr>
          <?php } ?>
        </tbody>
      </table>
    <!--FIN TABLA-->
    

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
    crossorigin="anonymous"></script>
    
</body>
</html>
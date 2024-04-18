<?php 
    require_once('../../consulta.php');
    $IDCliente = $_GET['IDCliente'];
    $query = "SELECT * FROM clientes";
    $result = $conexion->query($query);

   
    ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Control de un inventario</title>
</head>
<a href="../../../clientes.php"><button>Regresar</button></a>
<body>
    <form action="editar_index.php" method="POST">
    
      
      <label for="inputnombre" class="sr-only">nombre</label>
      <input type="nombre" id="inputnombre" class="form-control" placeholder="nombre" name="nombre">
      <label for="inputprecio" class="sr-only">email</label>
      <input type="email" id="inputprecio" class="form-control" placeholder="email" name="email">
      <label for="inputstock" class="sr-only">producto</label>
      <input type="producto" id="inputstock" class="form-control" placeholder="producto" name="producto">
      <label for="inputcategoria" class="sr-only">pedido</label>
      <input type="pedido" id="inputcategoria" class="form-control" placeholder="pedido" name="pedido">
      <div class="col-12">
                    <input type="hidden" name="IDCliente" value="<?php echo $IDCliente; ?>">
                    <button type="submit" class="btn btn-success">guardar</button>
                </div>
    </form>
    
</body>
</html>
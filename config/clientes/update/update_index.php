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
    <link rel="stylesheet" href="../../../css/styles_form.css">
    <title>Control de un inventario</title>
</head>

<body>
    <div class="container">

    <div class="tittle">AGREGANDO PRODUCTO</div>
    <a href="../../../clientes.php"><button>Regresar</button></a><br>

    <form action="#">
    <form action="editar_index.php" method="POST">
    
    <div class="form-clientes">
      <label for="inputnombre" class="sr-only">nombre</label>
      <input type="nombre" id="inputnombre" class="form-control" placeholder="nombre" name="nombre">
      </div>

      <div class="form-clientes">
      <label for="inputprecio" class="sr-only">email</label>
      <input type="email" id="inputprecio" class="form-control" placeholder="email" name="email">
    </div>

      <div class="form-clientes">
      <label for="inputstock" class="sr-only">producto</label>
      <input type="producto" id="inputstock" class="form-control" placeholder="producto" name="producto">
    </div>

      <div class="form-clientes">
      <label for="inputcategoria" class="sr-only">pedido</label>
      <input type="pedido" id="inputcategoria" class="form-control" placeholder="pedido" name="pedido">
      </div>

      <button type="submit" class="btn btn-success">guardar</button>


      <div class="col-12"><input type="hidden" name="IDCliente" value="<?php echo $IDCliente; ?>"></div>

      
    </form>
      </form>
    </div>
</body>
</html>
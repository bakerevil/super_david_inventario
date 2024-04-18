<?php 
    require_once('../../consulta.php');
    $IDPedido = $_GET['IDPedido'];
    $query = "SELECT * FROM detalles_pedido";
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
    <a href="../../../pedidos.php"><button>Regresar</button></a>

<form action="#">
    <form action="editar_index.php" method="POST">
    
      


    <div class="form-clientes">
      <label for="inputnombre" class="sr-only">pedido</label>
      <input type="pedido" id="inputnombre" class="form-control" placeholder="pedido" name="pedido">
      </div>



      <div class="form-clientes">
      <label for="inputprecio" class="sr-only">producto</label>
      <input type="producto" id="inputprecio" class="form-control" placeholder="producto" name="producto">
      </div>



      <div class="form-clientes">
      <label for="inputstock" class="sr-only">cantidad</label>
      <input type="cantidad" id="inputstock" class="form-control" placeholder="cantidad" name="cantidad">
      </div>



      <div class="form-clientes">
      <label for="inputcategoria" class="sr-only">codigo</label>
      <input type="codigo" id="inputcategoria" class="form-control" placeholder="codigo" name="codigo">
      </div>

<button type="submit" class="btn btn-success">guardar</button>

      <div class="col-12">
                    <input type="hidden" name="IDPedido" value="<?php echo $IDPedido; ?>">
                    
                </div>
    </form>
     </form>
    </div>
</body>
</html>
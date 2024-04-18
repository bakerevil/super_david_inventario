<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Control de un inventario</title>
</head>
<a href="../../../pedidos.php"><button>Regresar</button></a>
<body>
    <form action="insertpedidos.php" method="POST">
      <label for="inputpedido" class="sr-only">pedido</label>
      <input type="pedido" id="inputpedido" class="form-control" placeholder="pedido" name="pedido">
      <label for="inputproducto" class="sr-only">producto</label>
      <input type="producto" id="inputproducto" class="form-control" placeholder="producto" name="producto">
      <label for="inputcantidad" class="sr-only">cantidad</label>
      <input type="cantidad" id="inputcantidad" class="form-control" placeholder="cantidad" name="cantidad">
      <label for="inputcodigo" class="sr-only">codigo</label>
      <input type="codigo" id="inputcodigo" class="form-control" placeholder="codigo" name="codigo">
      <button type="submit" class="btn btn-success">guardar</button>
        </div>
    </form>
    
</body>
</html>
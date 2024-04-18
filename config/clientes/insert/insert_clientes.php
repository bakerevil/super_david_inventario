<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Control de un inventario</title>
</head>
<a href="../../../clientes.php"><button>Regresar</button></a>
<body>
    <form action="insertclientes.php" method="POST">
      <label for="inputnombre" class="sr-only">nombre</label>
      <input type="nombre" id="inputnombre" class="form-control" placeholder="nombre" name="nombre">
      <label for="inputemail" class="sr-only">email</label>
      <input type="email" id="inputemail" class="form-control" placeholder="email" name="email">
      <label for="inputproducto" class="sr-only">producto</label>
      <input type="producto" id="inputproducto" class="form-control" placeholder="producto" name="producto">
      <label for="inputpedido" class="sr-only">pedido</label>
      <input type="pedido" id="inputpedido" class="form-control" placeholder="pedido" name="pedido">
      <button type="submit" class="btn btn-success">guardar</button>
        </div>
    </form>
    
</body>
</html>
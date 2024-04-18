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

          <form action="insertpedidos.php" method="POST">




    <div class="form-clientes">
      <label for="inputpedido" class="sr-only">pedido</label>
      <input type="pedido" id="inputpedido" class="form-control" placeholder="pedido" name="pedido">
      </div>

    <div class="form-clientes">
      <label for="inputproducto" class="sr-only">producto</label>
      <input type="producto" id="inputproducto" class="form-control" placeholder="producto" name="producto">
      </div>


    <div class="form-clientes">
      <label for="inputcantidad" class="sr-only">cantidad</label>
      <input type="cantidad" id="inputcantidad" class="form-control" placeholder="cantidad" name="cantidad">
      </div>


    <div class="form-clientes">
      <label for="inputcodigo" class="sr-only">codigo</label>
      <input type="codigo" id="inputcodigo" class="form-control" placeholder="codigo" name="codigo">
      </div>





      <button type="submit" class="btn btn-success">guardar</button>
        </div>
    </form>
       </form>
    </div>
</body>
</html>
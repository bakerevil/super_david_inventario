<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Control de un inventario</title>
</head>
<a href="../../../index.php"><button>Regresar</button></a>
<body>
    <form action="insert.php" method="POST">
      <label for="inputnombre" class="sr-only">nombre</label>
      <input type="nombre" id="inputnombre" class="form-control" placeholder="nombre" name="nombre">
      <label for="inputprecio" class="sr-only">precio</label>
      <input type="precio" id="inputprecio" class="form-control" placeholder="precio" name="precio">
      <label for="inputstock" class="sr-only">stock</label>
      <input type="stock" id="inputstock" class="form-control" placeholder="stock" name="stock">
      <label for="inputcategoria" class="sr-only">categoria</label>
      <input type="categoria" id="inputcategoria" class="form-control" placeholder="categoria" name="categoria">
      <button type="submit" class="btn btn-success">guardar</button>
        </div>
    </form>
    
</body>
</html>
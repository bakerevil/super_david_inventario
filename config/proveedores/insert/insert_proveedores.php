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
<a href="../../../proveedores.php"><button>Regresar</button></a>
<form action="#">
    <form action="insertproveedores.php" method="POST">



    <div class="form-clientes">
      <label for="inputnombre" class="sr-only">nombre</label>
      <input type="nombre" id="inputnombre" class="form-control" placeholder="nombre" name="nombre">
      </div>







      <div class="form-clientes">
      <label for="inputdireccion" class="sr-only">direccion</label>
      <input type="direccion" id="inputdireccion" class="form-control" placeholder="direccion" name="direccion">
      </div>






      <div class="form-clientes">
      <label for="inputtelefono" class="sr-only">telefono</label>
      <input type="telefono" id="inputtelefono" class="form-control" placeholder="telefono" name="telefono">
      </div>



      <div class="form-clientes">
      <label for="inputrfc" class="sr-only">rfc</label>
      <input type="rfc" id="inputrfc" class="form-control" placeholder="rfc" name="rfc">
      </div>


      <div class="form-clientes">
      <label for="inputproducto" class="sr-only">producto</label>
      <input type="producto" id="inputproducto" class="form-control" placeholder="producto" name="producto">
      </div>






      <button type="submit" class="btn btn-success">guardar</button>
        </div>
    </form>
       </form>
    </div>
</body>
</html>
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
        <div class="boton">

        <a href="../../../clientes.php"><button>Regresar</button></a>
        
        </div>
        <form action="#">
        
    

    <form action="insertclientes.php" method="POST">

    
    <div class="form-clientes">
      <label for="inputnombre" class="sr-only">nombre</label>
      <input type="nombre" id="inputnombre" class="form-control" placeholder="nombre" name="nombre">
    </div>


    <div class="form-clientes">
      <label for="inputemail" class="sr-only">email</label>
      <input type="email" id="inputemail" class="form-control" placeholder="email" name="email">
    </div>


    <div class="form-clientes">
      <label for="inputproducto" class="sr-only">producto</label>
      <input type="producto" id="inputproducto" class="form-control" placeholder="producto" name="producto">
    </div>


    <div class="form-clientes">
      <label for="inputpedido" class="sr-only">pedido</label>
      <input type="pedido" id="inputpedido" class="form-control" placeholder="pedido" name="pedido">
    </div>



      
         <button type="submit" class="btn btn-success">guardar</button>
     
        </div>
        </form>
      </form>
    </div>
</body>
</html>
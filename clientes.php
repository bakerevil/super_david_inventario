<?php
require_once('config/consulta.php');
$query = "SELECT * FROM clientes";
$result = $conexion->query($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles_index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="head">
            <a href="index.php"><h1>productos</h1></a>
            <a href="proveedores.php"><h1>proveedores</h1></a>
            <a href="pedidos.php"><h1>pedidos</h1></a>
            <a href="clientes.php"><h1>clientes</h1></a>
        </div>
    </header>
    <a href="config/clientes/insert/insert_clientes.php"><button>Agregar productos</button></a>
    <br>
    <h2>Lista de los clientes</h2>
    <br>
    </header>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>nombre</th>
                <th>correo electronico</th>
                <th>Producto</th>
                <th>Num. pedido</th>
                <th>editar</th>
            </tr>
        </thead>
        <?php
                 while($row = $result->fetch_assoc ()){
                ?>
            <tr>
            
                    <td><?php echo $row ['IDCliente']; ?></td>
                    <td><?php echo $row ['nombre']; ?></td>
                    <td><?php echo $row ['email']; ?></td>
                    <td><?php echo $row ['producto']; ?></td>
                    <td><?php echo $row ['pedido']; ?></td>
                    
                    <td>
                        <a href="config/cliente/update/update_index.php?IDCliente=<?php echo $row ['IDCliente']; ?>" class="btn btn-warning">editar</a>
                        
                    </td>
            </tr>
           
            <?php }?>
    </table>
</body>
</html>
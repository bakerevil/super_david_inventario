<?php
require_once('config/consulta.php');
$query = "SELECT * FROM proveedor";
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
    <a href="config/proveedores/insert/insert_proveedores.php"><button>Agregar proveedor</button></a>
    <br>
    <h2>Lista de los proveedores</h2>
    <br>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>nombre</th>
                <th>direccion</th>
                <th>telefono</th>
                <th>rfc</th>
                <th>producto</th>
                <th style="text-align: center;">editar</th>
            </tr>
        </thead>
        <?php
                 while($row = $result->fetch_assoc ()){
                ?>
            <tr>
            
                    <td><?php echo $row ['IDProveedor']; ?></td>
                    <td><?php echo $row ['nombre']; ?></td>
                    <td><?php echo $row ['direccion']; ?></td>
                    <td><?php echo $row ['telefono']; ?></td>
                    <td><?php echo $row ['rfc']; ?></td>
                    <td><?php echo $row ['producto']; ?></td>
                    
                    <td>
                        <a href="config/proveedores/update/update_index.php?IDProducto=<?php echo $row ['IDProveedor']; ?>" class="btn btn-warning">editar</a>
                        
                    </td>
            </tr>
           

            <?php }?>
       
    </table>
</body>
</html>
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
            <a id="primary" href="proveedores.php"><h1>proveedores</h1></a>
            <a href="pedidos.php"><h1>pedidos</h1></a>
            <a href="clientes.php"><h1>clientes</h1></a>
            <a id="comp" href="config/proveedores/insert/insert_proveedores.php"><h2>Agregar proveedor</h2></a>
        </div>
    </header>
    <br>
    <h2 id="texto">Lista de los proveedores</h2>
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
                        <a href="config/proveedores/update/update_index.php?IDProveedor=<?php echo $row ['IDProveedor']; ?>" class="btn btn-warning" style= background-color:rgb(89,78,252);>editar</a>
                        
                    </td>
            </tr>
            <?php }?>
    </table>
    <footer>
        <hr>
        <div class="footer">
            <h2>Super David</h2>
            <div>
                <i>IN</i>
                <i>TW</i>
                <i>BK</i>
            </div>
        </div>
        <div class="con">
            <h4>Super_david1@gmail.com</h4>
            <h4>+91 91813 23 2309</h4>
        </div>
        <div class="cr">
            <h4>Copyright © 2024 Super David.</h4>
        </div>
    </footer>
</body>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: Rodrigo
 * Date: 05/06/2017
 * Time: 22:28
 */
session_start();
if(isset($_REQUEST["regis"]))
{
    $_SESSION["regis"]=$_REQUEST["regis"];
    if($_SESSION["regis"]==1)
    {
        echo "REGISTRO EXITOSO";
    }
}
?>
<table border="1">
    <tr>
        <th>Codigo</th>
        <th>Nombre</th>
        <th>Tipo</th>
        <th>Cantidad</th>
        <th>Precio</th>
    </tr>
</table>

<h1><a href="nuevo_producto.php">Registrar Producto</a></h1>

<?php
/**
 * Created by PhpStorm.
 * User: Rodrigo
 * Date: 05/06/2017
 * Time: 22:29
 */
session_start();
if(isset($_REQUEST["error"]))
{
    $_SESSION["error"]=$_REQUEST["error"];
    if($_SESSION["error"]==0)
    {
        echo "ERROR AL REGISTRAR";
    }
}
?>
<div style="text-align: center;">
    <span style="color: red; "><h1>Bienvenido a registro de producto</h1></span>
    <span style="color: blue; "><h2>Por favor ingrese todos los datos</h2></span>
<form method="post" action="validar.php?v=2">
    <label for="codigo">Codigo: </label>
    <input type="text" name="codigo" id="codigo">
    <br>
    <br>
    <label for="usuario">Nombre: </label>
    <input type="text" name="usuario" id="usuario">
    <br>
    <br>
    <label for="tipo">Tipo: </label>
    <select name="tipo" id="tipo">
        <option value="Vestimenta">Vestimenta</option>
        <option value="Salud">Salud</option>
        <option value="Alimento">Alimento</option>
    </select>
    <br>
    <br>
    <label for="cantidad">Cantidad:</label>
    <input type="text" name="cantidad" id="cantidad">
    <br>
    <br>
    <label for="precio">Precio:</label>
    <input type="text" name="precio" id="precio">
    <br>
    <br>
    <input type="submit" name="registrar" id="registrar" value="Insertar Producto">
</form>
</div>
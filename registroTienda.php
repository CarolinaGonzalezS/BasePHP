<?php
/**
 * Created by PhpStorm.
 * User: Rodrigo
 * Date: 05/06/2017
 * Time: 20:19
 */
session_start();
if(isset($_REQUEST["error"]))
{
    $_SESSION["error"]=$_REQUEST["error"];
    if($_SESSION["error"]==0)
    {
        echo "ERROR AL INGRESAR";
    }elseif ($_SESSION["error"]==2)
    {
        echo '<h3>';
        echo '<div style="text-align: center;">';
        echo '<span style="color: blue; ">';
        echo "LAS CLAVES NO COINSIDEN";
        echo '</span>';
        echo '</div>';
        echo '</h3>';
    }

}
?>
<div style="text-align: center;">
    <span style="font-family: arial; color: red; "> <h1>BIENVENIDO</h1></span>
    <span style="color: blue; "><h2>REGISTRE SU TIENDA AQUI</h2></span>
    <h3>
        <form method="post" action="validar.php">
            <label for="tienda">Tienda: </label>
            <input type="text" name="tienda" id="tienda">
            <br>
            <br>
            <label for="usuario">Usuario: </label>
            <input type="text" name="usuario" id="usuario">
            <br>
            <br>
            <label for="clave1">Clave: </label>
            <input type="password" name="clave1" id="clave1">
            <br>
            <br>
            <label for="clave2">Repita clave:</label>
            <input type="password" name="clave2" id="clave2">
            <br>
            <br>
            <input type="submit" name="registrar" id="registrar" value="REGISTRAR">
        </form>
    </h3>
</div>
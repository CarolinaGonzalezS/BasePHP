<?php
/**
 * Created by PhpStorm.
 * User: Rodrigo
 * Date: 05/06/2017
 * Time: 21:26
 */
$conn=new mysqli('localhost','root','','dbbtiendas');
$instruccionsql='';
if ($conn->connect_error)
{
    echo "error".$conn->connect_error;
    exit();
}
echo "conexion exitosa";
session_start();
if($_POST && isset($_POST))
{
    if ($_GET["v"]==2)
    {
        $codigo=$_POST["codigo"];
        $nombre=$_POST["nombre"];
        $tipo=$_POST["tipo"];
        $cantidad=$_POST["cantidad"];
        $precio=$_POST["precio"];
        $instruccionsql="INSERT INTO producto(idProducto,nombre,tipo,cantidad,precio)
                VALUES ('$codigo','$nombre','$tipo','$cantidad','$precio')";
        $respuesta=$conn->query($instruccionsql);
        if(!$respuesta)
        {
            header("Location:nuevo_producto.php?error=0");
            exit();
        }
        header("Location:inicio.php?regis=1");
        exit();


    }else
    {
        $tienda=$_POST["tienda"];
        $usuario=$_POST["usuario"];
        $clave1=$_POST["clave1"];
        $clave2=$_POST["clave2"];
        if($clave1==$clave2)
        {
            $clave=MD5($clave1);
            $instruccionsql="INSERT INTO tienda(nombreTienda,usuario,clave)
        VALUES ('$tienda','$usuario','$clave')";
            $respuesta=$conn->query($instruccionsql);
            if (!$respuesta)
            {
                header("Location:registroTienda.php?error=0");
                exit();
            }else
            {
                header("Location:index.php?regis=1");
                exit();
            }
        }else
        {
            header("Location:registroTienda.php?error=2");
            exit();
        }
    }
}

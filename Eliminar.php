<?php
    include "conexion.php";
    $id = $_GET["id"];

    if(isset($_POST ['tienemetro']))
    {
        $vTieneMetro = 1;
    }else{
        $vTieneMetro = 0;
    }
    $vSql = "DELETE FROM ciudades WHERE id = $id";
    mysqli_query($link,$vSql) or die (mysqli_error($link));
    mysqli_close($link); 
    header("Location: ListarCapitales.php");
?>
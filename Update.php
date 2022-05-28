<?php
    include "conexion.php";
    $id = $_POST["id"];
    $vCiudad= $_POST['ciudad'];
    $vPais= $_POST['pais'];
    $vHabitantes = $_POST['habitantes'];
    $vSuperficie = $_POST['superficie'];
     ;

    if(isset($_POST ['tienemetro']))
    {
        $vTieneMetro = 1;
    }else{
        $vTieneMetro = 0;
    }

    $vSql = " UPDATE ciudades  SET ciudad = '$vCiudad', pais = '$vPais', habitantes = '$vHabitantes',superficie = '$vSuperficie' ,tieneMetro = '$vTieneMetro' where id = '$id';
    ";

    mysqli_query($link,$vSql) or die (mysqli_error($link));
    mysqli_close($link); 
    header("Location: ListarCapitales.php");
?>
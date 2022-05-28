<?php
    include("conexion.php");
    
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

    $vSql = "Insert into ciudades (ciudad,pais,habitantes,superficie,tieneMetro)
    Values ('$vCiudad','$vPais','$vHabitantes','$vSuperficie','$vTieneMetro')";
    mysqli_query($link,$vSql) or die (mysqli_error($link));
    mysqli_close($link); 
    echo ("Alta Exitosa");
    header("Location: ListarCapitales.php");

?>

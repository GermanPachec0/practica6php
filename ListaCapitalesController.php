<?php
    
    function getAll(){
        include('conexion.php');
        $vSql = "Select * from ciudades";
        $vResultado = mysqli_query($link,$vSql);
        mysqli_close($link);
        return $vResultado;
    }

    function getOne()
    {
    include 'conexion.php';
    include_once "MiCiudad.php";
    $city = new City();
    $id = $_GET ['id'];
    $vSql= "Select * from ciudades where id= '$id'";
    $vResultado = mysqli_query($link,$vSql);
    $fila = mysqli_fetch_array($vResultado);
        $city -> setId($fila['id']);
        $city -> setCiudad($fila['ciudad']);
        $city -> setPais($fila['pais']);
        $city -> setHabitantes($fila['habitantes']);
        $city -> setSuperficie($fila['superficie']);
        $city -> setTieneMetro($fila['tieneMetro']);
    mysqli_close($link);

        return $city;
    }   



?>
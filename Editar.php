<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include ("ListaCapitalesController.php");
        include_once ("MiCiudad.php");
        $ciudadActual = new City();
        $ciudadActual = getOne();

        if($ciudadActual -> getTieneMetro() == 1){
            $tieneMetro = "Si";
        }else{
            $tieneMetro = "No";
        }   
    ?>

    <form action="Update.php" method="POST">
        <input type="text" name="id" value="<?php echo ($ciudadActual -> getId())?>" readonly> <br>
        <input  type ="text"name="ciudad" value="<?php echo ($ciudadActual -> getCiudad())?>"><br>
        <input type ="text" name="pais" value="<?php echo ($ciudadActual -> getPais())?>"> <br>
        <input type ="text" name="habitantes" value="<?php echo ($ciudadActual -> getHabitantes())?>"><br>
        <input type ="text" name="superficie" value="<?php echo ($ciudadActual -> getSuperficie())?>"> <br>
        <input type ="text" name="tieneMtro" value="<?php echo  $tieneMetro?>"><br><br>
    
        <input type="submit" value="Editar" >
        <input type ="submit" href="ListarCapitales.php" value="Cancelar">


    </form>
    
    
</body>
</html>
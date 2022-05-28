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
        include("ListaCapitalesController.php");
        $myResults = getAll();
    ?>
    
    <table>
        <tr>
            <th>ID</th>
            <th>Ciudad</th>
            <th>Pais</th>
            <th>Habitantes</th>
            <th>Superficie</th>
            <th>Tiene Metro</th>
        </tr>

 

    <?php
        while($fila = mysqli_fetch_array($myResults)){
    ?>
        <tr>
            <td><?php echo $fila['id'] ?></td>
            <td><?php echo $fila['ciudad'] ?></td>
            <td><?php echo $fila['pais'] ?></td>
            <td><?php echo $fila['habitantes'] ?></td>
            <td><?php echo $fila['superficie'] ?></td>
            <?php
            if($fila['tieneMetro'] == 1){
                $tieneMetro = "Si";
            }else{
                $tieneMetro = "No";
            }   
            ?>
            <td><?php echo $tieneMetro?></td>
            <td><a href="Editar.php?id=<?php echo $fila['id']?>">Editar</a></td>
            <td><a href="Eliminar.php?id=<?php echo $fila['id']?>">Eliminar</a></td>

        </tr>
            

    <?php
        }
    ?>
    </table>
    <a  href="FormAlta.html" value="Alta Ciudad">ALTA CIUDAD </a>
</body>
</html>
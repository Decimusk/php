<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuarios</title>
</head>
<body>
    <br><br>
    <hr>
        <h2>Listado de Empleados</h2>
    </hr>
    <?php
    //Definir un Arreglo
    $datospersonas = array(
        "persona_1" => array(
            "Nombre" => "Sonia Elizabeth López",
            "Direccion" => "Paseo General Escalón #456",
            "Telefono" => "2356-9487",
            "Fecha de Nacimiento" => "23/12/1997",
            "Color Favorito" => "Naranja"
        ),
        "persona_2" => array(
            "Nombre" => "Manuel Antonio Caspar",
            "Direccion" => "Calle ppal. 23 #12",
            "Telefono" => "8956-9987",
            "Fecha de Nacimiento" => "12/10/1987",
            "Color Favorito" => "Verde"
        ),
         "persona_3" => array(
            "Nombre" => "Juana Inés Romero",
            "Direccion" => "Av. Revolución 404 SS",
            "Telefono" => "5454-9584",
            "Fecha de Nacimiento" => "07/06/2000",
            "Color Favorito" => "Rojo"
        ),
         "persona_4" => array(
            "Nombre" => "Miguel Angel Alvarez",
            "Direccion" => "Av. Los Pipiles #2000",
            "Telefono" => "8754-9874",
            "Fecha de Nacimiento" => "03/02/2010",
            "Color Favorito" => "Negro"
        ),
    );

    $datoscolores = array(
        "Significado" => array(
            "Amarillo" => "Riqueza y Alegría",
            "Verde" => "Frescura y Salud",
            "Negro" => "Elegancia y Seriedad"
        ),
    );

    echo "<Table Border class='table table-striped-columns'>";
    echo "<thead>
        <tr>
            <th>Nombre</th>
            <th>Dirección</th>
            <th>Teléfono</th>
            <th>Fecha de Cumplea&ntilde;os</th>
            <th>Color Favorito</th>
            <th>Significado</th>
        </tr>
    </thead>";

    foreach($datospersonas as $fila){
        echo "<tr>";
        foreach($fila as $key => $celda){
            if($key=='Color Favorito'){
                if(isset($datoscolores['Significado'][$celda])){
                    echo "<td> $celda </td><td>".$datoscolores['Significado'][$celda]."</td>";
                }else{
                    echo "<td>$celda </td><td>Sin Significado</td>";
                }
            }else{
                echo "<td>$celda</td>";
            }
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>
</html>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "https://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <title>Salario neto de un trabajador</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    </head>
    <body>
        <center>
            <h1>Cálculo del Salario Neto<h1>
        </center>
<?php

if ($_SERVER['REQUEST_METHOD']=='POST')
{
    $tipoEmpleado = $_POST['empleado'];
    $numero_de_horas = floatval ($_POST['numero_de_horas']);
    $dui = $_POST['dui'];
    $precio_de_la_hora=0;
    $impuestos=0;

    echo "Cálculo de salario según empleado y horas <p> \n\n";

    if($numero_de_horas>44)
    {
        $horas_normales=44;
        $horas_extras=$numero_de_horas-44;
    }
    else
    {
        $horas_normales=$numero_de_horas;
        $horas_extras=0;
    }

    switch ($tipoEmpleado) {
        case "Operativo":
            $precio_de_la_hora = 5;
            break;
        case "Administrativo":
            $precio_de_la_hora = 10;
            break;
        case "Ejecutivo":
            $precio_de_la_hora = 15;
            break;
    }
    

    $sueldo_mensual=$horas_normales*$precio_de_la_hora+$horas_extras*$precio_de_la_hora*1.5;

    if($sueldo_mensual>=600&&$sueldo_mensual<=1000)
        $impuestos=$sueldo_mensual*0.2;
    if($sueldo_mensual>1000)
        $impuestos=$sueldo_mensual*0.3;
    $salario_final=$sueldo_mensual-$impuestos;

    echo 'Valor de su DUI: ' . $dui . "<br/>\n";
    echo 'Valor de horas extras: ' . $horas_extras . "<br/>\n";
    echo 'Valor de horas normales: ' . $horas_normales . "<br/>\n";
    echo 'Valor de impuestos: ' . $impuestos . "<br/>\n";
    echo 'Valor de salario final: ' . $salario_final . "<br/>\n";
    echo 'Valor de sueldo mensual: ' . $sueldo_mensual . " dólares <br/>\n";
}
 
?>
        <form method="post">
            <table style="text-align: left; margin-left: auto; margin-right: auto;" border="1" cellpadding="1" cellspacing="1">
                <tbody>
                    <tr>
                        <td>
                        <label for="empleado">Tipo de Empleado:</label>
                        </td>
                        <td>
                        <select name="empleado" id="empleado">
                                <option value="">--- Elija tipo de Empleado ---</option>
                                <option value="Operativo">Operativo</option>
                                <option value="Administrativo">Administrativo</option>
                                <option value="Ejecutivo">Ejecutivo</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="numero_de_horas">Ingresa el valor de número de horas:</label>
                        </td>
                        <td>
                            <input name="numero_de_horas" required="required" step="1" type="number" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="dui">Ingresa el número del DUI:</label>
                        </td>
                        <td>
                            <input name="dui" required="required" step="1" type="number" />
                        </td>
                    </tr>
                    <tr align="center">
                        <td colspan="2" rowspan="1">
                            <input value="Procesar" type="submit" />
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>

        <?php
 
            function fibonacci($n)
            {
                $fibonacci  = [0,1];
            echo($fibonacci[0]);
            echo(" ");
            for($i=2;$i<=$n;$i++)
                {
                    $fibonacci[] = $fibonacci[$i-1]+$fibonacci[$i-2];
                    echo $fibonacci[$i];
                    echo(" ");
                }
               // echo $fibonacci[$n];
            }
            
            fibonacci(10);
            
        ?>
    </body>
</html>
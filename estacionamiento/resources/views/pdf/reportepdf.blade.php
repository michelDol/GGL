<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REPORTE DE CARROS</title>
    <style>
    .encabezado{
        text-align: center;
        font: 3rem;

    }
    </style>
</head>
<body>
    <DIV class="encabezado"><H1>REGISTRO DE CARROS</H1></DIV>
    <table>
        <thead>
        <th>
        <td>ID</td>
        <td>PLACA</td>
        <td>TIPO</td>
        <td>ENTRADA</td>
        <td>SALIDA</td>
        <td>TOTAL</td>
        </th>
        </thead>
        
        <tbody>
        <?php 
        foreach ($automovil2 as $imprimir ) {
         echo "<tr>
         <td>{$imprimir->id}</td>
         <td>{$imprimir->placa}</td>
         <td>{$imprimir->tipo}</td>
         <td>{$imprimir->entrada}</td>
         <td>{$imprimir->salida}</td>
         <td>{$imprimir->total}</td>
         
         </tr>";
        }
        ?>
        </tbody> 
        </table>
    
</body>
</html>
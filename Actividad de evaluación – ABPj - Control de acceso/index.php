<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Monitor de Seguridad</title>

    <style>
        body {
            font-family: Arial;
            background: linear-gradient(135deg, #ffe6f0, #ffc0cb);
            text-align: center;
        }

        h2 {
            color: #ec5ca4;
        }

        table {
            margin: auto;
            border-collapse: collapse;
            width: 80%;
            background: #fff0f5;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0px 4px 10px rgba(0,0,0,0.1);
        }

        th, td {
            padding: 12px;
            border-bottom: 1px solid #f8bbd0;
        }

        th {
            background: #ff69b4;
            color: white;
        }

        tr:hover {
            background: #ffe4ec;
        }

        /* Acceso permitido */
        .permitido {
            background-color: #d4edda;
            color: #50bd69;
            font-weight: bold;
        }

        /*Acceso denegado */
        .denegado {
            background-color: #f8d7da;
            color: #f74a5b;
            font-weight: bold;
        }
    </style>
</head>

<body>

<h2>Monitor de Seguridad </h2>

<table>
    <tr>
        <th>Registro</th>
    </tr>

<?php
$archivo = "auditoria.txt";

if (file_exists($archivo)) {
    $lineas = file($archivo);

    foreach ($lineas as $linea) {
        $clase = "";

        if (strpos($linea, "PERMITIDO") !== false) {
            $clase = "permitido";
        }
    
        if (strpos($linea, "ALERTA") !== false || strpos($linea, "DENEGADO") !== false) {
            $clase = "denegado";
        }

        echo "<tr class='$clase'><td>$linea</td></tr>";
    }

} else {
    echo "<tr><td>No hay registros disponibles</td></tr>";
}
?>

</table>

</body>
</html>
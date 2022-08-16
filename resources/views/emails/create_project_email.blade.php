<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>Llamado de emergencia</title>
</head>
<body>
<h2>Estimad@: {{ $info['metrologist'] }}</h2>
    <p>Se ha creado y asignado el Proyecto <strong> {{ $info['codPro'] }} </strong> para el cliente:</p>
    
    <p>
        <strong> 
            {{ $info['nomCli'] }} <br />
            {{ $info['dirCli'] }} <br />
            {{ $info['cont'] }} <br />
            {{ $info['telf'] }}
        </strong>
    </p>
    
    <p>Los equipos asignados para el proyecto son los siguientes:</p>
    <table>
        <thead style="background: #14d45e; color: #fff;">
            <tr>
                <th>N</th>
                <th>Descripcion</th>
                <th>Modelo</th>
                <th>Clase</th>
                <th>Max. Cap.</th>
                <th>Uso .Cap</th>
                <th>Escala</th>
            </tr>
        </thead>
        <tbody>
            
            <tr>
                <td>1</td>
                <td>data</td>
                <td>data</td>
                <td>data</td>
                <td>data</td>
                <td>data</td>
                <td>data</td>
            </tr>
        </tbody>
    </table>

    <h6 style="color: #124597;">Este correo es un mensaje programado por el Sistema de Metrologìa</h6>
</body>
</html>
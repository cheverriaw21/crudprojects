<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Informe del Proyecto</title>
    <style>
        /* Estilos CSS personalizados para el PDF */
        body {
            font-family: 'Arial', sans-serif;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .content {
            font-size: 16px;
            line-height: 1.5;
        }

        .datos{
            margin-bottom:30px;
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1 class="title">Informe del Proyecto</h1>
            <hr>
        </div>
        <div class="datos">
            <p>
                <strong>Gobierno de El Salvador</strong><br>
                <strong>ESIT</strong><br>
                <strong>Fecha: </strong>{{ now()->format('d/m/Y') }}
            </p>
        </div>

        <div class="content">
            <p><strong>Id:</strong> {{ $proyecto->id }}</p>
            <p><strong>Nombre del Proyecto:</strong> {{ $proyecto->NombreProyecto }}</p>
            <p><strong>Fuente de Fondos:</strong> {{ $proyecto->fuenteFondos }}</p>
            <p><strong>Monto Planificado:</strong> ${{ number_format($proyecto->MontoPlanificado, 2) }}</p>
            <p><strong>Monto Patrocinado:</strong> ${{ number_format($proyecto->MontoPatrocinado, 2) }}</p>
            <p><strong>Monto Fondos Propios:</strong> ${{ number_format($proyecto->MontoFondosPropios, 2) }}</p>
        </div>
    </div>
</body>
</html>

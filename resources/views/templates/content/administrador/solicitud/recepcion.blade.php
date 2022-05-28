<!doctype html>
<html lang="en">

<head>
    <title>Laravel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>
        * {
            font-family: Arial, Helvetica, sans-serif;
            text-transform: uppercase;
            padding-top: 10px;
        }

        .date {
            font-size: 15px;
            padding: 0px;
            text-align: right;
        }

        .address {
            font-size: 15px;
            padding: 0px;
            text-align: left;
        }

        .footer {
            grid-area: header;
        }

        .head {
            grid-area: header;
        }

        .img-1 {
            float: left;
            display: inline;
        }

        .img-1 {
            float: right;
            display: inline;
        }

        .footer-1 {
            display: inline;
            font-size: 12px;
            text-align: left;
        }

        .footer-2 {
            margin-top: -60px;
            display: inline;
            font-size: 16px;
            padding: 0px;
            float: right;
        }

    </style>
</head>

<body>
    <div class="head">
        <div class="img-1">
            <img src="metronic8/demo1/assets/media/logos/logo-municipio.png" height="90">
        </div>
        <div class="img-2">
            <img src="metronic8/demo1/assets/media/logos/logo-mina.png" width="304">
        </div>
    </div><br>

    <div class="date">
        <p>Minatitlan, Ver., a
            {{ $solicitud->created_at->format('d') }} de
            {{ $solicitud->created_at->format('M') }} del {{ $solicitud->created_at->format('Y') }}<br>
            Oficio: {{ $solicitud->identificador }}/{{ $solicitud->created_at->format('Y') }}<br>
            @if ($solicitud->tipo == 'PETICION')
                ASUNTO: {{ $solicitud->tipo }} de {{ $solicitud->peticion_equipo }}
            @else
                ASUNTO: {{ $solicitud->tipo }} de {{ $solicitud->Equipo->tipo }}
            @endif
        </p>
    </div><br>

    <div class="address">
        <p>Ing. Sergio Fernandez Ferreira
            <br>Direccion de tecnologia de la informacion
            <br>H. Ayuntamiento de Minatitlan
        </p>
    </div>
    <p style="text-align: left;">P R E S E N T E</p>


    @if ($solicitud->tipo == 'MANTENIMIENTO')
        <p>El/La que suscribe <b>{{ $solicitud->Departamento->responsable }}</b> en mi
            caracter de <b>{{ $solicitud->Departamento->cargo_responsable }}</b>
            del H. Ayuntamiento de la ciudad de Minatitlan, Ver.,
            le solicito de la manera mas atenta su apoyo para el mantenimiento</b>
            del/la <b>{{ $solicitud->Equipo->tipo }}</b> <b>{{ $solicitud->Equipo->marca }}</b> con el numero de
            inventario <b>{{ $solicitud->Equipo->inventario }}</b>
            por el motivo de que <b>{{ $solicitud->observacion }}</b>.</p>
    @elseif ($solicitud->tipo == 'BAJA')
        <p>El/La que suscribe <b>{{ $solicitud->Departamento->responsable }}</b> en mi
            caracter de <b>{{ $solicitud->Departamento->cargo_responsable }}</b>
            del H. Ayuntamiento de la ciudad de Minatitlan, Ver.,
            le solicito de la manera mas atenta su apoyo para la verificacion y
            el proceso de baja
            </b>
            del/la <b>{{ $solicitud->Equipo->tipo }}</b> <b>{{ $solicitud->Equipo->marca }}</b> con el numero de
            inventario <b>{{ $solicitud->Equipo->inventario }}</b>
            por el motivo de que <b>{{ $solicitud->observacion }}</b>.</p>
    @else
        <p>El/La que suscribe <b>{{ $solicitud->Departamento->responsable }}</b> en mi
            caracter de <b>{{ $solicitud->Departamento->cargo_responsable }}</b>
            del H. Ayuntamiento de la ciudad de Minatitlan, Ver.,
            le solicito de la manera mas atenta su apoyo para la peticion
            </b>
            de un/una <b>{{ $solicitud->peticion_equipo }}</b>
            por el motivo de que <b>{{ $solicitud->observacion }}</b>.</p>
    @endif
    <p>Sin otro particular por el momento y agradeciendo de antemano su puntual
        atención al tema mencionado,
        me es grato enviarle un cordial saludo esperando su pronta respuesta,
        quedando a su disposición ante cualquier duda o aclaración que surja en un futuro.
    </p>
    <br><br>







    <p style="text-align: center;">A T E N T A M E N T E</p><br>
    <p style="text-align: center;">
        ___________________________________<br>{{ $solicitud->Departamento->responsable }}<br>{{ $solicitud->Departamento->cargo_responsable }}
    </p>
    <br><br><br><br>

    <div class="footer">
        <div class="footer-1">
            {{ $solicitud->Departamento->direccion }}<br>{{ $solicitud->Departamento->telefono }}<br>{{ $solicitud->Departamento->correo }}
        </div>
        <div class="footer-2">
            <img src="metronic8/demo1/assets/media/logos/flor-mina.png" width="150">
        </div>
    </div>

</body>

</html>

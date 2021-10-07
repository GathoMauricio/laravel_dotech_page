<!DOCTYPE html>
<!--
	Daraz by TEMPLATE STOCK
	templatestock.co @templatestock
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->

<html lang="en">
	<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ env('APP_NAME') }} | ES</title>
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('daraz') }}/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="{{ asset('daraz') }}/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="{{ asset('daraz') }}/css/animate.css"/>
    <link rel="stylesheet" href="{{ asset('daraz') }}/css/style.css" />
    <link rel="stylesheet" href="{{ asset('css/font.css') }}" />

    <script type="text/javascript" src="{{ asset('daraz') }}/js/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="{{ asset('daraz') }}/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCZXJBVDf7R4JqmSpopVPoduIGWx1IwpBM"></script>
    <script type="text/javascript" src="{{ asset('daraz') }}/js/plugins.js"></script>
        <script>
            $(document).on('ready',function(){
                if(!Notification)
                {
                    console.log("No se soportan notificaciones en este navegador");
                    return;
                }

                if(Notification.permission !== 'granted')
                {
                    Notification.requestPermission();
                }
            });
            function notificar(){
                console.log("Notificar");
                if(Notification.permission !== 'granted')
                {
                    console.log("Notificar no permitido");
                    Notification.requestPermission();
                }else{
                    console.log("Notificar permitido");
                    var notification = new Notification("Titulo",{
                        icon: '{{ asset("images/logo.png") }}',
                        body: 'Cuerpo de la notificación'
                    });
                    
                    notification.onclick = () => {
                        window.open("https://katzesystems.com");
                    };
                    
                   console.log(notification);
                }
            }
        </script>
	</head>
	<body>
        <button onclick="notificar();" class="btn btn-primary">Notificar</button>
    </body>
</html>
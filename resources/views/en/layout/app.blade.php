<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ env('APP_NAME') }} | EN</title>
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
    
	</head>
	<body>

	<div class="svg-wrap">
      <svg width="64" height="64" viewBox="0 0 64 64">
        <path id="arrow-left" d="M26.667 10.667q1.104 0 1.885 0.781t0.781 1.885q0 1.125-0.792 1.896l-14.104 14.104h41.563q1.104 0 1.885 0.781t0.781 1.885-0.781 1.885-1.885 0.781h-41.563l14.104 14.104q0.792 0.771 0.792 1.896 0 1.104-0.781 1.885t-1.885 0.781q-1.125 0-1.896-0.771l-18.667-18.667q-0.771-0.813-0.771-1.896t0.771-1.896l18.667-18.667q0.792-0.771 1.896-0.771z"></path>
      </svg>

      <svg width="64" height="64" viewBox="0 0 64 64">
        <path id="arrow-right" d="M37.333 10.667q1.125 0 1.896 0.771l18.667 18.667q0.771 0.771 0.771 1.896t-0.771 1.896l-18.667 18.667q-0.771 0.771-1.896 0.771-1.146 0-1.906-0.76t-0.76-1.906q0-1.125 0.771-1.896l14.125-14.104h-41.563q-1.104 0-1.885-0.781t-0.781-1.885 0.781-1.885 1.885-0.781h41.563l-14.125-14.104q-0.771-0.771-0.771-1.896 0-1.146 0.76-1.906t1.906-0.76z"></path>
      </svg>
    </div>
    <!-- MAIN CONTENT -->
   <div class="container-fluid">
        @yield('header')
        @yield('servicios')
        @yield('nosotros')
        @yield('proyectos')
        @yield('clientes')
        @yield('contacto')
        @yield('mapa')
        @yield('footer')   
   </div><!-- /.container-fluid -->
    
    <!-- SCRIPT -->
    <script type="text/javascript" src="{{ asset('daraz/js/main.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>

    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
    <script>
      Pusher.logToConsole = true;
      var pusher = new Pusher('{{ env('PUSHER_APP_KEY') }}', {
      cluster: '{{ env('PUSHER_APP_CLUSTER') }}'
      });
      var channel = pusher.subscribe('user-landing-channel');
          channel.bind('notification', function(data) {
          console.log(data);
          notificar(data.message.titulo,data.message.mensaje);
      });
  </script>
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
          function notificar(titulo,mensaje){
              console.log("Notificar");
              if(Notification.permission !== 'granted')
              {
                  console.log("Notificar no permitido");
                  Notification.requestPermission();
              }else{
                  console.log("Notificar permitido");
                  var notification = new Notification(titulo,{
                      icon: '{{ asset("images/logo.png") }}',
                      body: mensaje
                  });
                  
                  notification.onclick = () => {
                      window.open("https://dotech.tech");
                  };
              }
          }
      </script>
	</body>
</html>
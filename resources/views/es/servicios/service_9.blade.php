@extends(Route::currentRouteName().'.layout.app')
@include(Route::currentRouteName().'.layout.link_nav')

<section id="about" class="light">
      <header class="title">
        <h2>HOSPEDAJE  <span>WEB</span></h2>
        <p class="text-left">

        </p>
      </header>

    <div class="container">

        <div class="row table-row">
            <div class="col-sm-6 hidden-xs">
                <div class="section-content">
                    <div class="big-image p-1" style="background-image:url({{ asset('images/hosting1.jpg') }})"></div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="section-content">
                    <div class="about-content left animated" data-animate="fadeInLeft">
                        
                        <div class="about-detail">
                            <h4>ACCESOS Y ADMINISTRACION</h4>
                            <p>
                                
                            </p>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="about-content left animated" data-animate="fadeInLeft">
                        <div class="about-icon"><i class="fa fa-angle-right"></i></div>
                        <div class="about-detail">
                            <h4></h4>
                            <p>
                                Panel de control cPanel , en el cual podrás administrar todo lo relacionado con tu hospedaje web, además de contar con aplicaciones para profesionalizar tu sitio.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="about-content left animated" data-animate="fadeInLeft">
                        <div class="about-icon"><i class="fa fa-angle-right"></i></div>
                        <div class="about-detail">
                            <h4></h4>
                            <p>
                                Acceso vía FTP las 24 horas al día, para que puedas efectuar cualquier modificación en tu Sitio Web.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="about-content left animated" data-animate="fadeInLeft">
                        <div class="about-icon"><i class="fa fa-angle-right"></i></div>
                        <div class="about-detail">
                            <h4></h4>
                            <p>
                                Completa compatibilidad para subir tu Sitio Web con Dreamweaver, Flash, iWeb, entre muchos otros.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

    </div>
    <div class="container">

        <div class="row table-row">
            

            <div class="col-sm-6">
                <div class="section-content">
                    <div class="about-content left animated" data-animate="fadeInLeft">
                        
                        <div class="about-detail">
                            <h4>FUNCIONES</h4>
                            <p>
                                
                            </p>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="about-content left animated" data-animate="fadeInLeft">
                        <div class="about-icon"><i class="fa fa-angle-right"></i></div>
                        <div class="about-detail">
                            <h4></h4>
                            <p>
                                Correo electrónico con movilidad (vía POP/IMAP/Webmail)
                            </p>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="about-content left animated" data-animate="fadeInLeft">
                        <div class="about-icon"><i class="fa fa-angle-right"></i></div>
                        <div class="about-detail">
                            <h4></h4>
                            <p>
                                Puedes configurar cualquier cuenta de correo electrónico en una aplicación de cliente de correo como: Microsoft Outlook, Mail de Mac, Thunderbird, cualquier smartphone Android, iPhone o BlackBerry. Y si, por algún motivo, no estás en tu oficina o no llevas tu dispositivo a la mano, puedes consultar tu correo desde cualquier equipo con una conexión a internet y con un navegador web.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="about-content left animated" data-animate="fadeInLeft">
                        <div class="about-icon"><i class="fa fa-angle-right"></i></div>
                        <div class="about-detail">
                            <h4></h4>
                            <p>
                                Auto-responder: Puedes enviar una respuesta automática a todas las personas que te envíen un correo electrónico, cuando estés fuera de tu oficina o cuando no puedas ocuparte de lleno a tu correo.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="about-content left animated" data-animate="fadeInLeft">
                        <div class="about-icon"><i class="fa fa-angle-right"></i></div>
                        <div class="about-detail">
                            <h4></h4>
                            <p>
                                Grupos de Correo: No desperdicies tiempo en mandar un correo electrónico a cada uno de tus colaboradores. Puedes crear un grupos de correos.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="about-content left animated" data-animate="fadeInLeft">
                        <div class="about-icon"><i class="fa fa-angle-right"></i></div>
                        <div class="about-detail">
                            <h4></h4>
                            <p>
                                Sistema Anti-SPAM: Tu Correo Electrónico incluye AntiSPAM, un potente filtro para que tu buzón no se sature de correos no deseados (SPAM).
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 hidden-xs">
                <div class="section-content">
                    <div class="big-image p-1" style="background-image:url({{ asset('images/hosting2.png') }})"></div>
                </div>
            </div>

        </div>
        

    </div>

</section>

@section('header',view(Route::currentRouteName().'.sections.header'))
@section('servicios',view(Route::currentRouteName().'.sections.servicios'))
@section('proyectos',view(Route::currentRouteName().'.sections.proyectos'))
@section('clientes',view(Route::currentRouteName().'.sections.clientes'))

@section('contacto',view(Route::currentRouteName().'.sections.contacto'))
@section('mapa',view(Route::currentRouteName().'.sections.mapa'))

<style>
#header,#team,#portfolio,#info{
    display:none;
}
</style>

@section('footer',view(Route::currentRouteName().'.sections.footer'))
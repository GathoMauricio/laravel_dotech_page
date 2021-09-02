@extends(Route::currentRouteName().'.layout.app')
@include(Route::currentRouteName().'.layout.link_nav')

<section id="about" class="light">
      <header class="title">
        <h2>CONTROL DE  <span>ACCESSO</span></h2>
        <p class="text-left">
            Los controles de asistencia digitales o también llamados reloj checador de huella digital, 
            son dispositivos que nos ayudarán por medio de nuestra huella guardar registros los cuales 
            con un software podremos organizar fijando horarios y personal.
        </p>
      </header>

    <div class="container">

        <div class="row table-row">
            <div class="col-sm-6 hidden-xs">
                <div class="section-content">
                    <div class="big-image p-1" style="background-image:url({{ asset('images/control1.png') }})"></div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="section-content">
                    <div class="about-content left animated" data-animate="fadeInLeft">
                        <div class="about-detail">
                            <h4></h4>
                            <p>
                                Existen diferentes tipos de control de acceso con varios niveles de seguridad. Los más comunes son los que por medio de una Lectora de cualquier tipo, mande la señal a un electroimán, chapa, perno, pluma y de más artículos para brindar o denegar el acceso
                                <br/>
                                El principal uso es la seguridad,  necesaria en el hogar, hospitales, oficinas, escuelas, tiendas, bodegas, etc.
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
                                En el hogar se podría habilitar la entrada a la cochera por medio de una tarjeta de proximidad. En caso de tener objetos valiosos podría usarse un control de acceso biométrico con una chapa electromagnética.
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
                                En hospitales es común restringir el paso al área de medicamentos, de tal manera que quedé registrada la fecha y hora del personal que entró en dicho lugar.
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
                                Para las escuelas sería útil salvaguardar los materiales importantes, delicados o costosos dentro de los laboratorios.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="about-content left animated" data-animate="fadeInLeft">
                        <div class="about-detail">
                            <h4></h4>
                            <p>
                                Existen lectoras que al ser aceptada la identificación ya sea por huella digital, ojo, rostro, tarjeta de proximidad u otro, acciona la apertura o cierre del dispositivo que controlará la puerta por ejemplo.
                                <br/><br/>
                                Otro tipo de control de acceso es de una cerradura biométrica, la cual  se instala en la puerta y controla la apertura al aceptar la huella digital del usuario dado de alta
                            </p>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="about-content left animated" data-animate="fadeInLeft">
                        <div class="about-detail">
                            <h4></h4>
                            <p>
                                Con forme se va aumentando en nivel de seguridad y necesidades, va creciendo el proyecto. Para eso se recomiendan paneles que trabajen en conjunto con lectoras y accesorios de acceso. En caso de que se requiera controlar varias puertas con una sola tarjeta, manejar niveles de usuario, horarios e incluso habilitar o inhabilitar el acceso de una persona en tiempo real, es necesario un panel que controle todo esto conectado preferentemente a la red local de datos.
                            </p>
                        </div>
                    </div>
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
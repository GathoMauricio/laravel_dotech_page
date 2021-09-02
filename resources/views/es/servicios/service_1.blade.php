@extends(Route::currentRouteName().'.layout.app')
@include(Route::currentRouteName().'.layout.link_nav')
    <section id="about" class="light">
      <header class="title">
        <h2>SOPORTE TECNICO <span>EN SITIO Y REMOTO NACIONAL</span></h2>
        <p class="text-left">
            Nuestro Servicio de soporte técnico asiste a los usuarios de su empresa en problemas que se le presenten con sus PC ’s, laptops, dispositivos móviles, servidores, impresoras, aplicaciones de software y conexiones de red.
            <br/>
            Propiciamos la eficiencia en las herramientas de trabajo sin importar si  sus colaboradores  están en el mismo edificio, dispersos geográficamente, o constantemente de viaje. Todos tienen necesidades de software, hardware y redes.
        </p>
      </header>

      <div class="container">
        <div class="row table-row">
          <div class="col-sm-6 hidden-xs">
            <div class="section-content">
              <div class="big-image p-1" style="background-image:url({{ asset('images/soporte_1.png') }})"></div>
            </div>
          </div>

          <div class="col-sm-6">
            <div class="section-content">
              <div class="about-content left animated" data-animate="fadeInLeft">
                <div class="about-icon"><i class="fa fa-desktop"></i></div>
                <div class="about-detail">
                  <h4>Servicio sin costos ocultos</h4>
                  <p>
                    Nuestro servicio de visita incluye todos los servicios necesarios para dejar su equipo funcionando en óptimas condiciones 
                    por tan solo $ 599.00 MXN como es reparación de sistema operativo reinstalación de software, formateo, etc. Incluye respaldo de información indicado por el 
                    usuario máximo 5GB, el servicio no se cierra hasta que el cliente está totalmente satisfecho, y si no se resuelve en la primer 
                    visita regresamos a resolverlo sin ningún costo extra.
                  </p>
                </div>
              </div>

              <div class="about-content left animated" data-animate="fadeInLeft">
                <div class="about-icon"><i class="fa fa-desktop"></i></div>
                <div class="about-detail">
                  <h4>¿Requieres que alguien se haga cargo de tu área de sistemas?</h4>
                  <p>
                    Soporte, correos, pagina web, inventarios, etc. Con nuestro servicio de <strong>IGUALA</strong> haces un pago mensual y estas cubierto en TODAS tus necesidades de TECNOLOGIA.
                  </p>
                </div>
              </div>

              <div class="about-content left animated" data-animate="fadeInLeft">
                <div class="about-icon"><i class="fa fa-desktop"></i></div>
                <div class="about-detail">
                  <h4>Ingeniero de servicio en sitio</h4>
                    <p> 
                        Evita la carga social <strong>DEDUCELO</strong> Además tendrás todo un equipo de ingenieros detrás de el para resolver cualquier eventualidad!!
                        <br/>
                        <small>*Se cotiza de acuerdo a las necesidades del cliente y al perfil solicitado.</small>
                    </p>
                </div>
                
              </div>

            </div>
          </div>
        </div> 
      </div> 
    </section>

    <section class="dark" style ="background-color:#000">
        <header class="title">
        <h2>Paquete de Visitas <span>Tú nos llamas cuando quieras y como quieras</span></h2>
        <p class="text-left">
            Disfruta de ahorros en nuestros paquetes pre pagados de incidentes de soporte técnico.
        </p>
      </header>
      <div class="container">
        <div class="col-md-12">
            <table class="table table-striped table-bordered" style="background-color: #fff">
                <tr>
                    <td scope="col">5 PACK</td>
                    <td>$ 558.00</td>
                    <td>-7 %</td>
                </tr>
                <tr>
                    <td scope="col">10 PAQUETE</td>
                    <td>$ 540.00</td>
                    <td>– 10 %</td>
                </tr>
                <tr>
                    <td scope="col">15 PACK</td>
                    <td>$ 522.00</td>
                    <td>– 13 %</td>
                </tr>
                <tr>
                    <td scope="col">20 PACK</td>
                    <td>$ 504.00</td>
                    <td>– 16 %</td>
                </tr>
            </table>
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
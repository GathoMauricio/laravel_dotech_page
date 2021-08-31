@extends(Route::currentRouteName().'.layout.app')
   
    <section id="about" class="light">
      <header class="title">
        <h2>NATIONAL TECHNICAL SUPPORT <span>ON SITE AND REMOTE</span></h2>
        <p class="text-left">
            Our Technical Support Service assists the users of your company in problems that arise with their PCs, laptops, mobile devices, servers, printers, software applications and network connections.
            <br/>
            We promote efficiency in work tools regardless of whether your collaborators are in the same building, geographically dispersed, or constantly traveling. Everyone has software, hardware, and networking needs.
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
                  <h4>Service with no hidden costs</h4>
                  <p>
                     Our visit service includes all the necessary services to leave your equipment working in optimal conditions
                     for only $ 599.00 MXN, such as operating system repair, software reinstallation, formatting, etc. Includes information backup indicated by the
                     maximum user 5GB, the service is not closed until the customer is fully satisfied, and if it is not resolved in the first
                     visit we return to solve it without any extra cost.
                  </p>
                </div>
              </div>

              <div class="about-content left animated" data-animate="fadeInLeft">
                <div class="about-icon"><i class="fa fa-desktop"></i></div>
                <div class="about-detail">
                  <h4>Do you need someone to take charge of your IT area?</h4>
                  <p>
                    Support, emails, website, inventories, etc. With our <strong>IGUALA</strong> service you make a monthly payment and you are covered in ALL your TECHNOLOGY needs.
                  </p>
                </div>
              </div>

              <div class="about-content left animated" data-animate="fadeInLeft">
                <div class="about-icon"><i class="fa fa-desktop"></i></div>
                <div class="about-detail">
                  <h4>Site Service Engineer</h4>
                    <p> 
                        Avoid the social burden <strong> DEDUCE IT </strong> You will also have a whole team of engineers behind it to solve any eventuality !!
                        <br/>
                        <small>*It is priced according to the client's needs and the requested profile.</small>
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
        <h2> Visit Package <span> You call us whenever and however you want </span> </h2>
        <p class="text-left">
            Enjoy savings on our prepaid technical support incident packages.
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
@extends(Route::currentRouteName().'.layout.app')
@include(Route::currentRouteName().'.layout.link_nav')

<section id="about" class="light">
      <header class="title">
        <h2> Hardware of <span> Point of Sale </span> </h2>
        <p class="text-left">
             Do you need a point of sale or do you require a change of equipment?
             With DOTECH we have several points of sale that will make you
             more practical and simple jobs. We offer a wide portfolio of services,
             experience also allows us to work in many areas while continuing to deepen and
             specialize in them: IT Management, Specialized Technical Support, POS, Networks,
             Cloud, Voice and IT Consulting.
        </p>
      </header>

    <div class="container">
        <div class="row table-row">
          <div class="col-sm-6 hidden-xs">
            <div class="section-content">
              <div class="big-image p-1" style="background-image:url({{ asset('images/tcpos1.png') }})"></div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="section-content">
              <div class="about-content left animated" data-animate="fadeInLeft">
                <div class="about-detail">
                  <h4> WE DESIGN THE FUTURE </h4>
                  <p>
                    Our company is associated with Cewoo and Partnertech Corp
                    are leading companies in the development and production of
                    PC based point of sale, world class peripherals,
                    Thermal and dot matrix printers, Mobile printers,
                    Point of sale tablets. Always offering products from
                    avant-garde for all types of environments.
                    <br/>
                    Whether compact all-in-one systems or terminals
                    of mobile ordering: the innovative products of these
                    two company are used all over the world with clients
                    leaders of retail, hospitality and specialty stores.
                    <br/>
                    <br/>
                    The perfect choice for businesses in the Hospitality and Retail industry.
                    All in One solutions.
                    <br/> <br/>
                    Mobile Solutions.
                    <br/> <br/>
                    Peripherals (Printers, scanners, drawers, etc).
                  </p>
                </div>
              </div>
        </div>
    </div>
</section>


<!-- PRODUCTOS -->

    <section id="portfolio" class="light">
    <!--
      <header class="title">
        <h2>Proyectos</h2>
        <p>Algunos de nuestros Proyectos...</p>
      </header>
        -->
      <div class="container-fluid">
        <div class="row">
          <ul id="filters" class="list-inline">
            <li id ="link_products" data-filter=".products" class="filter"><h3>Our products</h3></li> 
            <li data-filter=".partner" class="filter"><h3>Our providers</h3></li> 
          </ul>
        </div>

        <div class="row">
          <div class="container-portfolio">
            <!-- PORTFOLIO OBJECT -->
            <script type="text/javascript">
            var portfolio = [
                    {
                      category : "products",
                      image : "{{ asset('images/producto1.png') }}",
                      title : "<h5>Quiosco</h5>",
                      link : "#",
                      text : ""
                    },{
                      category : "products",
                      image : "{{ asset('images/producto2.png') }}",
                      title : "<h5>Mobil POS</h5>",
                      link : "#",
                      text : ""
                    },{
                      category : "products",
                      image : "{{ asset('images/producto3.png') }}",
                      title : "<h5> IoT I / O</h5>",
                      link : "#",
                      text : ""
                    },{
                      category : "products",
                      image : "{{ asset('images/producto4.png') }}",
                      title : "<h5>Lot display </h5>",
                      link : "#",
                      text : ""
                    },{
                      category : "products",
                      image : "{{ asset('images/producto5.png') }}",
                      title : "<h5>Desktop POS     </h5>",
                      link : "#",
                      text : ""
                    },{
                      category : "products",
                      image : "{{ asset('images/producto6.png') }}",
                      title : "<h5>POS transformer  </h5>",
                      link : "#",
                      text : ""
                    },
                    {
                      category : "partner",
                      image : "{{ asset('images/partner1.jpg') }}",
                      title : "<h5>Partner Tech CorpPOS</h5>",
                      link : "#",
                      text : "One of the leading companies in the development and production of PC-based point of sale systems and their peripherals."
                    },{
                      category : "partner",
                      image : "{{ asset('images/partner2.png') }}",
                      title : "<h5>SEWOO</h5>",
                      link : "#",
                      text : "Global leading company in printing solutions, always providing our customers with the best products."
                    },
                    
                ];
            </script>
          </div>
        </div>
      </div>
    </section>
    <script>
        $(document).on('ready',function(){
            setTimeout(function(){
                $("#link_products").click();
            },1000);
        });
    </script>
    <!--END PROYECTOS -->

@section('header',view(Route::currentRouteName().'.sections.header'))
@section('servicios',view(Route::currentRouteName().'.sections.servicios'))

@section('clientes',view(Route::currentRouteName().'.sections.clientes'))

@section('contacto',view(Route::currentRouteName().'.sections.contacto'))
@section('mapa',view(Route::currentRouteName().'.sections.mapa'))

<style>
#header,#team,#info{
    display:none;
}
</style>

@section('footer',view(Route::currentRouteName().'.sections.footer'))
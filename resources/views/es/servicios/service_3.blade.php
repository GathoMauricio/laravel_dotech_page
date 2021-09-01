@extends(Route::currentRouteName().'.layout.app')

<section id="about" class="light">
      <header class="title">
        <h2>Hardware de <span>Punto de Venta</span></h2>
        <p class="text-left">
            ¿Necesitas un punto de venta o requieres un cambio de equipo? 
            con DOTECH contamos con diversos punto de venta que le harán los 
            trabajos mas prácticos y sencillos. Ofrecemos un amplio portafolio de servicios, 
            la experiencia nos permite también trabajar en muchos ámbitos sin dejar de profundizar y 
            especializarnos en  ellos:  IT Management, Soporte Técnico Especializado, POS, Networks, 
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
                  <h4>DISEÑAMOS EL FUTURO</h4>
                  <p>
                    Nuestra empresa esta asociada con Cewoo y Partnertech Corp  
                    son  empresas líderes en desarrollo y producción de sistemas de
                    punto de venta basados ​​en PC, periféricos de calidad mundial, 
                    Impresoras térmicas y matriciales, Impresoras móviles, 
                    Tabletas de punto de venta. Siempre ofreciendo  productos de 
                    vanguardia para todo tipo de entornos. 
                    <br/>
                    Ya sean sistemas compactos todo en uno o terminales 
                    de pedidos móviles: los productos innovadores de estas 
                    dos empresa se utilizan en todo el mundo con clientes 
                    líderes de tiendas minoristas, hotelería y  tiendas especializadas.
                    <br/>
                    <br/>
                    La opción perfecta para negocios en la industria de la Hospitalidad y Retail.
                    Soluciones All in One.
                    <br/><br/>
                    Soluciones Móviles.
                    <br/><br/>
                    Periféricos (Impresoras, escanners, gavetas, etc).
                  </p>
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
            <li id ="link_products" data-filter=".products" class="filter"><h3>Nuestros productos</h3></li> 
            <li data-filter=".partner" class="filter"><h3>Nuestros proveedores</h3></li> 
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
                      title : "<h5>POS móvil  </h5>",
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
                      title : "<h5>Pantalla Lot </h5>",
                      link : "#",
                      text : ""
                    },{
                      category : "products",
                      image : "{{ asset('images/producto5.png') }}",
                      title : "<h5>POS de escritorio </h5>",
                      link : "#",
                      text : ""
                    },{
                      category : "products",
                      image : "{{ asset('images/producto6.png') }}",
                      title : "<h5>Transformador POS</h5>",
                      link : "#",
                      text : ""
                    },
                    {
                      category : "partner",
                      image : "{{ asset('images/partner1.jpg') }}",
                      title : "<h5>Partner Tech CorpPOS</h5>",
                      link : "#",
                      text : "Una de las empresas líderes en desarrollo y produción en sistemas de punto de venta basados en PC y sus periféricos."
                    },{
                      category : "partner",
                      image : "{{ asset('images/partner2.png') }}",
                      title : "<h5>SEWOO</h5>",
                      link : "#",
                      text : "Empresa lider global en soluciones de impresión, siempre brindando a nuestros clientes los mejores productos."
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
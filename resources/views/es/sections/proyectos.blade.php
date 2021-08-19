<!-- PROYECTOS -->

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
            <!--<li data-filter="all" class="filter"><h3>Todo</h3></li>-->
            <li id ="link_proyectos" data-filter=".proyectos" class="filter"><h3>Proyectos</h3></li> 
            <li id = "link_exitos" data-filter=".exitos" class="filter"><h3>Casos de éxito</h3></li> 
            <!--
            <li data-filter=".graphic" class="filter">Graphic</li> 
            <li data-filter=".printing" class="filter">Printing</li> 
            <li data-filter=".video" class="filter">Video</li> 
            -->
          </ul>
        </div>

        <div class="row">
          <div class="container-portfolio">
            <!-- PORTFOLIO OBJECT -->
            <script type="text/javascript">
            var portfolio = [
                    {
                      category : "proyectos",
                      image : "{{ asset('images/proyecto1.jpg') }}",
                      title : "<h5>Equipamiento de dos carriles en caseta de peaje Saltillo-Monterrey</h5>",
                      link : "#",
                      text : ""
                    },
                    {
                      category : "proyectos",
                      image : "{{ asset('images/proyecto2.png') }}",
                      title : "<h5>Proyecto Portico Aforador Autopista Lecheria Chamapa</h5>",
                      link : "#",
                      text : "Proyecto: instalación de armarios exteriores en Pórtico."
                    },
                    {
                      category : "proyectos",
                      image : "{{ asset('images/proyecto3.jpg') }}",
                      title : "<h5>Pizza danny’s sucursal Monclova</h5>",
                      link : "#",
                      text : "En DOTECH contamos con diversos punto de venta que le harán los trabajos mas prácticos y sencillos."
                    },
                    {
                      category : "proyectos",
                      image : "{{ asset('images/proyecto4.jpg') }}",
                      title : "<h5>Macro Libramiento Guadalajara.</h5>",
                      link : "#",
                      text : "Vialidad que genera un paso vehicular de 111 kilómetros desde Zapotlanejo hasta Ameca, evitando el tránsito de la zona metropolitana de Guadalajara."
                    },
                    {
                      category : "proyectos",
                      image : "{{ asset('images/proyecto5.jpeg') }}",
                      title : "<h5>Autopista Guadalajara Tepic.</h5>",
                      link : "#",
                      text : "Está ubicada en los Estados de Jalisco y Nayarit, forma parte del Eje Carretero del Pacífico."
                    },
                    {
                      category : "proyectos",
                      image : "{{ asset('images/proyecto6.jpg') }}",
                      title : "<h5>Papa Johns Renvacion de cableado</h5>",
                      link : "#",
                      text : "Proyecto: Renovacion de Cableado estructurado a 29 Tiendas Papa Johns (250 Nodos)"
                    },
                    {
                      category : "proyectos",
                      image : "{{ asset('images/proyecto7.png') }}",
                      title : "<h5>Silvaform</h5>",
                      link : "#",
                      text : "Proyecto: Diseño Suministro e Instalación de Red de Voz y Datos CERTIFICADA BELDEN"
                    },
                    {
                      category : "proyectos",
                      image : "{{ asset('images/proyecto8.jpg') }}",
                      title : "<h5>Papa Johns Lindavista</h5>",
                      link : "#",
                      text : "Proyecto: Diseño y puesta a punto de Instalaciones especiales y Tecnologia"
                    },
                    {
                      category : "proyectos",
                      image : "{{ asset('images/proyecto9.jpeg') }}",
                      title : "<h5>Panel Mensaje Variable Tepic</h5>",
                      link : "#",
                      text : "Proyecto: Instalación y puesta a punto de panel de mensaje Variable cimentación e instalación de 108 postes para cámaras de vídeo vigilancia."
                    },
                    {
                      category : "proyectos",
                      image : "{{ asset('images/proyecto10.jpg') }}",
                      title : "<h5>Video Wall Tienda Real Madrid Polanco</h5>",
                      link : "#",
                      text : "Proyecto: Soporte a la Configuración desde España para Video Wall Tienda Real Madrid."
                    },
                    {
                      category : "proyectos",
                      image : "{{ asset('images/proyecto11.jpg') }}",
                      title : "<h5>Sistema Contra Incendios Starbucks Plaza Delta</h5>",
                      link : "#",
                      text : "Proyecto: Suministro e Instalacion de Equipo Edwards Vigilant contra incendios"
                    },
                    {
                      category : "proyectos",
                      image : "{{ asset('images/proyecto12.jpg') }}",
                      title : "<h5>Sin Cola 5LA Movistar Nacional.</h5>",
                      link : "#",
                      text : "Proyecto: Instalación de Aplicativo 5LA en puntos de venta Movistar"
                    },
                    {
                      category : "proyectos",
                      image : "{{ asset('images/proyecto13.jpg') }}",
                      title : "<h5>UNIDAD MEDICA FAMILIAR 17 IMSS MAGDALENA APASCO OAXACA</h5>",
                      link : "#",
                      text : "Proyecto: Instalaciones Especiales a UMF 56 San Pablo Huitzo Oaxaca"
                    },
                    {
                      category : "proyectos",
                      image : "{{ asset('images/proyecto14.jpg') }}",
                      title : "<h5>Unidad Medica Familiar 56 IMSS Huitzo Oaxaca</h5>",
                      link : "#",
                      text : "Proyecto: Instalaciones Especiales a UMF 56 San Pablo Huitzo Oaxaca"
                    },
                    {
                      category : "proyectos",
                      image : "{{ asset('images/proyecto15.jpg') }}",
                      title : "<h5>Estadio Alebrijes de Oaxaca</h5>",
                      link : "#",
                      text : "Proyecto: Diseño Proyecto Ejecutivo instalaciones especiales estadio de Alebrijes Oaxaca"
                    },{
                      category : "proyectos",
                      image : "{{ asset('images/proyecto16.jpg') }}",
                      title : "<h5>Instalación Readers Monterrey-Saltillo</h5>",
                      link : "#",
                      text : "Proyecto: Instalacions de ITS en el tramo Monterrey Saltillo"
                    }

                    ,{
                      category : "exitos",
                      image : "{{ asset('images/exitos1.png') }}",
                      title : "",
                      link : "#",
                      text : ""
                    },
                    {
                      category : "exitos",
                      image : "{{ asset('images/exitos2.png') }}",
                      title : "",
                      link : "#",
                      text : ""
                    },
                    {
                      category : "exitos",
                      image : "{{ asset('images/exitos3.png') }}",
                      title : "",
                      link : "#",
                      text : ""
                    },
                    {
                      category : "exitos",
                      image : "{{ asset('images/exitos4.png') }}",
                      title : "",
                      link : "#",
                      text : ""
                    },
                    {
                      category : "exitos",
                      image : "{{ asset('images/exitos5.png') }}",
                      title : "",
                      link : "#",
                      text : ""
                    },
                    {
                      category : "exitos",
                      image : "{{ asset('images/exitos6.png') }}",
                      title : "",
                      link : "#",
                      text : ""
                    }
                ];
            </script>
          </div>
        </div>
      </div>
    </section>
    <script>
        $(document).on('ready',function(){
            setTimeout(function(){
                $("#link_proyectos").click();
            },1000);
        });
    </script>
    <!--END PROYECTOS -->
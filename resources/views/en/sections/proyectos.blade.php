<!-- PROYECTOS -->

    <section id="portfolio" class="light">
    <!--
      <header class="title">
        <h2></h2>
        <p></p>
      </header>
        -->
      <div class="container-fluid">
        <div class="row">
          <ul id="filters" class="list-inline">
            <!--<li data-filter="all" class="filter"><h3>Todo</h3></li>-->
            <li id ="link_proyectos" data-filter=".proyectos" class="filter"><h3>Projects</h3></li> 
            <li id = "link_exitos" data-filter=".exitos" class="filter"><h3>Success cases</h3></li> 
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
                      title : "<h5>Equipment of two lanes in the Saltillo-Monterrey toll booth</h5>",
                      link : "#",
                      text : ""
                    },
                    {
                      category : "proyectos",
                      image : "{{ asset('images/proyecto2.png') }}",
                      title : "<h5>Portico Aforador Project Lecheria Chamapa Highway</h5>",
                      link : "#",
                      text : "Project: installation of exterior cabinets in Portico."
                    },
                    {
                      category : "proyectos",
                      image : "{{ asset('images/proyecto3.jpg') }}",
                      title : "<h5>Pizza danny’s Monclova branch</h5>",
                      link : "#",
                      text : "At DOTECH we have several points of sale that will make the work more practical and simple."
                    },
                    {
                      category : "proyectos",
                      image : "{{ asset('images/proyecto4.jpg') }}",
                      title : "<h5>Macro Bypass Guadalajara.</h5>",
                      link : "#",
                      text : "Roadway that generates a vehicle passage of 111 kilometers from Zapotlanejo to Ameca, avoiding the traffic of the metropolitan area of Guadalajara."
                    },
                    {
                      category : "proyectos",
                      image : "{{ asset('images/proyecto5.jpeg') }}",
                      title : "<h5>Guadalajara Tepic Highway.</h5>",
                      link : "#",
                      text : "It is located in the States of Jalisco and Nayarit, it is part of the Pacific Highway Axis."
                    },
                    {
                      category : "proyectos",
                      image : "{{ asset('images/proyecto6.jpg') }}",
                      title : "<h5>Papa Johns Wiring Renovation</h5>",
                      link : "#",
                      text : "Project: Renovation of structured cabling to 29 Papa Johns Stores (250 Nodes)"
                    },
                    {
                      category : "proyectos",
                      image : "{{ asset('images/proyecto7.png') }}",
                      title : "<h5>Silvaform</h5>",
                      link : "#",
                      text : "Project: Design, Supply and Installation of the BELDEN CERTIFIED Voice and Data Network"
                    },
                    {
                      category : "proyectos",
                      image : "{{ asset('images/proyecto8.jpg') }}",
                      title : "<h5>Papa Johns Lindavista</h5>",
                      link : "#",
                      text : "Project: Design and development of special facilities and technology"
                    },
                    {
                      category : "proyectos",
                      image : "{{ asset('images/proyecto9.jpeg') }}",
                      title : "<h5>Variable Message Panel Tepic</h5>",
                      link : "#",
                      text : "Project: Installation and tuning of the variable message panel, foundation and installation of 108 poles for video surveillance cameras."
                    },
                    {
                      category : "proyectos",
                      image : "{{ asset('images/proyecto10.jpg') }}",
                      title : "<h5>Video Wall Tienda Real Madrid Polanco</h5>",
                      link : "#",
                      text : "Project: Configuration Support from Spain for Real Madrid Store Video Wall."
                    },
                    {
                      category : "proyectos",
                      image : "{{ asset('images/proyecto11.jpg') }}",
                      title : "<h5>Starbucks Plaza Delta Fire System</h5>",
                      link : "#",
                      text : "Project: Supply and Installation of Edwards Vigilant Fire Fighting Equipment"
                    },
                    {
                      category : "proyectos",
                      image : "{{ asset('images/proyecto12.jpg') }}",
                      title : "<h5>Sin Cola 5LA National Movistar.</h5>",
                      link : "#",
                      text : "Project: Installation of the 5LA Application in Movistar points of sale"
                    },
                    {
                      category : "proyectos",
                      image : "{{ asset('images/proyecto13.jpg') }}",
                      title : "<h5>FAMILY MEDICAL UNIT 17 IMSS MAGDALENA APASCO OAXACA/h5>",
                      link : "#",
                      text : "Project: Special Installations at UMF 56 San Pablo Huitzo Oaxaca"
                    },
                    {
                      category : "proyectos",
                      image : "{{ asset('images/proyecto14.jpg') }}",
                      title : "<h5>Family Medical Unit 56 IMSS Huitzo Oaxaca</h5>",
                      link : "#",
                      text : "Project: Special Installations at UMF 56 San Pablo Huitzo Oaxaca"
                    },
                    {
                      category : "proyectos",
                      image : "{{ asset('images/proyecto15.jpg') }}",
                      title : "<h5>Alebrijes Stadium of Oaxaca</h5>",
                      link : "#",
                      text : "Project: Design Executive Project for special facilities Alebrijes Stadium Oaxaca"
                    },{
                      category : "proyectos",
                      image : "{{ asset('images/proyecto16.jpg') }}",
                      title : "<h5>Readers Instalation Monterrey-Saltillo Highway</h5>",
                      link : "#",
                      text : "Project: ITS facilities in the Monterrey Saltillo section"
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
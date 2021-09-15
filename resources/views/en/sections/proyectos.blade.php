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
                      image : "{{ asset('images/proyecto2.png') }}",
                      title : "<h5>Portico Aforador Project Lecheria Chamapa Highway</h5>",
                      link : "{{ route('en','project_1') }}",
                      text : "Project: installation of exterior cabinets in Portico.",
                      onclick : "console.log(1)"
                    },
                    {
                      category : "proyectos",
                      image : "{{ asset('images/proyecto3.jpg') }}",
                      title : "<h5>Pizza danny’s Monclova branch</h5>",
                      link : "{{ route('en','project_2') }}",
                      text : "At DOTECH we have several points of sale that will make the work more practical and simple.",
                      onclick : "console.log(2)"
                    },
                    {
                      category : "proyectos",
                      image : "{{ asset('images/proyecto4.jpg') }}",
                      title : "<h5>Macro Bypass Guadalajara.</h5>",
                      link : "{{ route('en','project_3') }}",
                      text : "Roadway that generates a vehicle passage of 111 kilometers from Zapotlanejo to Ameca, avoiding the traffic of the metropolitan area of Guadalajara.",
                      onclick : "console.log(3)"
                    },
                    {
                      category : "proyectos",
                      image : "{{ asset('images/proyecto5.jpeg') }}",
                      title : "<h5>Guadalajara Tepic Highway.</h5>",
                      link : "{{ route('en','project_4') }}",
                      text : "It is located in the States of Jalisco and Nayarit, it is part of the Pacific Highway Axis.",
                      onclick : "console.log(4)"
                    },
                    {
                      category : "proyectos",
                      image : "{{ asset('images/proyecto6.jpg') }}",
                      title : "<h5>Papa Johns Wiring Renovation</h5>",
                      link : "{{ route('en','project_5') }}",
                      text : "Project: Renovation of structured cabling to 29 Papa Johns Stores (250 Nodes)",
                      onclick : "console.log(5)"
                    },
                    {
                      category : "proyectos",
                      image : "{{ asset('images/proyecto7.png') }}",
                      title : "<h5>Silvaform</h5>",
                      link : "{{ route('en','project_6') }}",
                      text : "Project: Design, Supply and Installation of the BELDEN CERTIFIED Voice and Data Network",
                      onclick : "console.log(6)"
                    },
                    {
                      category : "proyectos",
                      image : "{{ asset('images/proyecto8.jpg') }}",
                      title : "<h5>Papa Johns Lindavista</h5>",
                      link : "{{ route('en','project_7') }}",
                      text : "Project: Design and development of special facilities and technology",
                      onclick : "console.log(7)"
                    },
                    {
                      category : "proyectos",
                      image : "{{ asset('images/proyecto9.jpeg') }}",
                      title : "<h5>Variable Message Panel Tepic</h5>",
                      link : "{{ route('en','project_8') }}",
                      text : "Project: Installation and tuning of the variable message panel, foundation and installation of 108 poles for video surveillance cameras.",
                      onclick : "console.log(8)"
                    },
                    {
                      category : "proyectos",
                      image : "{{ asset('images/proyecto10.jpg') }}",
                      title : "<h5>Video Wall Tienda Real Madrid Polanco</h5>",
                      link : "{{ route('en','project_9') }}",
                      text : "Project: Configuration Support from Spain for Real Madrid Store Video Wall.",
                      onclick : "console.log(9)"
                    },
                    {
                      category : "proyectos",
                      image : "{{ asset('images/proyecto11.jpg') }}",
                      title : "<h5>Starbucks Plaza Delta Fire System</h5>",
                      link : "{{ route('en','project_10') }}",
                      text : "Project: Supply and Installation of Edwards Vigilant Fire Fighting Equipment",
                      onclick : "console.log(10)"
                    },
                    {
                      category : "proyectos",
                      image : "{{ asset('images/proyecto12.jpg') }}",
                      title : "<h5>Sin Cola 5LA National Movistar.</h5>",
                      link : "{{ route('en','project_11') }}",
                      text : "Project: Installation of the 5LA Application in Movistar points of sale",
                      onclick : "console.log(11)"
                    },
                    {
                      category : "proyectos",
                      image : "{{ asset('images/proyecto13.jpg') }}",
                      title : "<h5>FAMILY MEDICAL UNIT 17 IMSS MAGDALENA APASCO OAXACA/h5>",
                      link : "{{ route('en','project_12') }}",
                      text : "Project: Special Installations at UMF 56 San Pablo Huitzo Oaxaca",
                      onclick : "console.log(12)"
                    },
                    {
                      category : "proyectos",
                      image : "{{ asset('images/proyecto14.jpg') }}",
                      title : "<h5>Family Medical Unit 56 IMSS Huitzo Oaxaca</h5>",
                      link : "{{ route('en','project_13') }}",
                      text : "Project: Special Installations at UMF 56 San Pablo Huitzo Oaxaca",
                      onclick : "console.log(13)"
                    },
                    {
                      category : "proyectos",
                      image : "{{ asset('images/proyecto15.jpg') }}",
                      title : "<h5>Alebrijes Stadium of Oaxaca</h5>",
                      link : "{{ route('en','project_14') }}",
                      text : "Project: Design Executive Project for special facilities Alebrijes Stadium Oaxaca",
                      onclick : "console.log(14)"
                    },{
                      category : "proyectos",
                      image : "{{ asset('images/proyecto16.jpg') }}",
                      title : "<h5>Readers Instalation Monterrey-Saltillo Highway</h5>",
                      link : "{{ route('en','project_15') }}",
                      text : "Project: ITS facilities in the Monterrey Saltillo section",
                      onclick : "console.log(15)"
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
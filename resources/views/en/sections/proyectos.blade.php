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
            <!--<li id = "link_exitos" data-filter=".exitos" class="filter"><h3>Success cases</h3></li> -->
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
                      link : "javascript:void(0)",
                      text : "Project: installation of exterior cabinets in Portico.",
                      onclick : "swiper(1);"
                    },
                    {
                      category : "proyectos",
                      image : "{{ asset('images/proyecto3.jpg') }}",
                      title : "<h5>Pizza danny’s Monclova branch</h5>",
                      link : "javascript:void(0)",
                      text : "At DOTECH we have several points of sale that will make the work more practical and simple.",
                      onclick : "swiper(2);"
                    },
                    {
                      category : "proyectos",
                      image : "{{ asset('images/proyecto4.jpg') }}",
                      title : "<h5>Macro Bypass Guadalajara.</h5>",
                      link : "javascript:void(0)",
                      text : "Roadway that generates a vehicle passage of 111 kilometers from Zapotlanejo to Ameca, avoiding the traffic of the metropolitan area of Guadalajara.",
                      onclick : "swiper(3);"
                    },
                    {
                      category : "proyectos",
                      image : "{{ asset('images/proyecto5.jpeg') }}",
                      title : "<h5>Guadalajara Tepic Highway.</h5>",
                      link : "javascript:void(0)",
                      text : "It is located in the States of Jalisco and Nayarit, it is part of the Pacific Highway Axis.",
                      onclick : "swiper(4);"
                    },
                    {
                      category : "proyectos",
                      image : "{{ asset('images/proyecto6.jpg') }}",
                      title : "<h5>Papa Johns Wiring Renovation</h5>",
                      link : "javascript:void(0)",
                      text : "Project: Renovation of structured cabling to 29 Papa Johns Stores (250 Nodes)",
                      onclick : "swiper(5)"
                    },
                    {
                      category : "proyectos",
                      image : "{{ asset('images/proyecto7.png') }}",
                      title : "<h5>Silvaform</h5>",
                      link : "javascript:void(0)",
                      text : "Project: Design, Supply and Installation of the BELDEN CERTIFIED Voice and Data Network",
                      onclick : "swiper(6)"
                    },
                    {
                      category : "proyectos",
                      image : "{{ asset('images/proyecto8.jpg') }}",
                      title : "<h5>Papa Johns Lindavista</h5>",
                      link : "javascript:void(0)",
                      text : "Project: Design and development of special facilities and technology",
                      onclick : "swiper(7)"
                    },
                    {
                      category : "proyectos",
                      image : "{{ asset('images/proyecto9.jpeg') }}",
                      title : "<h5>Variable Message Panel Tepic</h5>",
                      link : "javascript:void(0)",
                      text : "Project: Installation and tuning of the variable message panel, foundation and installation of 108 poles for video surveillance cameras.",
                      onclick : "swiper(8)"
                    },
                    {
                      category : "proyectos",
                      image : "{{ asset('images/proyecto10.jpg') }}",
                      title : "<h5>Video Wall Tienda Real Madrid Polanco</h5>",
                      link : "javascript:void(0)",
                      text : "Project: Configuration Support from Spain for Real Madrid Store Video Wall.",
                      onclick : "swiper(9)"
                    },
                    {
                      category : "proyectos",
                      image : "{{ asset('images/proyecto11.jpg') }}",
                      title : "<h5>Starbucks Plaza Delta Fire System</h5>",
                      link : "javascript:void(0)",
                      text : "Project: Supply and Installation of Edwards Vigilant Fire Fighting Equipment",
                      onclick : "swiper(10)"
                    },
                    {
                      category : "proyectos",
                      image : "{{ asset('images/proyecto12.jpg') }}",
                      title : "<h5>Sin Cola 5LA National Movistar.</h5>",
                      link : "javascript:void(0)",
                      text : "Project: Installation of the 5LA Application in Movistar points of sale",
                      onclick : "swiper(11)"
                    },
                    {
                      category : "proyectos",
                      image : "{{ asset('images/proyecto13.jpg') }}",
                      title : "<h5>FAMILY MEDICAL UNIT 17 IMSS MAGDALENA APASCO OAXACA/h5>",
                      link : "javascript:void(0)",
                      text : "Project: Special Installations at UMF 56 San Pablo Huitzo Oaxaca",
                      onclick : "swiper(12)"
                    },
                    {
                      category : "proyectos",
                      image : "{{ asset('images/proyecto14.jpg') }}",
                      title : "<h5>Family Medical Unit 56 IMSS Huitzo Oaxaca</h5>",
                      link : "javascript:void(0)",
                      text : "Project: Special Installations at UMF 56 San Pablo Huitzo Oaxaca",
                      onclick : "swiper(13)"
                    },
                    {
                      category : "proyectos",
                      image : "{{ asset('images/proyecto15.jpg') }}",
                      title : "<h5>Alebrijes Stadium of Oaxaca</h5>",
                      link : "javascript:void(0)",
                      text : "Project: Design Executive Project for special facilities Alebrijes Stadium Oaxaca",
                      onclick : "swiper(14)"
                    },{
                      category : "proyectos",
                      image : "{{ asset('images/proyecto16.jpg') }}",
                      title : "<h5>Readers Instalation Monterrey-Saltillo Highway</h5>",
                      link : "javascript:void(0)",
                      text : "Project: ITS facilities in the Monterrey Saltillo section",
                      onclick : "swiper(15)"
                    }
                    /*
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
                    */
                ];
            </script>
          </div>
        </div>
      </div>
    </section>

    @for($i = 1; $i <= 15; $i++)
    @include('en.modals.project_'.$i)
    @endfor
  
  
  
  
  
    <style>
      .swiper {
        width: 100%;
        height: 80vh;
      }
      .modal-full{
        position: fixed;
        left: 0;
        top: 0;
        width: 100%;
        height: 100vh;
        background-color:black;
        z-index: 99999;
        padding: 20px;
        display:none;
      }
      .modal-full-content{
        padding: 20px;
        border-radius:5px;
        background-color:white;
        width: 100%;
        height: 100%;
      }
      </style>
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script>
        $(document).on('ready',function(){
            setTimeout(function(){
                $("#link_proyectos").click();
                
                $(".portfolio-view").hover(function(){
                  switch($(this).children('img').prop('src'))
                  {
                    case '{{ asset('images/proyecto2.png') }}': 
                      $(this).children('img').prop('src','{{ asset('gallery/img/proyecto_1/proy_1.gif') }}');
                    break;
                    case '{{ asset('images/proyecto3.jpg') }}': 
                      $(this).children('img').prop('src','{{ asset('gallery/img/proyecto_2/proy_2.gif') }}');
                    break;
                    case '{{ asset('images/proyecto4.jpg') }}': 
                      $(this).children('img').prop('src','{{ asset('gallery/img/proyecto_3/proy_3.gif') }}');
                    break;
                    case '{{ asset('images/proyecto5.jpeg') }}': 
                      $(this).children('img').prop('src','{{ asset('gallery/img/proyecto_4/proy_4.gif') }}');
                    break;
                    case '{{ asset('images/proyecto6.jpg') }}': 
                      $(this).children('img').prop('src','{{ asset('gallery/img/proyecto_5/proy_5.gif') }}');
                    break;
                    case '{{ asset('images/proyecto7.png') }}': 
                      $(this).children('img').prop('src','{{ asset('gallery/img/proyecto_6/proy_6.gif') }}');
                    break;
                    case '{{ asset('images/proyecto8.jpg') }}': 
                      $(this).children('img').prop('src','{{ asset('gallery/img/proyecto_7/proy_7.gif') }}');
                    break;
                    case '{{ asset('images/proyecto9.jpeg') }}': 
                      $(this).children('img').prop('src','{{ asset('gallery/img/proyecto_8/proy_8.gif') }}');
                    break;
                    case '{{ asset('images/proyecto10.jpg') }}': 
                      $(this).children('img').prop('src','{{ asset('gallery/img/proyecto_9/proy_9.gif') }}');
                    break;
                    case '{{ asset('images/proyecto11.jpg') }}': 
                      $(this).children('img').prop('src','{{ asset('gallery/img/proyecto_10/proy_10.gif') }}');
                    break;
                    case '{{ asset('images/proyecto12.jpg') }}': 
                      $(this).children('img').prop('src','{{ asset('gallery/img/proyecto_11/proy_11.gif') }}');
                    break;
                    case '{{ asset('images/proyecto13.jpg') }}': 
                      $(this).children('img').prop('src','{{ asset('gallery/img/proyecto_12/proy_12.gif') }}');
                    break;
                    case '{{ asset('images/proyecto14.jpg') }}': 
                      $(this).children('img').prop('src','{{ asset('gallery/img/proyecto_13/proy_13.gif') }}');
                    break;
                    case '{{ asset('images/proyecto15.jpg') }}': 
                      $(this).children('img').prop('src','{{ asset('gallery/img/proyecto_14/proy_14.gif') }}');
                    break;
                    case '{{ asset('images/proyecto16.jpg') }}': 
                      $(this).children('img').prop('src','{{ asset('gallery/img/proyecto_15/proy_15.gif') }}');
                    break;

                  }
                }, function(){
                    switch($(this).children('img').prop('src'))
                    {
                      case '{{ asset('gallery/img/proyecto_1/proy_1.gif') }}':
                        $(this).children('img').prop('src','{{ asset('images/proyecto2.png') }}');
                      break;
                      case '{{ asset('gallery/img/proyecto_2/proy_2.gif') }}':
                        $(this).children('img').prop('src','{{ asset('images/proyecto3.jpg') }}');
                      break;
                      case '{{ asset('gallery/img/proyecto_3/proy_3.gif') }}':
                        $(this).children('img').prop('src','{{ asset('images/proyecto4.jpg') }}');
                      break;
                      case '{{ asset('gallery/img/proyecto_4/proy_4.gif') }}':
                        $(this).children('img').prop('src','{{ asset('images/proyecto5.jpeg') }}');
                      break;
                      case '{{ asset('gallery/img/proyecto_5/proy_5.gif') }}':
                        $(this).children('img').prop('src','{{ asset('images/proyecto6.jpg') }}');
                      break;
                      case '{{ asset('gallery/img/proyecto_6/proy_6.gif') }}':
                        $(this).children('img').prop('src','{{ asset('images/proyecto7.png') }}');
                      break;
                      case '{{ asset('gallery/img/proyecto_7/proy_7.gif') }}':
                        $(this).children('img').prop('src','{{ asset('images/proyecto8.jpg') }}');
                      break;
                      case '{{ asset('gallery/img/proyecto_8/proy_8.gif') }}':
                        $(this).children('img').prop('src','{{ asset('images/proyecto9.jpeg') }}');
                      break;
                      case '{{ asset('gallery/img/proyecto_9/proy_9.gif') }}':
                        $(this).children('img').prop('src','{{ asset('images/proyecto10.jpg') }}');
                      break;
                      case '{{ asset('gallery/img/proyecto_10/proy_10.gif') }}':
                        $(this).children('img').prop('src','{{ asset('images/proyecto11.jpg') }}');
                      break;
                      case '{{ asset('gallery/img/proyecto_11/proy_11.gif') }}':
                        $(this).children('img').prop('src','{{ asset('images/proyecto12.jpg') }}');
                      break;
                      case '{{ asset('gallery/img/proyecto_12/proy_12.gif') }}':
                        $(this).children('img').prop('src','{{ asset('images/proyecto13.jpg') }}');
                      break;
                      case '{{ asset('gallery/img/proyecto_13/proy_13.gif') }}':
                        $(this).children('img').prop('src','{{ asset('images/proyecto14.jpg') }}');
                      break;
                      case '{{ asset('gallery/img/proyecto_14/proy_14.gif') }}':
                        $(this).children('img').prop('src','{{ asset('images/proyecto15.jpg') }}');
                      break;
                      case '{{ asset('gallery/img/proyecto_15/proy_15.gif') }}':
                        $(this).children('img').prop('src','{{ asset('images/proyecto16.jpg') }}');
                      break;
                    }
                });
                
            },1000);
            var swiper = new Swiper(".mySwiperProyect", {
            spaceBetween: 30,
            effect: "fade",
            navigation: {
              nextEl: ".swiper-button-next",
              prevEl: ".swiper-button-prev",
            },
            pagination: {
              el: ".swiper-pagination",
              clickable: true,
            },
            autoplay: true,
            speed:1000
          });
        });

        /*
        function swiper(id){
          $('#modal_full_'+id).css('display','block');
        }
        */
    </script>
    <!--END PROYECTOS -->
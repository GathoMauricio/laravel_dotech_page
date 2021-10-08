<!-- CLIENTES -->
    <section id="info" class="dark">
      <header class="title">
        <h2>Our <span>Clients</span></h2>
        <p>
          These are some of the companies and people who have left their projects in our hands.
        </p>
      </header>

      <div class="container">

        <div class="row">

          <div class="col-md-3">
            <!-- Swiper -->
            <div class="swiper mySwiperClients">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img src="{{ asset('gallery/img/clientes/ike.png') }}" width="100%" height="60%"/>
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('gallery/img/clientes/papa.png') }}" width="100%" height="60%"/>
                </div>
              </div>
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-md-3">
            <!-- Swiper -->
            <div class="swiper mySwiperClients">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img src="{{ asset('gallery/img/clientes/izzi.png') }}" width="100%" height="60%"/>
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('gallery/img/clientes/comercial_mexicana.png') }}" width="100%" height="60%"/>
                </div>
              </div>
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-md-3">
            <!-- Swiper -->
            <div class="swiper mySwiperClients">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img src="{{ asset('gallery/img/clientes/gnp.png') }}" width="100%" height="60%"/>
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('gallery/img/clientes/reforma.png') }}" width="100%" height="60%"/>
                </div>
              </div>
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-md-3">
            <!-- Swiper -->
            <div class="swiper mySwiperClients">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img src="{{ asset('gallery/img/clientes/diestro.png') }}" width="100%" height="60%"/>
                </div>
                <div class="swiper-slide">
                  <img src="{{ asset('gallery/img/clientes/movistar.png') }}" width="100%" height="60%"/>
                </div>
              </div>
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
              <div class="swiper-pagination"></div>
            </div>
          </div>


      </div><!--endrow-->
      <div class="row">

      <div class="col-md-3">
        <!-- Swiper -->
        <div class="swiper mySwiperClients">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img src="{{ asset('gallery/img/clientes/once_tv.png') }}" width="100%" height="60%"/>
            </div>
            <div class="swiper-slide">
              <img src="{{ asset('gallery/img/clientes/penafiel.png') }}" width="100%" height="60%"/>
            </div>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-pagination"></div>
        </div>
      </div>

      <div class="col-md-3">
        <!-- Swiper -->
        <div class="swiper mySwiperClients">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img src="{{ asset('gallery/img/clientes/imss.png') }}" width="100%" height="60%"/>
            </div>
            <div class="swiper-slide">
              <img src="{{ asset('gallery/img/clientes/3b.png') }}" width="100%" height="60%"/>
            </div>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-pagination"></div>
        </div>
      </div>

      <div class="col-md-3">
        <!-- Swiper -->
        <div class="swiper mySwiperClients">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img src="{{ asset('gallery/img/clientes/conuee.png') }}" width="100%" height="60%"/>
            </div>
            <div class="swiper-slide">
              <img src="{{ asset('gallery/img/clientes/lead_image.png') }}" width="100%" height="60%"/>
            </div>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-pagination"></div>
        </div>
      </div>

      <div class="col-md-3">
        <!-- Swiper -->
        <div class="swiper mySwiperClients">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img src="{{ asset('gallery/img/clientes/holiday_inn.png') }}" width="100%" height="60%"/>
            </div>
            <div class="swiper-slide">
              <img src="{{ asset('gallery/img/clientes/simex.png') }}" width="100%" height="60%"/>
            </div>
            <div class="swiper-slide">
              <img src="{{ asset('gallery/img/clientes/roche.png') }}" width="100%" height="60%"/>
            </div>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-pagination"></div>
        </div>
      </div>


  </div><!--endrow-->

    </div>
      
        <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
        <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
        <script>
          var swiper = new Swiper(".mySwiperClients", {
            spaceBetween: 30,
            effect: "cube",
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
        </script>


    </section>
<!--
    <div class="swiper mySwiperProyect">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="{{ asset('gallery/img/clientes/ike.png') }}" />
        </div>
        <div class="swiper-slide">
          <img src="{{ asset('gallery/img/clientes/papa.png') }}" />
        </div>
        <div class="swiper-slide">
          <img src="{{ asset('gallery/img/clientes/izzi.png') }}" />
        </div>
        <div class="swiper-slide">
          <img src="{{ asset('gallery/img/clientes/comercial_mexicana.png') }}" />
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  -->
    
    

    <section id="photostack-1" class="photostack" style ="display:none;">
      <div>
          <figure>
              <a href="{{ asset('gallery/img/clientes/ike.png') }}" class="photostack-img" target="_blank"><img src="{{ asset('gallery/img/clientes/ike.png') }}" alt="#"/></a>
              <figcaption>
                  <h2 class="photostack-title">
                    <span>iKé Asistencia.</span>
                    <br><br>
                    <a href ="https://www.facebook.com/Ik%C3%A9-Asistencia-121160507915673/" target="_blank" style="font-size:24px;"><span class="icon-facebook" style ="color:#3b5998;"></span></a>
                    <a href ="https://twitter.com/ike_asistencia" target="_blank" style="font-size:24px;"><span class="icon-twitter" style ="color:#00ACEE;"></span></a>
                    <a href ="https://es.pinterest.com/ikeasistencia/" target="_blank" style="font-size:24px;"><span class="icon-pinterest" style ="color:#C8232C;"></span></a>
                    <a href ="https://www.linkedin.com/company/ike-asistencia-argentina-sa" target="_blank" style="font-size:24px;"><span class="icon-linkedin" style ="color:#0072B1;"></span></a>
                  </h2>
                  <div class="photostack-back">
                      <p>Assistance Services and Integral Solutions.</p>
                  </div>
              </figcaption>
          </figure>

          <figure>
            <a href="{{ asset('gallery/img/clientes/papa.png') }}" class="photostack-img" target="_blank"><img src="{{ asset('gallery/img/clientes/papa.png') }}" alt="#"/></a>
            <figcaption>
                <h2 class="photostack-title">
                  <span>Papa John's Pizza</span>
                  <br><br>
                  <a href ="https://www.facebook.com/papajohnsmx" target="_blank" style="font-size:24px;"><span class="icon-facebook" style ="color:#3b5998;"></span></a>
                  <a href ="https://twitter.com/papajohnsmx" target="_blank" style="font-size:24px;"><span class="icon-twitter" style ="color:#00ACEE;"></span></a>
                  <a href ="https://www.instagram.com/papajohnsmx/" target="_blank" style="font-size:24px;"><span class="icon-instagram" style ="color: #C13584;"></span></a>
                </h2>
                <div class="photostack-back">
                    <p>Take-out and home delivery chain, the fourth largest in the United States.</p>
                </div>
            </figcaption>
          </figure>

          <figure>
            <a href="{{ asset('gallery/img/clientes/izzi.png') }}" class="photostack-img" target="_blank"><img src="{{ asset('gallery/img/clientes/izzi.png') }}" alt="#"/></a>
            <figcaption>
                <h2 class="photostack-title">
                  <span>IZZI Telecom</span>
                  <br><br>
                  <a href ="#" target="_blank" style="font-size:24px;"><span class="icon-facebook" style ="color:#3b5998;"></span></a>
                  <a href ="#" target="_blank" style="font-size:24px;"><span class="icon-twitter" style ="color:#00ACEE;"></span></a>
                  <a href ="#" target="_blank" style="font-size:24px;"><span class="icon-youtube" style ="color:#C4302B;"></span></a>
                  <a href ="#" target="_blank" style="font-size:24px;"><span class="icon-instagram" style ="color: #C13584;"></span></a>
                </h2>
                <div class="photostack-back">
                    <p>description</p>
                </div>
            </figcaption>
          </figure>
          
          <figure>
            <a href="{{ asset('gallery/img/clientes/comercial_mexicana.png') }}" class="photostack-img" target="_blank"><img src="{{ asset('gallery/img/clientes/comercial_mexicana.png') }}" alt="#"/></a>
            <figcaption>
                <h2 class="photostack-title">
                  <span>Comercial Mexicana</span>
                  <br><br>
                  <a href ="#" target="_blank" style="font-size:24px;"><span class="icon-facebook" style ="color:#3b5998;"></span></a>
                  <a href ="#" target="_blank" style="font-size:24px;"><span class="icon-twitter" style ="color:#00ACEE;"></span></a>
                  <a href ="#" target="_blank" style="font-size:24px;"><span class="icon-youtube" style ="color:#C4302B;"></span></a>
                  <a href ="#" target="_blank" style="font-size:24px;"><span class="icon-instagram" style ="color: #C13584;"></span></a>
                </h2>
                <div class="photostack-back">
                    <p>description</p>
                </div>
            </figcaption>
          </figure>
          
          <figure>
            <a href="{{ asset('gallery/img/clientes/gnp.png') }}" class="photostack-img" target="_blank"><img src="{{ asset('gallery/img/clientes/gnp.png') }}" alt="#"/></a>
            <figcaption>
                <h2 class="photostack-title">
                  <span>GNP Seguros</span>
                  <br><br>
                  <a href ="#" target="_blank" style="font-size:24px;"><span class="icon-facebook" style ="color:#3b5998;"></span></a>
                  <a href ="#" target="_blank" style="font-size:24px;"><span class="icon-twitter" style ="color:#00ACEE;"></span></a>
                  <a href ="#" target="_blank" style="font-size:24px;"><span class="icon-youtube" style ="color:#C4302B;"></span></a>
                  <a href ="#" target="_blank" style="font-size:24px;"><span class="icon-instagram" style ="color: #C13584;"></span></a>
                </h2>
                <div class="photostack-back">
                    <p>description</p>
                </div>
            </figcaption>
          </figure>
          
          <figure>
            <a href="{{ asset('gallery/img/clientes/reforma.png') }}" class="photostack-img" target="_blank"><img src="{{ asset('gallery/img/clientes/reforma.png') }}" alt="#"/></a>
            <figcaption>
                <h2 class="photostack-title">
                  <span>Grupo Reforma</span>
                  <br><br>
                  <a href ="#" target="_blank" style="font-size:24px;"><span class="icon-facebook" style ="color:#3b5998;"></span></a>
                  <a href ="#" target="_blank" style="font-size:24px;"><span class="icon-twitter" style ="color:#00ACEE;"></span></a>
                  <a href ="#" target="_blank" style="font-size:24px;"><span class="icon-youtube" style ="color:#C4302B;"></span></a>
                  <a href ="#" target="_blank" style="font-size:24px;"><span class="icon-instagram" style ="color: #C13584;"></span></a>
                </h2>
                <div class="photostack-back">
                    <p>description</p>
                </div>
            </figcaption>
          </figure>
          
          <figure>
            <a href="{{ asset('gallery/img/clientes/diestro.png') }}" class="photostack-img" target="_blank"><img src="{{ asset('gallery/img/clientes/diestro.png') }}" alt="#"/></a>
            <figcaption>
                <h2 class="photostack-title">
                  <span>DIESTRO</span>
                  <br><br>
                  <a href ="#" target="_blank" style="font-size:24px;"><span class="icon-facebook" style ="color:#3b5998;"></span></a>
                  <a href ="#" target="_blank" style="font-size:24px;"><span class="icon-twitter" style ="color:#00ACEE;"></span></a>
                  <a href ="#" target="_blank" style="font-size:24px;"><span class="icon-youtube" style ="color:#C4302B;"></span></a>
                  <a href ="#" target="_blank" style="font-size:24px;"><span class="icon-instagram" style ="color: #C13584;"></span></a>
                </h2>
                <div class="photostack-back">
                    <p>description</p>
                </div>
            </figcaption>
          </figure>
          
          <figure>
            <a href="{{ asset('gallery/img/clientes/movistar.png') }}" class="photostack-img" target="_blank"><img src="{{ asset('gallery/img/clientes/movistar.png') }}" alt="#"/></a>
            <figcaption>
                <h2 class="photostack-title">
                  <span>MOVISTAR</span>
                  <br><br>
                  <a href ="#" target="_blank" style="font-size:24px;"><span class="icon-facebook" style ="color:#3b5998;"></span></a>
                  <a href ="#" target="_blank" style="font-size:24px;"><span class="icon-twitter" style ="color:#00ACEE;"></span></a>
                  <a href ="#" target="_blank" style="font-size:24px;"><span class="icon-youtube" style ="color:#C4302B;"></span></a>
                  <a href ="#" target="_blank" style="font-size:24px;"><span class="icon-instagram" style ="color: #C13584;"></span></a>
                </h2>
                <div class="photostack-back">
                    <p>description</p>
                </div>
            </figcaption>
          </figure>
          
          <figure>
            <a href="{{ asset('gallery/img/clientes/once_tv.png') }}" class="photostack-img" target="_blank"><img src="{{ asset('gallery/img/clientes/once_tv.png') }}" alt="#"/></a>
            <figcaption>
                <h2 class="photostack-title">
                  <span>ONCE TV</span>
                  <br><br>
                  <a href ="#" target="_blank" style="font-size:24px;"><span class="icon-facebook" style ="color:#3b5998;"></span></a>
                  <a href ="#" target="_blank" style="font-size:24px;"><span class="icon-twitter" style ="color:#00ACEE;"></span></a>
                  <a href ="#" target="_blank" style="font-size:24px;"><span class="icon-youtube" style ="color:#C4302B;"></span></a>
                  <a href ="#" target="_blank" style="font-size:24px;"><span class="icon-instagram" style ="color: #C13584;"></span></a>
                </h2>
                <div class="photostack-back">
                    <p>description</p>
                </div>
            </figcaption>
          </figure>
          
          <figure>
            <a href="{{ asset('gallery/img/clientes/penafiel.png') }}" class="photostack-img" target="_blank"><img src="{{ asset('gallery/img/clientes/penafiel.png') }}" alt="#"/></a>
            <figcaption>
                <h2 class="photostack-title">
                  <span>Peñafiel</span>
                  <br><br>
                  <a href ="#" target="_blank" style="font-size:24px;"><span class="icon-facebook" style ="color:#3b5998;"></span></a>
                  <a href ="#" target="_blank" style="font-size:24px;"><span class="icon-twitter" style ="color:#00ACEE;"></span></a>
                  <a href ="#" target="_blank" style="font-size:24px;"><span class="icon-youtube" style ="color:#C4302B;"></span></a>
                  <a href ="#" target="_blank" style="font-size:24px;"><span class="icon-instagram" style ="color: #C13584;"></span></a>
                </h2>
                <div class="photostack-back">
                    <p>description</p>
                </div>
            </figcaption>
          </figure>
          
          <figure>
            <a href="{{ asset('gallery/img/clientes/imss.png') }}" class="photostack-img" target="_blank"><img src="{{ asset('gallery/img/clientes/imss.png') }}" alt="#"/></a>
            <figcaption>
                <h2 class="photostack-title">
                  <span>IMSS</span>
                  <br><br>
                  <a href ="#" target="_blank" style="font-size:24px;"><span class="icon-facebook" style ="color:#3b5998;"></span></a>
                  <a href ="#" target="_blank" style="font-size:24px;"><span class="icon-twitter" style ="color:#00ACEE;"></span></a>
                  <a href ="#" target="_blank" style="font-size:24px;"><span class="icon-youtube" style ="color:#C4302B;"></span></a>
                  <a href ="#" target="_blank" style="font-size:24px;"><span class="icon-instagram" style ="color: #C13584;"></span></a>
                </h2>
                <div class="photostack-back">
                    <p>description</p>
                </div>
            </figcaption>
          </figure>
          
          <figure>
            <a href="{{ asset('gallery/img/clientes/3b.png') }}" class="photostack-img" target="_blank"><img src="{{ asset('gallery/img/clientes/3b.png') }}" alt="#"/></a>
            <figcaption>
                <h2 class="photostack-title">
                  <span>Tiendas 3B</span>
                  <br><br>
                  <a href ="#" target="_blank" style="font-size:24px;"><span class="icon-facebook" style ="color:#3b5998;"></span></a>
                  <a href ="#" target="_blank" style="font-size:24px;"><span class="icon-twitter" style ="color:#00ACEE;"></span></a>
                  <a href ="#" target="_blank" style="font-size:24px;"><span class="icon-youtube" style ="color:#C4302B;"></span></a>
                  <a href ="#" target="_blank" style="font-size:24px;"><span class="icon-instagram" style ="color: #C13584;"></span></a>
                </h2>
                <div class="photostack-back">
                    <p>description</p>
                </div>
            </figcaption>
          </figure>
          
          <figure>
            <a href="{{ asset('gallery/img/clientes/conuee.png') }}" class="photostack-img" target="_blank"><img src="{{ asset('gallery/img/clientes/conuee.png') }}" alt="#"/></a>
            <figcaption>
                <h2 class="photostack-title">
                  <span>CONUEE</span>
                  <br><br>
                  <a href ="#" target="_blank" style="font-size:24px;"><span class="icon-facebook" style ="color:#3b5998;"></span></a>
                  <a href ="#" target="_blank" style="font-size:24px;"><span class="icon-twitter" style ="color:#00ACEE;"></span></a>
                  <a href ="#" target="_blank" style="font-size:24px;"><span class="icon-youtube" style ="color:#C4302B;"></span></a>
                  <a href ="#" target="_blank" style="font-size:24px;"><span class="icon-instagram" style ="color: #C13584;"></span></a>
                </h2>
                <div class="photostack-back">
                    <p>description</p>
                </div>
            </figcaption>
          </figure>
          
          <figure>
            <a href="{{ asset('gallery/img/clientes/lead_image.png') }}" class="photostack-img" target="_blank"><img src="{{ asset('gallery/img/clientes/lead_image.png') }}" alt="#"/></a>
            <figcaption>
                <h2 class="photostack-title">
                  <span>Lead Image</span>
                  <br><br>
                  <a href ="#" target="_blank" style="font-size:24px;"><span class="icon-facebook" style ="color:#3b5998;"></span></a>
                  <a href ="#" target="_blank" style="font-size:24px;"><span class="icon-twitter" style ="color:#00ACEE;"></span></a>
                  <a href ="#" target="_blank" style="font-size:24px;"><span class="icon-youtube" style ="color:#C4302B;"></span></a>
                  <a href ="#" target="_blank" style="font-size:24px;"><span class="icon-instagram" style ="color: #C13584;"></span></a>
                </h2>
                <div class="photostack-back">
                    <p>description</p>
                </div>
            </figcaption>
          </figure>
          
          <figure>
            <a href="{{ asset('gallery/img/clientes/holiday_inn.png') }}" class="photostack-img" target="_blank"><img src="{{ asset('gallery/img/clientes/holiday_inn.png') }}" alt="#"/></a>
            <figcaption>
                <h2 class="photostack-title">
                  <span>Holiday Inn</span>
                  <br><br>
                  <a href ="#" target="_blank" style="font-size:24px;"><span class="icon-facebook" style ="color:#3b5998;"></span></a>
                  <a href ="#" target="_blank" style="font-size:24px;"><span class="icon-twitter" style ="color:#00ACEE;"></span></a>
                  <a href ="#" target="_blank" style="font-size:24px;"><span class="icon-youtube" style ="color:#C4302B;"></span></a>
                  <a href ="#" target="_blank" style="font-size:24px;"><span class="icon-instagram" style ="color: #C13584;"></span></a>
                </h2>
                <div class="photostack-back">
                    <p>description</p>
                </div>
            </figcaption>
          </figure>
          
          <figure>
            <a href="{{ asset('gallery/img/clientes/simex.png') }}" class="photostack-img" target="_blank"><img src="{{ asset('gallery/img/clientes/simex.png') }}" alt="#"/></a>
            <figcaption>
                <h2 class="photostack-title">
                  <span>SIMEX</span>
                  <br><br>
                  <a href ="#" target="_blank" style="font-size:24px;"><span class="icon-facebook" style ="color:#3b5998;"></span></a>
                  <a href ="#" target="_blank" style="font-size:24px;"><span class="icon-twitter" style ="color:#00ACEE;"></span></a>
                  <a href ="#" target="_blank" style="font-size:24px;"><span class="icon-youtube" style ="color:#C4302B;"></span></a>
                  <a href ="#" target="_blank" style="font-size:24px;"><span class="icon-instagram" style ="color: #C13584;"></span></a>
                </h2>
                <div class="photostack-back">
                    <p>description</p>
                </div>
            </figcaption>
          </figure>
          
          <figure>
            <a href="{{ asset('gallery/img/clientes/roche.png') }}" class="photostack-img" target="_blank"><img src="{{ asset('gallery/img/clientes/roche.png') }}" alt="#"/></a>
            <figcaption>
                <h2 class="photostack-title">
                  <span>ROCHE</span>
                  <br><br>
                  <a href ="#" target="_blank" style="font-size:24px;"><span class="icon-facebook" style ="color:#3b5998;"></span></a>
                  <a href ="#" target="_blank" style="font-size:24px;"><span class="icon-twitter" style ="color:#00ACEE;"></span></a>
                  <a href ="#" target="_blank" style="font-size:24px;"><span class="icon-youtube" style ="color:#C4302B;"></span></a>
                  <a href ="#" target="_blank" style="font-size:24px;"><span class="icon-instagram" style ="color: #C13584;"></span></a>
                </h2>
                <div class="photostack-back">
                    <p>description</p>
                </div>
            </figcaption>
          </figure>
          
      </div>
  </section>
  <link rel="stylesheet" type="text/css" href="{{ asset('gallery/css/normalize.css') }}" />
  <link rel="stylesheet" type="text/css" href="{{ asset('gallery/css/demo.css') }}" />
  <link rel="stylesheet" type="text/css" href="{{ asset('gallery/css/component.css') }}" />
  <script src="{{ asset('gallery/js/modernizr.min.js') }}"></script>
  <script src="{{ asset('gallery/js/classie.js') }}"></script>
  <script src="{{ asset('gallery/js/photostack.js') }}"></script>
  <script>
       new Photostack( document.getElementById( 'photostack-1' ), {
                  callback : function( item ) {}}); 
      function setPhotostackItem(){
        var navs = $('#photostack-1 nav span');
        $.each(navs, function(index, item){
          if(item.className == "current flippable" || item.className == "current flippable flip")
          {
            setTimeout(function(){
              item.click();
              setTimeout(function(){
                if(navs[index + 1] == undefined){
                  navs[0].click();
                }else{ 
                  navs[index + 1].click();
                }
                setPhotostackItem();
              },5000);
            },5000);
         }
        });
      }
  //setPhotostackItem();
  </script>
<!--END CLIENTES-->
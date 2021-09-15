<!-- CLIENTES -->
    <section id="info" class="dark">
      <header class="title">
        <h2>Our <span>Clients</span></h2>
        <p>
          These are some of the companies and people who have left their projects in our hands.
        </p>
      </header>
    </section>
    <section id="photostack-1" class="photostack">
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
            <a href="{{ asset('gallery/img/clientes/simi.png') }}" class="photostack-img" target="_blank"><img src="{{ asset('gallery/img/clientes/simi.png') }}" alt="#"/></a>
            <figcaption>
                <h2 class="photostack-title">
                  <span>Farmacias Similares</span>
                  <br><br>
                  <a href ="https://www.facebook.com/farmaciassimilares" target="_blank" style="font-size:24px;"><span class="icon-facebook" style ="color:#3b5998;"></span></a>
                  <a href ="https://twitter.com/fsimilares" target="_blank" style="font-size:24px;"><span class="icon-twitter" style ="color:#00ACEE;"></span></a>
                  <a href ="https://www.youtube.com/user/farmaciassimilaresmx" target="_blank" style="font-size:24px;"><span class="icon-youtube" style ="color:#C4302B;"></span></a>
                  <a href ="https://www.instagram.com/fsimilares/" target="_blank" style="font-size:24px;"><span class="icon-instagram" style ="color: #C13584;"></span></a>
                </h2>
                <div class="photostack-back">
                    <p>Largest pharmaceutical company in Latin America.</p>
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
              },10000);
            },10000);
         }
        });
      }
  setPhotostackItem();
  </script>
<!--END CLIENTES-->
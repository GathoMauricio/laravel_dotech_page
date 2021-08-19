<!-- FOOTER CONTACT -->

     <section id="contact" class="dark">
      <header class="title">
        <h2>Contacto <span></span></h2>
        <p></p>
      </header>

      <div class="container">
        <div class="row">
          <div class="col-md-8 animated" data-animate="fadeInLeft">
            <form method="post" action="{{ route('enviar_mensaje_contacto') }}">
                @csrf
              <div class="row">
                <div class="col-md-4">
                  <input name = "nombre" type="text" class="form-control" placeholder="Nombre" required/>
                </div>
                <div class="col-md-4">
                  <input name = "email" type="email" class="form-control" placeholder="Email"required/>
                </div>
                <div class="col-md-4">
                  <input name = "telefono" type="text" class="form-control" placeholder="Teléfono"required/>
                </div>
                <div class="col-md-12">
                  <input name = "asunto" type="text" class="form-control" placeholder="Asunto"required/>
                </div>
                <div class="col-md-12">
                  <textarea name = "mensaje" class="form-control" rows="3" placeholder="Mensaje"required></textarea>
                </div>
                <div class="col-md-12">
                  <button class="btn btn-default submit">Enviar mensaje</button>
                </div>
              </div>
            </form>
          </div>

          <div class="col-md-4 animated" data-animate="fadeInRight">
            <address>
                <span><i class="fa fa-map-marker fa-lg"></i> Bahía Palmas 33, Verónica Anzúres, 11300 Ciudad de México, D.F México
                <br/><br/>
                Oficina de Querétaro: Lázaro Cárdenas 258, 76177 Querétaro, México.</span>
                <span><i class="fa fa-phone fa-lg"></i> <a href = "tel:525555460615">52 55 55460615 Ext.109</a></span>
                <span><i class="fa fa-envelope-o fa-lg"></i> <a href="mailto:contacto@dotredes.com">contacto&#64;dotredes.com</a></span>
                <span><i class="fa fa-globe fa-lg"></i> <a href="https://dotredes.com">dotredes.com</a></span>
            </address>
          </div>
		  
        </div>
      </div>
    </section>
    
    @if(Session::has('contacto'))
    <script>
    alert("Gracias, Su mensaje ha sido recibido");
    </script>
    @endif
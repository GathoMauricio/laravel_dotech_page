<div style="z-index:99999" class="modal fade" id="modal_contacto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title font-weight-bold" id="exampleModalLabel">Contacto</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form method="post" action="{{ route('enviar_mensaje_contacto') }}">
                @csrf
				<div class="row uniform">
					<div class="4u 12u$(xsmall)">
						<input type="text" name="nombre" value="" placeholder="Nombre" required/>
					</div>
					<div class="4u$ 12u$(xsmall)">
						<input type="email" name="email" value="" placeholder="Email" required/>
					</div>
                    <div class="4u$ 12u$(xsmall)">
						<input type="text" name="telefono" value="" placeholder="Teléfono" required/>
					</div>
                    <div class="12u$ 12u$(xsmall)">
						<input type="text" name="asunto" value="" placeholder="Asunto" required/>
					</div>
					<div class="12u$">
						<textarea name="mensaje" id="message" placeholder="Escriba su mensaje" rows="6" required></textarea>
					</div>
					<div class="12u$">
						<ul class="actions float-right p-1">
                            <li><input type="reset" value="Limpiar" class="alt" /></li>
							<li><input type="submit" value="Enviar" /></li>
						</ul>
					</div>
				</div>
			</form>
      </div>
    </div>
  </div>
</div>

@if(Session::has('contacto'))
<script>
alert("Gracias, Su mensaje ha sido recibido");
</script>
@endif
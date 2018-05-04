<div class="modal fade" id="publicarOferta" tabindex="-1" role="dialog" aria-labelledby="publicarOferta" aria-hidden="true">
	<div class="modal-dialog " role="domcument">
		<div class="modal-content">
			<div class="modal-header bg-pagina">
				<h3 class="modal-title white-text"><strong>Publicar Oferta</strong></h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true" class="white-text">&times;</span>
				</button>
			</div>
			<form>
				<div class="modal-body">
					<div class="md-form d-flex align-items-center">
						<i class="fa fa-font prefix"></i>
						<input type="text" class="form-control mb-2" id="inlineFormInputMD">
						<label for="textareaPrefix">Titulo</label>
					</div>
					<div class="md-form d-flex align-items-center">
						<i class="fa fa-align-justify prefix"></i>
						<textarea type="text" id="textareaPrefix" class="md-textarea md-textarea-auto form-control" rows="3"></textarea>
						<label for="textareaPrefix">Descripcion</label>
					</div>
					<div class="md-form d-flex align-items-center">
						<i class="fa fa-calendar-alt prefix"></i>
						<input type="text" class="form-control mb-2" id="fecha_vencimiento" placeholder="Fecha de Vencimiento">
					</div>	
				</div>
				<div class="modal-footer">
					<label class="custom-control custom-checkbox mr-3">
						<input type="checkbox" class="custom-control-input">
						<span class="custom-control-indicator"></span>
						<span class="custom-control-description">Ofeta tipo <strong>Urgente</strong></span>
					</label>
					<a type="button" class="btn btn-outline-pagina">Vista Previa</a>
					<button type="button" class="btn btn-pagina ">Publicar</button>
				</div>
			</form>
		</div>
	</div>
</div>
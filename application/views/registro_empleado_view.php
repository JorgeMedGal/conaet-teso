<?php $this->load->view('header'); ?>

<?php
	if($this->session->userdata('correcto') !== null) {
		if($this->session->userdata('correct')){
			?>
				<script type="text/javascript">
					swal("Perfecto","Los datos han sido registrados exitosamente","success");
				</script>
			<?php
		} elseif (!$this->session->userdata('correcto')) {
			?>
				<script type="text/javascript">
					swal("Oops...","Ha ocurrido un problema al realizar el registro, intentalo de nuevo","error");
				</script>
			<?php
		}
		$this->session->unset_userdata('correcto');
	}
?>

<div class="container">
    <h2 align="center">Dar de alta un nuevo Empleado</h2>
	<hr>
	<form action="<?=base_url()?>registrar-usuario" method="post" id="formNuevoEmpleado">
		<div class="col-lg-12 col-md-12 col-sm-12">
			<div class="form-group row">
				<label class="col-lg-4 col-md-4 col-sm-12 text-right  col-form-label-sm" for="nombreUsuario">*Nombre(s) del empleado:</label>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<input class="form-control form-control-sm" type="text" name="nombreUsuario" id ="nombreUsuario" maxlength="160"/>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-lg-4 col-md-4 col-sm-12 text-right col-form-label-sm" for="aPUsuario">*Apellido Paterno</label>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<input class="form-control form-control-sm" type="text"  name="aPUsuario" id="aPUsuario" maxlength="160" />
				</div>
			</div>
			<div class="form-group row">
				<label class="col-lg-4 col-md-4 col-sm-12 text-right col-form-label-sm" for="aMUsuario">Apellido Materno</label>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<input class="form-control form-control-sm" type="text" name="aMUsuario" id="aMUsuario" maxlength="160"/>
				</div>
			</div>
			<div class="form-group row">
				<label for="correoUsuario" class="col-lg-4 col-md-4 col-sm-12 text-right col-form-label-sm">*Correo asignado: </label>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="input-group input-group-sm">
						<input class="form-control form-control-sm" type="email" name="correoUsuario" id="correoUsuario" maxlength="180" />
						<div class="invalid-feedback">
          					Este correo ya esta en uso.
        				</div>
        				<div class="valid-feedback">
          					Este correo es válido y disponible.
        				</div>
					</div>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-lg-4 col-md-4 col-sm-12 text-right col-form-label-sm" for="telefonoUsuario">Teléfono Personal: </label>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<input class="form-control form-control-sm" type="text" name="telefonoUsuario" id="telefonoUsuario" maxlength="160"/>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-lg-4 col-md-4 col-sm-12 text-right col-form-label-sm" for="areaUsuario">*Área: </label>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<select class="js-select-2" id="areaUsuario" name="areaUsuario">
						<?=$areas?>
					</select>
				</div>
			</div>
			<div class="form-group row" id="divCargo" style="display:none;">
				<label class="col-lg-4 col-md-4 col-sm-12 text-right col-form-label-sm" for="cargoUsuario">*Cargo: </label>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<select class="js-select-2" id="cargoUsuario" name="cargoUsuario"></select>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-lg-4 col-md-4 col-sm-12 text-right col-form-label-sm" for="extUsuario">Extensión </label>
				<div class="col-lg-3 col-md-3 col-sm-12">
					<input class="form-control form-control-sm" type="text" name="extUsuario" id="extUsuario" maxlength="6"/>
				</div>
			</div>
			<div class="form-group row">
				<div class="offset-lg-4 col-lg-6 offset-md-4 col-md-6 col-sm-12">
					<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" name="checkEncargado" id="checkEncargado" >	
						<label class="custom-control-label" for="checkEncargado">Es encargado de área</label>
					</div>
				</div>
			</div>
			<h2 align="center">Dirección</h2>
			<hr>
			<div class="form-group row">
				<label class="col-lg-4 col-md-4 col-sm-12 text-right col-form-label-sm" for="edoUsuario">*Estado: </label>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<select class="js-select-2" id="edoUsuario" name="edoUsuario">
						<?=$estados?>
					</select>
				</div>
			</div>
			<div class="form-group row" id="divMun" style="display:none;">
				<label class="col-lg-4 col-md-4 col-sm-12 text-right col-form-label-sm" for="colUsuario">*Municipio: </label>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<select class="js-select-2" id="munUsuario" name="munUsuario"></select>
				</div>
			</div>
			<div class="form-group row" id=divCol style="display:none;">
				<label class="col-lg-4 col-md-4 col-sm-12 text-right col-form-label-sm" for="colUsuario">*Colonia: </label>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<select class="js-select-2" id="colUsuario" name="colUsuario"></select>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-lg-4 col-md-4 col-sm-12 text-right col-form-label-sm" for="codPosUsuario">*Código Postal </label>
				<div class="col-lg-3 col-md-3 col-sm-12">
					<input class="form-control form-control-sm" type="text" name="codPosUsuario" id="codPosUsuario" maxlength="5"/>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-lg-4 col-md-4 col-sm-12 text-right col-form-label-sm" for="calleUsuario">*Calle </label>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<input class="form-control form-control-sm" type="text" name="calleUsuario" id="calleUsuario"/>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-lg-4 col-md-4 col-sm-12 text-right col-form-label-sm" for="nExtUsuario">N° exterior </label>
				<div class="col-lg-3 col-md-3 col-sm-12">
					<input class="form-control form-control-sm" type="text" name="nExtUsuario" id="nExtUsuario"/>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-lg-4 col-md-4 col-sm-12 text-right col-form-label-sm" for="nIntUsuario">N° interior </label>
				<div class="col-lg-3 col-md-3 col-sm-12">
					<input class="form-control form-control-sm" type="text" name="nIntUsuario" id="nIntUsuario"/>
				</div>
			</div>
			<h2 align="center">Imagen de Perfil</h2>
			<hr>
			<div class="form-group row justify-content-center align-items-center justify-content-center">
				<div class="col-lg-4 col-md-4 col-sm-12 contenedor">
					<img class="img-fluid" id="logoBarmex2" src="<?=base_url()?>content/themes/erp-cloud/images/user_default.png" alt="Imagen Default">
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="form-group row justify-content-center">
						<div class="custom-file">
				    		<input type="file" id="inputFile" name="inputFile"/>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
	<div class="container">
		<div class="form-group row justify-content-center divSubmit">
			<div class="col-lg-6 col-md-6 col-sm-12">
				<button type="button" class="btn clear" id="btnLimpiarUsuario"> <i class="fas fa-times-circle"></i> Limpiar formulario</button>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12">
				<button type="button" class="btn login" id="btnGuardarUsuario"> <i class="fas fa-save"></i> Guardar Usuario</button>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$('#inputFile').fileselect({
		language: 'en',
		allowedFileExtensions : ['jpg','jpeg','png','bmp','gif'],
		allowedFileSize: 5242880,
		validationCallback: function (m, type, instance) {
            instance.$inputGroup
                    .after('<span class="small text-danger">' + m + '</span>')
		}
	});
	$('.js-select-2').select2({
		language: "es"
	});
	$(document).ready(function(){
		$('#checkStatus').attr('checked',true)
	});
	function asignaSelect(){
		setTimeout(function(){
			$('.js-select-modulos').select2({language : "es"});
		},200);
	}
</script>

<?php $this->load->view('footer'); ?>
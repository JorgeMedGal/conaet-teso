<?php $this->load->view('header') ?>

	<ul class="nav nav-pills nav-justified mb-3" id="divVisitas" role="tablist">
		<li class="nav-item">
			<a class="nav-link nav-item active" id="pills-register-tab" data-toggle="pill" href="#tabUsuarios" role="tab" aria-controls="tabUsuarios" aria-selected="true">Registrar/Actualizar Usuario</a>
		</li>
		<li class="nav-item">
			<a class="nav-link nav-item" id="pills-consulta-tab" data-toggle="pill" href="#tabModulos" role="tab" aria-controls="tabModulos" aria-selected="false">Consultar Empleados</a>
		</li>
	</ul>
	<div class="tab-content">
		<div class="tab-pane fade show active" id="tabUsuarios" role="tabpanel" aria-labelledby="pills-register-tab">
			<div class="container">
				<div class="form-group row justify-content-center justify-content-lg-center justify-content-md-center justify-content-sm-center">
					<div class="col-lg-6 col-md-6 col-sm-12">
						<select class="js-select-2" id="userSelect" name="userSelect">
							<?=$usuarios?>
						</select>
					</div>
				</div>
				<div class="form-group row justify-content-center justify-content-lg-center justify-content-md-center justify-content-sm-center" style="margin-bottom: 3%;">
					<div class="col-lg-4 col-md-4 col-sm-12">
						<button type="button" class="btn clear" id="btnLimpiarUser">Limpiar selección</button>
					</div>
				</div>
				<h2 align="center">Dar de alta un nuevo Empleado</h2>
				<hr>
				<form action="<?=base_url()?>recursos-humanos/registrar-usuario" method="post" id="formGestion">
					<input type="hidden" name="claveUsuario" id="claveUsuario"> 
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="form-group row justify-content-center">
							<label for="claveUsuarioNuevo" class="col-lg-4 col-md-4 col-sm-12 col-form-label">Clave del Empleado</label>
							<div class="col-lg-6 col-md-6 col-sm-12">
								<input class="form-control form-control-sm" type="number" name="claveUsuarioNuevo" id="claveUsuarioNuevo" disabled value="<?=$ultimaClave?>"/>
							</div>
						</div>
						<div class="form-group row justify-content-center">
							<label class="col-lg-4 col-md-4 col-sm-12 form-control-label" for="nombreUsuario">Apellido Paterno</label>
							<div class="col-lg-6 col-md-6 col-sm-12">
								<input class="form-control form-control-sm" type="text" onkeyup="toUpperCase(this);" name="aMUsuario" id="aMUsuario" maxlength="160" onkeydown="nextFocus(this.id,'aPUsuario')" />
							</div>
						</div>
						<div class="form-group row justify-content-center">							
								<label class="col-lg-4 col-md-4 col-sm-12 form-control-label" for="nombreUsuario">Apellido Materno</label>
								<input class="form-control form-control-sm" type="text" onkeyup="toUpperCase(this);" name="aPUsuario" id="aPUsuario" maxlength="160" onkeydown="nextFocus(this.id,'nombreUsuario')"/>
							</div>
						</div>
						<div class="form-group row justify-content-center">
							<div class="col-lg-3 col-md-3 col-sm-12">
								<label class="col-lg-4 col-md-4 col-sm-12 form-control-label" for="nombreUsuario">Nombre(s) del empleado:</label>
								<input class="form-control form-control-sm" type="text" onkeyup="toUpperCase(this);" name="nombreUsuario" id ="nombreUsuario" maxlength="160" onkeydown="nextFocus(this.id,'correoUsuario')"/>
							</div>
						</div>
						<div class="form-group row justify-content-center">
							<label for="correoUsuario" class="col-lg-4 col-md-4 col-sm-12 col-form-label">Correo asignado: </label>
							<div class="col-lg-6 col-md-6 col-sm-12">
								<div class="input-group input-group-sm">
									<input class="form-control form-control-sm" type="email" name="correoUsuario" id="correoUsuario" maxlength="180" />
									<div class="input-group-append">
										<span class="input-group-text">@barmex.com.mx</span>
									</div>
									<div class="invalid-feedback">
          								Este correo ya esta en uso.
        							</div>
        							<div class="valid-feedback">
          								Este correo es válido y disponible.
        							</div>
								</div>
							</div>
						</div>
						<!--<div class="form-group row justify-content-center">
							<label for="passUsuario" class="col-lg-4 col-md-4 col-sm-12 col-form-label">Contraseña del usuario: </label>
							<div class="col-lg-6 col-md-6 col-sm-12">
								<input class="form-control form-control-sm" type="text" name="passUsuario" id="passUsuario" maxlength="10"/>
							</div>
						</div>-->
						<div class="form-group row justify-content-center">
							<div class="offset-lg-4 col-lg-6 offset-md-4 col-md-6 col-sm-12">
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" name="checkStatus" id="checkStatus" >
			  						<label class="custom-control-label" for="checkStatus">Habilitar empleado</label>
								</div>
							</div>
						</div>
						<div class="form-group row justify-content-center">
							<label for="zonaVentaUsuario" class="col-lg-4 col-md-4 col-sm-12 col-form-label">Zona de Venta Asignada: </label>
							<div class="col-lg-6 col-md-6 col-sm-12">
								<select class="js-select" id="zonaVentaUsuario" name="zonaVentaUsuario">
									<?=$zonasVenta?>
								</select>
							</div>
						</div>
						<!--<div class="form-group row justify-content-center">
							<label for="nivelUsuario" class="col-lg-4 col-md-4 col-sm-12 col-form-label">Nivel de Usuario: </label>
							<div class="col-lg-6 col-md-6 col-sm-12">
								<select class="js-select" id="nivelUsuario" name="nivelUsuario">
									<?=$niveles?>
								</select>
							</div>
						</div>-->
						<h2 align="center">Imagen de Perfil</h2>
						<hr>
						<div class="form-group row justify-content-center align-items-center justify-content-center">
							<div class="col-lg-4 col-md-4 col-sm-12 contenedor">
								<img id="image-user" src="<?php echo base_url().get_option('default_image')?>" alt="Imagen Default">
								<!--<div class="segundo"><a href="#" id="cambiaImagen">Cambiar Imagen</a></div>-->
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12">
						  		<div class="form-group row justify-content-center">
						  			<div class="custom-file">
							    		<input type="file" id="inputFile" name="inputFile[]" multiple />
						  			</div>
						  		</div>
							</div>
						</div>
						<!--<h2 align="center">Accesos a Mòdulos</h2>
						<hr>
						<div class="form-group row justify-content-center">
							<label for="modulosUsuario" class="col-lg-4 col-md-4 col-sm-12 col-form-label">Asignar Modulos</label>
							<div class="col-lg-6 col-md-6 col-sm-12">
								<select class="js-select" id="modulosUsuario" name="modulosUsuario">
									<?=$modulos?>
								</select>
							</div>
						</div>-->
					</div>
				</form>
			</div>
			<!--<div class="container-fluid">
				<div class="table-responsive">
					<table class="table table-striped">
						<thead class="thead-dark">
							<th scope="col">Módulo</th>
							<th scope="col">Ruta</th>
							<th scope="col">Habilitado</th>
						</thead>
					</table>
				</div>
			</div>-->
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
		<div class="tab-pane fade" id="tabModulos" role="tabpanel" aria-labelledby="pills-consulta-tab">
			<!--<div class="container">
				<div class="form-group row justify-content-center justify-content-lg-center justify-content-md-center justify-content-sm-center" style="margin-bottom: 3%;">
					<div class="col-lg-6 col-md-6 col-sm-12">
						<select class="js-select-modulos" id="modulosSelect" name="modulosSelect">
							<?=$modulosMenu?>
						</select>
					</div>
				</div>
				<h2 align="center">Dar de alta un nuevo módulo</h2>
				<hr>
				<form action="<?=base_url()?>recursos-humanos/guardar-modulo">
					<div class="offset-lg-1 col-lg-10 col-md-12 col-sm-12">
						<div class="form-group row justify-content-center">
							<label for="nombreModulo" class="col-lg-4 col-md-4 col-sm-12 form-control-label">Nombre del módulo: </label>
							<div class="col-lg-6 col-md-6 col-sm-12">
								<input type="text" class="form-control form-control-sm" id="nombreModulo" onkeyup="toUpperCase(this);" name="nombreModulo" maxlength="100" />
							</div>
						</div>
						<div class="form-group row justify-content-center">
							<div class="offset-lg-4 col-lg-6 offset-md-4 col-md-6 col-sm-12">
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" name="checkMenu" id="checkMenu" >
			  						<label class="custom-control-label" for="checkMenu" onclick="asignaSelect();">Es menú</label>
								</div>
							</div>
						</div>
						<div class="form-group row justify-content-center" id="divMenuModulos">
							<label for="menuModulo" class="col-lg-4 col-md-4 col-sm-12 form-control-label">Menus disponibles</label>
							<div class="col-lg-6 col-md-6 col-sm-12">
								<select class="js-select-modulos" id="menuModulo" name="menuModulo">
									<?=$menus?>
								</select>
							</div>
						</div>
						<div class="form-group row justify-content-center">
							<label for="slugModulo" class="col-lg-4 col-md-4 col-sm-12 form-control-label">Ruta de acceso</label>
							<div class="col-lg-6 col-md-6 col-sm-12">
								<input type="text" class="form-control form-control-sm" disabled id="rutaModulo" name="rutaModulo" />
							</div>
						</div>
					</div>
					<div class="form-group row justify-content-center divSubmit">
						<div class="col-lg-6 col-md-6 col-sm-12">
							<button type="button" class="btn clear" id="btnLimpiarModulo"> <i class="fas fa-times-circle"></i> Limpiar formulario</button>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12">
							<button type="button" class="btn login" id="btnGuardarModulo"> <i class="fas fa-save"></i> Guardar módulo</button>
						</div>
					</div>
				</form>
			</div>
			<div class="container-fluid" id="divModulos">
				<div class="table-responsive">
					<table class="table table-striped">
						<thead class="thead-dark">
							<th scope="col">Módulo o Menu</th>
							<th scope="col">Slug</th>
							<th scope="col">Usuario que registró</th>
							<th scope="col">Eliminar módulo o menu</th>
						</thead>
						<tbody>
							<?=$modulosTabla?>
						</tbody>
					</table>
				</div>
			</div>-->
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

<?php $this->load->view('footer')?>
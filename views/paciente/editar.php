<div class="card border-0 shadow my-2">
	<div class="card-body p-5">
		<?php 
		require_once 'views/layout/editarNavs.php';
		require_once 'views/layout/cabeceraLogo.php';
		$fecha = date_create($imprimir->fechaNacimientoCliente);
		$sesion = ""; 
		 if(isset($_SESSION['formulario'])){$sesion = $_SESSION['formulario']['datos'];} 
		 ?>
		<div class="texcto">
			<?php if($sesion != "") echo '<p class="alert alert-danger error" role="alert">'.$_SESSION['formulario']["error"]."</p>";?>
			<?php if(isset($_SESSION['statusSave'])) echo '<p class="alert alert-success error" role="alert">'.$_SESSION['statusSave']."</p>";?>
			<?php Utls::deleteSession('statusSave') ?>
			<?php Utls::deleteSession('formulario') ?>
		</div>
		<div class="tab-content" id="nav-tabContent" style="height: auto">
			<form id="registro" action="<?=base_url?>Paciente/updatePersonal" method="POST" class="tab-pane fade show active" role="tabpanel" aria-labelledby="nav-home-tab">
				<div class="idPaciente">
				<input type="text" class="form-control" id="idPaciente" value="<?php echo $imprimir->idCliente;?>" readonly="true" name="idPaciente">	
				</div>	
				<div class="page-header"><small>DATOS PERSONALES</small></div>
				<hr>			
				<div class="form-row">
					<div class="form-group col-md-4">
						<label for="intputname">Nombre</label>
						<input type="text" class="form-control" id="intputname" name="intputname" value="<?php if($sesion != ""){echo $sesion["Nombre"];}else{echo SED::decryption($imprimir->nombreCliente);}?>">
					</div>
					<div class="form-group col-md-4">
						<label for="inputAppat">Apellido Paterno</label>
						<input type="text" class="form-control" id="inputAppat" name="inputAppat" value="<?php  if($sesion != ""){echo $sesion["Apellido_Pat"];}else{echo SED::decryption($imprimir->apPatCliente);};?>">
					</div>
					<div class="form-group col-md-4">
						<label for="inputApmat">Apellido Materno</label>
						<input type="text" class="form-control" id="inputApmat" name="inputApmat" value="<?php  if($sesion != ""){echo $sesion["Apellido_Mat"];}else{echo SED::decryption($imprimir->apMatCliente);};?>">
					</div>
				</div>
				<div class="form-row ">
					<div class="form-control col-md-4 genero">
					<label for="intputSexo" id="intputSexo">SEXO</label>
						<div class="custom-control custom-radio custom-control-inline radio-Sexo">
						  <input type="radio" name="customRadioSexo" value="hombre" <?php if($imprimir->generoCliente == 'dndMc3'){echo 'checked';}?>>
						  <label  for="customRadioInline1">hombre</label>
						</div>
						<div class="custom-control custom-radio custom-control-inline radio-Sexo">
						  <input type="radio"  name="customRadioSexo" value="mujer" <?php if($imprimir->generoCliente == 'VkQ4Vm'){echo 'checked';}?>>
						  <label for="customRadioInline2">mujer</label>
						</div>
					</div>
					<div class="form-group col-md-4">
						<label for="inpuFechaNac">Fecha Nacimiento</label>
						<input type="text" onchange="javascript:calcularEdad()" class="form-control" id="dateInicio" name="dateInicio" placeholder="dd/mm/yyyy" value="<?php  if($sesion != ""){echo $sesion["fecha"];}else{echo date_format($fecha,'d-m-Y');}?>">
						<!-- <span class="input-group-addon" >
                        	<input type="button"  value="Calcular"  onclick="javascript:calcularEdad();" />
                        </span> -->
					</div>
					<div class="form-group col-md-4">
						<label for="inpuEdad">Edad</label>
						<input type="text" class="form-control" id="inpuEdad" name="inpuEdad" value="<?php if($sesion != ""){echo $sesion["estatura"];}else{echo $imprimir->edadCliente;}?>" readonly>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-4">
						<label for="inpuEstatura">Estatura Aprox.</label>
						<input type="text" class="form-control" id="inpuEstatura" name="inpuEstatura" value="<?php  if($sesion != ""){echo $sesion["estatura"];}else{echo $imprimir->estaturaCliente;}?>">
					</div>
					<div class="form-group col-md-4">
						<label for="inpuOcupacion">Ocupacion</label>
						<input type="text" class="form-control" id="inpuOcupacion" name="inpuOcupacion" value="<?php  if($sesion != ""){echo $sesion["ocupacion"];}else{echo SED::decryption($imprimir->ocupacionCliente);}?>">
					</div>
					<div class="form-group col-md-4">
						<label for="inpuEstadoCivil">Estado Civil</label>
						<select class="form-control" id="inpuEstadoCivil" name="inpuEstadoCivil">
							<option value="<?php  if($sesion != ""){echo $sesion["estadocivil"];}else{echo $imprimir->estadoCivilCliente;}?>"><?php  if($sesion != ""){echo $sesion["estadocivil"];}else{echo $imprimir->estadoCivilCliente;}?></option> 	
							<option value="CASADO">CASADO</option> 	
							<option value="DIVORCIADO">DIVORCIADO</option> 	
							<option value="SOLTERO">SOLTERO</option> 	
							<option value="VIUDO">VIUDO</option> 	
							<option value="SEPARADO">SEPARADO</option> 	
							<option value="UNIÓN LIBRE">UNIÓN LIBRE</option> 	
						</select>
					</div>
				</div>
				<div class="page-header"><small>DATOS CONTACTO</small></div>
				<hr>
				<div class="form-row ">
					<div class="form-group col-md-4">
						<label for="inpuCelular">Celular</label>
						<input type="text" class="form-control" id="inpuCelular" name="inpuCelular" value="<?php  if($sesion != ""){echo $sesion["celular"];}else{echo SED::decryption($imprimir->celCliente);}?>">
					</div>
					<div class="form-group col-md-4">
						<label for="inpuCorreo">Correo</label>
						<input type="text" class="form-control" id="inpuCorreo" name="inpuCorreo" value="<?php  if($sesion != ""){echo $sesion["correo"];}else{echo $imprimir->correoCliente;}?>">
						<div id="error" class=""></div>
					</div>
					<div class="form-group col-md-4">
						<label for="inpuRedSocial">Red Social</label>
						<input type="text" class="form-control" id="inpuRedSocial" name="inpuRedSocial" value="<?php  if($sesion != ""){echo $sesion["red_social"];}else{echo $imprimir->redSocialCliente;}?>">
					</div>
				</div>
				<div class="page-header"><small>DATOS DOMICILIO</small></div>
				<hr>
				<div class="form-row ">
					<div class="form-group col-md-4">
						<label for="inpuEstado">Estado</label>
						<select class="form-control inpuEstado" id="inpuEstado" name="inpuEstado">
							<option value="<?php  if($sesion != ""){echo $sesion["idEstado"];}else{echo $imprimir->idEstado;}?>"><?php  if($sesion != ""){echo $sesion["estado"];}else{echo $imprimir->estado;}?></option>						
							<?php while ($estado = $nombreE->fetch_object()):?>							
							<option value="<?= $estado->idEstado?>"><?= $estado->estado?></option>						
						<?php endwhile; ?>
						</select>
					</div>
					<div class="form-group col-md-4">
						<label for="inpuMunicipio">Municipio</label>
					    <select class="form-control" id="inpuMunicipio" name="inpuMunicipio">
						<option value="<?php  if($sesion != ""){echo $sesion["idEstado"];}else{echo $imprimir->idMunicipio;}?>"><?php  if($sesion != ""){echo $sesion["municipio"];}else{echo $imprimir->municipio;}?></option>
					    </select>
					</div>
					<div class="form-group col-md-4">
						<label for="inpuCP">CP.</label>
						<input type="text" class="form-control" id="inpuCP" name="inpuCP" value="<?php  if($sesion != ""){echo $sesion["codigo_postal"];}else{echo $imprimir->cpCliente;}?>">
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-4">
						<label for="inpuColonia">Colonia</label>
						<input type="text" class="form-control" id="inpuColonia" name="inpuColonia" value="<?php  if($sesion != ""){echo $sesion["colonia"];}else{echo SED::decryption($imprimir->coliniaCliente);}?>">
					</div>
					<div class="form-group col-md-4">
						<label for="inpuCalle">Calle</label>
						<input type="text" class="form-control" id="inpuCalle" name="inpuCalle" value="<?php  if($sesion != ""){echo $sesion["calle"];}else{echo SED::decryption($imprimir->calleCliente);}?>">
					</div>
					<div class="form-group col-md-4">
						
					</div>
				</div>
				<div class="page-header"><small>DATOS EMERGENCIA</small></div>
				<hr>
				<div class="form-row" >
					<div class="form-group col-md-4">
						<label for="inpuTelEmergencia">Tel. Emergencia</label>
						<input type="text" class="form-control" id="inpuTelEmergencia" name="inpuTelEmergencia" value="<?php  if($sesion != ""){echo $sesion["tetefono_emergencia"];}else{echo SED::decryption($imprimir->telefonoEmergencia);}?>">
					</div>
					<div class="form-group col-md-4">
						<label for="inpuParentesco">Parentesco</label>
						<input type="text" class="form-control" id="inpuParentesco" name="inpuParentesco" value="<?php  if($sesion != ""){echo $sesion["parentesco"];}else{echo SED::decryption($imprimir->parentescoEmergenciaCliente);}?>">
					</div>
				</div>
				<div class="page-header"><small>DATOS EXTRA</small></div>
				<hr>
				<div class="form-row ">
					<div class="form-group col-md-4">
						<label for="inpuTelNombreRecomienda">Nombre Recomienda</label>
						<input type="text" class="form-control" id="inpuNombreRecomienda" name="inpuNombreRecomienda" value="<?php  if($sesion != ""){echo $sesion["nombre_Recomienda"];}else{echo SED::decryption($imprimir->nombreRecomiendaCliente);}?>">
					</div>
					<div class="form-group col-md-8">
						<label for="inpuMotivo">Motivo de Consulta</label>
						<input type="text" class="form-control" id="inpuMotivo" name="inpuMotivo" value="<?php  if($sesion != ""){echo $sesion["motivo"];}else{ echo SED::decryption($imprimir->motivoCliente);}?>">
					</div>
				</div>
				<div class="page-header"><small>DATOS MEDICACION</small></div>
				<hr>
				<div class="form-row ">
					<div class="form-group col-md-4">
						<label for="selectMedicamento">Algún Medicamento Que Toma Actualmente</label>
						<select class="form-control" id="selectMedicamento" name="select">
					      <option value="1" <?php  if($imprimir->medicamentoAnteriorCliente != 'Z3VFcjdHN1QwTDZNQU4va3JlMXcyQT09'){echo 'selected';}?>>Si</option>
					      <option value="2" <?php  if($imprimir->medicamentoAnteriorCliente == 'Z3VFcjdHN1QwTDZNQU4va3JlMXcyQT09'){echo 'selected';}?>>No</option>
					    </select>
					</div>
					<div class="form-group col-md-4" id=<?php  if($imprimir->medicamentoAnteriorCliente == 'Z3VFcjdHN1QwTDZNQU4va3JlMXcyQT09'){echo 'medicamento';}?>>
						<label for="inputNombreMedicamento">Nombre Medicamento</label>
						<input type="text" class="form-control" id="inputNombreMedicamento" name="inputNombreMedicamento" value="<?php  if($sesion != ""){echo $sesion["medicamento"];}else{ echo SED::decryption($imprimir->medicamentoAnteriorCliente);}?>">
					</div>
				</div>
				<input type="submit" class="btn btn-primary" id="btn-env" value="EDITAR" name="editarP">
			</form>
		</div>
	</div>
</div>


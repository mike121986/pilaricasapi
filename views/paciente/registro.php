<div class="card border-0 shadow my-2">
	<div class="card-body p-5">
		<?php require_once 'views/layout/cabeceraLogo.php';?>
		<?php $sesion = ""; 
		 if(isset($_SESSION['formulario'])){$sesion = $_SESSION['formulario']['datos'];} ?>
		<div class="texcto">	
			<p class="lead">ESTE FORMATO DEBE SER LLENADO POR EL PACIENTE</p>
			<?php if($sesion != "") echo '<p class="alert alert-danger error" role="alert">'.$_SESSION['formulario']["error"]."</p>";?>
			<?php if(isset($_SESSION['statusSave'])) echo '<p class="alert alert-success error" role="alert">'.$_SESSION['statusSave']."</p>";?>
			<?php Utls::deleteSession('statusSave') ?>
		</div>
		<div style="height: auto">
			<form id="registro" action="<?=base_url?>Paciente/save" method="POST" novalidate>
				<div class="idPaciente">
				<input type="text" class="form-control" id="idPaciente" value="<?=Utls::createId(Consultorio,$id['id'])?>" readonly="true" name="idPaciente">	
				</div>	
			<div class="page-header"><small>DATOS PERSONALES</small></div>
			<hr>			
				<div class="form-row">
					<div class="form-group col-md-4">
						<label for="intputname">Nombre</label>
						<input type="text" class="form-control" id="intputname" name="intputname" value="<?php if($sesion != "") echo $sesion["Nombre"];?>">
						<div class="" id="alertaName"></div>
					</div>
					<div class="form-group col-md-4">
						<label for="inputAppat">Apellido Paterno</label>
						<input type="text" class="form-control" id="inputAppat" name="inputAppat" value="<?php  if($sesion != "") echo $sesion["Apellido_Pat"];?>">
						<div class="" id="alertaApp"></div>
					</div>
					<div class="form-group col-md-4">
						<label for="inputApmat">Apellido Materno</label>
						<input type="text" class="form-control" id="inputApmat" name="inputApmat" value="<?php  if($sesion != "") echo $sesion["Apellido_Mat"];?>">
						<div class="" id="alertaApm"></div>
					</div>
				</div>
				<div class="form-row ">
					<div class="form-control col-md-4 genero">
						<label for="intputSexo" id="intputSexo">SEXO</label>
						<div class="custom-control custom-radio custom-control-inline radio-Sexo">
						  <input type="radio" id="customRadioInline1" name="customRadioSexo"   value="hombre">
						  <label for="customRadioInline1">hombre</label>
						</div>
						<div class="custom-control custom-radio custom-control-inline radio-Sexo">
							<input type="radio" id="customRadioInline2" name="customRadioSexo"  value="mujer" >
							<label  for="customRadioInline2">mujer</label>
						</div>
						<div class="" id="alertRadio"></div>
					</div>
					<div class="form-group col-md-4">
						<label for="inpuFechaNac">Fecha Nacimiento</label>
						<input type="text" onchange="javascript:calcularEdad()" class="form-control" id="dateInicio" name="dateInicio" placeholder="dd-mm-yyyy">
						<!-- <span class="input-group-addon" >
                        	<input type="button"  value="Calcular"  onclick="javascript:calcularEdad();" />
						</span> alertaDate-->
						<div class="" id="alertaDate"></div>
					</div>
					<div class="form-group col-md-4">
						<label for="inpuEdad">Edad</label>
						<input type="text" class="form-control" id="inpuEdad" name="inpuEdad" readonly>
						<div class="" id="alertaEdad"></div>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-4">
						<label for="inpuEstatura">Estatura Aprox.</label>
						<input type="text" class="form-control" id="inpuEstatura" name="inpuEstatura" value="<?php  if($sesion != "") echo $sesion["estatura"];?>">
						<div class="" id="alertaEstatura"></div>
					</div>
					<div class="form-group col-md-4">
						<label for="inpuOcupacion">Ocupacion</label>
						<input type="text" class="form-control" id="inpuOcupacion" name="inpuOcupacion" value="<?php  if($sesion != "") echo $sesion["ocupacion"];?>">
						<div class="" id="alertOcupacion"></div>
					</div>
					<div class="form-group col-md-4">
						<label for="inpuEstadoCivil">Estado Civil</label>
						<select class="form-control" id="inpuEstadoCivil" name="inpuEstadoCivil">
							<option value="">ESCOGE UNA OPCION</option> 	
							<option value="CASADO">CASADO</option> 	
							<option value="DIVORCIADO">DIVORCIADO</option> 	
							<option value="SOLTERO">SOLTERO</option> 	
							<option value="VIUDO">VIUDO</option> 	
							<option value="SEPARADO">SEPARADO</option> 	
							<option value="UNIÓN LIBRE">UNIÓN LIBRE</option> 	
						</select>
						<div class="" id="alertSelect"></div>
					</div>
				</div>
				<div class="page-header"><small>DATOS CONTACTO</small></div>
				<hr>
				<div class="form-row ">
					<div class="form-group col-md-4">
						<label for="inpuCelular">Celular</label>
						<input type="text" class="form-control" placeholder="no uses guines (-) ni diagonales (/)" id="inpuCelular" name="inpuCelular" value="<?php  if($sesion != "") echo $sesion["celular"];?>">
						<div class="" id="alertTel"></div>
					</div>
					<div class="form-group col-md-4">
						<label for="inpuCorreo">Correo</label>
						<input type="text" class="form-control" id="inpuCorreo" name="inpuCorreo" value="<?php  if($sesion != "") echo $sesion["correo"];?>">
						<div id="error" class=""></div>
					</div>
					<div class="form-group col-md-4">
						<label for="inpuRedSocial">Red Social</label>
						<input type="text" class="form-control" id="inpuRedSocial" name="inpuRedSocial" value="<?php  if($sesion != "") echo $sesion["red_social"];?>">
						<div class="" id="alertRS"></div>
					</div>
				</div>
				<div class="page-header"><small>DATOS DOMICILIO</small></div>
				<hr>
				<div class="form-row ">
					<div class="form-group col-md-4">
						<label for="inpuEstado">Estado</label>
						<select class="form-control inpuEstado" id="inpuEstado" name="inpuEstado">
							<option value="">Escoge un estado</option> 							
						<?php while ($estado = $nombreE->fetch_object()):?>							
							<option value="<?= $estado->idEstado?>"><?= $estado->estado?></option> 							
						<?php endwhile; ?>
						</select>
						<div class="" id="alertSelectEdo"></div>
					</div>
					<div class="form-group col-md-4">
						<label for="inpuMunicipio">Municipio</label>
					    <select class="form-control" id="inpuMunicipio" name="inpuMunicipio">
							<option value="">Escoge un municipio</option>
						</select>
						<div class="" id="alertSelectMun"></div>
					</div>
					<div class="form-group col-md-4">
						<label for="inpuCP">CP.</label>
						<input type="text" class="form-control" id="inpuCP" name="inpuCP" value="<?php  if($sesion != "") echo $sesion["codigo_postal"];?>">
						<div class="" id="alertCp"></div>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-4">
						<label for="inpuColonia">Colonia</label>
						<input type="text" class="form-control" id="inpuColonia" name="inpuColonia" value="<?php  if($sesion != "") echo $sesion["colonia"];?>">
						<div class="" id="alertColonia"></div>
					</div>
					<div class="form-group col-md-4">
						<label for="inpuCalle">Calle</label>
						<input type="text" class="form-control" id="inpuCalle" name="inpuCalle" value="<?php  if($sesion != "") echo $sesion["calle"];?>">
						<div class="" id="alertCalle"></div>
					</div>
					<div class="form-group col-md-4">
						
					</div>
				</div>
				<div class="page-header"><small>DATOS EMERGENCIA</small></div>
				<hr>
				<div class="form-row" >
					<div class="form-group col-md-4">
						<label for="inpuTelEmergencia">Tel. Emergencia</label>
						<input type="text" class="form-control" id="inpuTelEmergencia" name="inpuTelEmergencia" value="<?php  if($sesion != "") echo $sesion["tetefono_emergencia"];?>">
						<div class="" id="alertEmergencia"></div>
					</div>
					<div class="form-group col-md-4">
						<label for="inpuParentesco">Parentesco</label>
						<input type="text" class="form-control" id="inpuParentesco" name="inpuParentesco" value="<?php  if($sesion != "") echo $sesion["parentesco"];?>">
						<div class="" id="alertParentesco"></div>
					</div>
				</div>
				<div class="page-header"><small>DATOS EXTRA</small></div>
				<hr>
				<div class="form-row ">
					<div class="form-group col-md-4">
						<label for="inpuTelNombreRecomienda">Nombre Recomienda</label>
						<input type="text" class="form-control" id="inpuNombreRecomienda" name="inpuNombreRecomienda" value="<?php  if($sesion != "") echo $sesion["nombre_Recomienda"];?>">
						<div class="" id="alertrecomienda"></div>
					</div>
					<div class="form-group col-md-8">
						<label for="inpuMotivo">Motivo de Consulta</label>
						<input type="text" class="form-control" id="inpuMotivo" name="inpuMotivo" value="<?php  if($sesion != "") echo $sesion["motivo"];?>">
						<div class="" id="alertMotivo"></div>
					</div>
				</div>
				<div class="page-header"><small>DATOS MEDICACION</small></div>
				<hr>
				<div class="form-row ">
					<div class="form-group col-md-4">
						<label for="selectMedicamento">Algún Medicamento Que Toma Actualmente</label>
						<select class="form-control" id="selectMedicamento" name="select">
					      <option value="1">Si</option>
					      <option value="2" selected>No</option>
					    </select>
					</div>

					<div class="form-group col-md-4" id="medicamento">
						<label for="inputNombreMedicamento">Nombre Medicamento</label>
						<input type="text" class="form-control" id="inputNombreMedicamento" name="inputNombreMedicamento">
						<div class="" id="alertMedicamneto"></div>
					</div>
				</div>
<!-- ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
				<div class="page-header titulo_padecimiento"><small>ANTECEDENTES HEREDOFAMILIARES (PADRES-ABUELOS-HERMANOS):</small></div>
				<hr>
				<div class="form-row col-md-12" id="parentesco">
					<div class="form-row col-md-12">
						<div class="form-group form-check  col-md-6">
							<input class="form-check-input parentesco" type="checkbox" value="DIABETES" id="checkDeabetes" name="deabetes[]">
			                    <label class="form-check-label" for="checkDeabetes">
			                        DIABETES
			                    </label>
						</div>
						<input type="hidden" class="form-control"  name="deabetes[]" aria-label="Small" value="0">
						<div class="form-group input-group input-group-sm col-md-6">
							<div class="input-group-prepend">
			                      <span class="input-group-text" id="inputGroup-sizing-sm">PARENTESCO</span>
			                  </div>
			                  <input type="text" class="form-control" id="checkDeabetesParentesco" name="deabetes[]" aria-label="Small" aria-describedby="inputGroup-sizing-sm" disabled>
							  <div class="" id="alertDiabetesAntecedente"></div>
							</div>
					</div> 
					<div class="form-row col-md-12">
						<div class="form-group form-check col-md-6">
							<input class="form-check-input parentesco" type="checkbox" value="HIPERTENSIÓN" id="checkHipertension" name="hipertension[]">
			                    <label class="form-check-label" for="checkHipertension">
			                        HIPERTENSIÓN
			                    </label>
						</div>
						<div class="form-group input-group input-group-sm col-md-6">
							<div class="input-group-prepend">
			                      <span class="input-group-text" id="inputGroup-sizing-sm">PARENTESCO</span>
			                  </div>
			                  <input type="hidden" class="form-control"  name="hipertension[]" aria-label="Small"  value = "0">
			                  <input type="text" class="form-control" id="checkHipertensionParentesco" name="hipertension[]" aria-label="Small" aria-describedby="inputGroup-sizing-sm" disabled>
							  <div class="" id="alertHipertensionAntecedente"></div>
							</div>
					</div> 
					<div class="form-row col-md-12">
						<div class="form-group form-check col-md-6">
							<input class="form-check-input parentesco" type="checkbox" value="Asma" id="checkAsma" name="Asma[]">
			                    <label class="form-check-label" for="checkAsma">
			                        ASMA
			                    </label>
						</div>
						<div class="form-group input-group input-group-sm col-md-6">
							<div class="input-group-prepend">
			                      <span class="input-group-text" id="inputGroup-sizing-sm">PARENTESCO</span>
			                  </div>
			                  <input type="hidden" class="form-control"  name="Asma[]" aria-label="Small"  value = "0">
			                  <input type="text" class="form-control" id="checkAsmaParntesco" name="Asma[]" aria-label="Small" aria-describedby="inputGroup-sizing-sm" disabled>
							  <div class="" id="alertAsmaAntecedente"></div>
						</div>
					</div> 
					<div class="form-row col-md-12">
						<div class="form-group form-check col-md-6">
							<input class="form-check-input parentesco" type="checkbox" value="CÁNCER" id="checkCancer" name="cancer[]">
			                    <label class="form-check-label" for="checkCancer">
			                        CÁNCER
			                    </label>
						</div>
						<div class="form-group input-group input-group-sm col-md-6">
							<div class="input-group-prepend">
			                      <span class="input-group-text" id="inputGroup-sizing-sm">PARENTESCO</span>
			                  </div>
			                  <input type="hidden" class="form-control"  name="cancer[]" aria-label="Small"  value = "0">
			                  <input type="text" class="form-control" id="checkCancerParntesco" name="cancer[]" aria-label="Small" aria-describedby="inputGroup-sizing-sm" disabled>
							  <div class="" id="alertCancerAntecedente"></div>
							</div>
					</div> 
					<div class="form-row col-md-12">
						<div class="form-group form-check col-md-6">
							<input class="form-check-input parentesco" type="checkbox" value="ALERGIAS" id="checkAlergias" name="alergias[]">
			                    <label class="form-check-label" for="checkalergias">
			                        ALERGIAS
			                    </label>
						</div>
						<div class="form-group input-group input-group-sm col-md-6">
							<div class="input-group-prepend">
			                      <span class="input-group-text" id="inputGroup-sizing-sm">PARENTESCO</span>
			                  </div>
			                  <input type="hidden" class="form-control"  name="alergias[]" aria-label="Small"  value = "0">
			                  <input type="text" class="form-control" id="checkAlergiasParntesco" name="alergias[]" aria-label="Small" aria-describedby="inputGroup-sizing-sm" disabled>
							  <div class="" id="alertAlergiasAntecedente"></div>
							</div>
					</div>
					<div class="form-row col-md-12">
						<div class="form-group form-check  col-md-2">
							<input class="form-check-input parentesco" type="checkbox" value="OTROS" id="checkOtrosFamilia" name="otros[]">
			                    <label class="form-check-label" for="checkOtrosFamilia">
			                        OTROS
			                    </label>
						</div>
						<div class="form-group input-group input-group-sm col-md-4 indique" id="otroIndique">							
								<div class="input-group-prepend hide">
				                    <span class="input-group-text" id="inputGroup-sizing-sm">INDIQUE</span>
				                </div>
				                <input type="text" class="form-control hide" name="otros[]" id="otroIndiquetxtHide" aria-label="Small" aria-describedby="inputGroup-sizing-sm">       
								<div class="" id="alertOtrosIndiqueAntecedente"></div>
							</div>
						<div class="form-group input-group input-group-sm col-md-6">
							<div class="input-group-prepend">
			                      <span class="input-group-text" id="inputGroup-sizing-sm">PARENTESCO</span>
			                  </div>
			                  <input type="text" class="form-control otroIndique" id="otroIndiquetxtParentesco" aria-label="Small" name="otros[]" aria-describedby="inputGroup-sizing-sm" disabled>
							  <div class="" id="alertOtrosParentescoAntecedente"></div>
							</div>
					</div> 
					<div class="form-row col-md-12">
						<div class="form-group form-check  col-md-6">
							<input class="form-check-input" type="checkbox" value="NINGUNO" id="checkNinguno" name="ninguno[]" checked>
							<input type="hidden" class="form-control"  name="ninguno[]" aria-label="Small"  value = "0">
							<input type="hidden" class="form-control"  name="ninguno[]" aria-label="Small"  value = "0">
							<input type="hidden" class="form-control"  name="ninguno[]" aria-label="Small"  value = "0">
			                    <label class="form-check-label" for="checkNinguno">
			                        NINGUNO
			                    </label>
						</div>
						<div class="form-group input-group input-group-sm   col-md-6">
							
						</div>
					</div>
				</div>
<!-- ::::::::::::::::::::::::::::::::::::::::padecimientos actuales:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
				<div class="page-header titulo_padecimiento"><small>ANTECEDENTES PERSONALES PATOLOGICOS:</small></div>
				<hr>
				<div class="form-row col-md-12" id="actuales">
					<div class="form-row col-md-12">
						<div class="form-group form-check  col-md-6">
							<input class="form-check-input actual" type="checkbox" value="DIABETES" id="checkDeabetesActual" name="actualDeabetes[]">
			                <label class="form-check-label" for="checkDeabetesActual">DIABETES</label>
						</div>
						<input type="hidden"  name="actualDeabetes[]" value="0">
						<div class="form-group input-group input-group-sm col-md-6">
							<div class="input-group-prepend">
			                      <span class="input-group-text" id="inputGroup-sizing-sm">TRATAMIENTO</span>
			                </div>
			                  <input type="text" class="form-control" id="checkDeabetesActualParentesco" name="actualDeabetes[]" aria-label="Small" aria-describedby="inputGroup-sizing-sm" disabled>
							  <div class="" id="alertDiabetesPersonal"></div>
						</div>
					</div> 
					<div class="form-row col-md-12">
						<div class="form-group form-check  col-md-6">
							<input class="form-check-input actual" type="checkbox" value="HIPERTENSIÓN" id="checkHipertensionActual" name="actualHipertension[]">
			                <label class="form-check-label" for="checkHipertensionActual">ENFERMEDADES CARDIOVASCULAES (HIPERTENSION)</label>
						</div>
						<input type="hidden" name="actualHipertension[]" value="0">
						<div class="form-group input-group input-group-sm   col-md-6">
							<div class="input-group-prepend">
			                      <span class="input-group-text" id="inputGroup-sizing-sm">TRATAMIENTO</span>
			                  </div>
			                  <input type="text" class="form-control" id="checkHipertensionActualParentesco" name="actualHipertension[]" aria-label="Small" aria-describedby="inputGroup-sizing-sm" disabled>
							  <div class="" id="alertHiperPersonal"></div>
						</div>
					</div> 
					<div class="form-row col-md-12">
						<div class="form-group form-check  col-md-6">
							<input class="form-check-input actual" type="checkbox" value="ASMA" id="checkAsmaActual" name="actualAsma[]">
			                <label class="form-check-label" for="checkAsmaActual">ASMA</label>
						</div>
						<input type="hidden" name="actualAsma[]" value="0">
						<div class="form-group input-group input-group-sm   col-md-6">
							<div class="input-group-prepend">
			                      <span class="input-group-text" id="inputGroup-sizing-sm">TRATAMIENTO</span>
			                  </div>
			                  <input type="text" class="form-control" id="checkAsmaActualParentesco" name="actualAsma[]" aria-label="Small" aria-describedby="inputGroup-sizing-sm" disabled>
							  <div class="" id="alertAsmPersonal"></div>
						</div>
					</div>
					<div class="form-row col-md-12">
						<div class="form-group form-check  col-md-6">
							<input class="form-check-input actual" type="checkbox" value="CÁNCER" id="checkCancerActual" name="actualCancer[]">
			                <label class="form-check-label" for="checkCancerActual">CÁNCER</label>
						</div>
						<input type="hidden" name="actualCancer[]" value="0">
						<div class="form-group input-group input-group-sm   col-md-6">
							<div class="input-group-prepend">
			                      <span class="input-group-text" id="inputGroup-sizing-sm">TRATAMIENTO</span>
			                  </div>
			                  <input type="text" class="form-control" id="checkCancerActualParentesco" name="actualCancer[]" aria-label="Small" aria-describedby="inputGroup-sizing-sm" disabled>
							  <div class="" id="alertCanPersonal"></div>
						</div>
					</div>
					<div class="form-row col-md-12">
						<div class="form-group form-check  col-md-6">
							<input class="form-check-input actual" type="checkbox" value="ALERGIAS" id="checkAlergiasActual" name="actualAlergias[]">
			                <label class="form-check-label" for="checkAlergiasActual">ALERGIAS</label>
						</div>
						<input type="hidden" name="actualAlergias[]" value="0">
						<div class="form-group input-group input-group-sm   col-md-6">
							<div class="input-group-prepend">
			                      <span class="input-group-text" id="inputGroup-sizing-sm">TRATAMIENTO</span>
			                  </div>
			                  <input type="text" class="form-control" id="checkAlergiasActualParentesco" name="actualAlergias[]" aria-label="Small" aria-describedby="inputGroup-sizing-sm" disabled>
							  <div class="" id="alertAlergPersonal"></div>
						</div>
					</div>
					<div class="form-row col-md-12">
						<div class="form-group form-check  col-md-6">
							<input class="form-check-input actual" type="checkbox" value="DISLIPIDEMIAS" id="checkDislipidemiasActual" name="actualDislipidemias[]">
			                <label class="form-check-label" for="checkDislipidemiasActual">DISLIPIDEMIAS (TRIGLICEDIDOS Y COLESTEROL)</label>
						</div>
						<input type="hidden" name="actualDislipidemias[]" value="0">
						<div class="form-group input-group input-group-sm   col-md-6">
							<div class="input-group-prepend">
			                      <span class="input-group-text" id="inputGroup-sizing-sm">TRATAMIENTO</span>
			                  </div>
			                  <input type="text" class="form-control" id="checkDislipidemiasActualParentesco" name="actualDislipidemias[]" aria-label="Small" aria-describedby="inputGroup-sizing-sm" disabled>
							  <div class="" id="alertDisliPersonal"></div>
						</div>
					</div>
					<div class="form-row col-md-12">
						<div class="form-group form-check  col-md-6">
							<input class="form-check-input actual" type="checkbox" value="HEPATICOS" id="checkHepaticosActual" name="actualHepaticos[]">
			                <label class="form-check-label" for="checkHepaticosActual">HEPATICOS</label>
						</div>
						<input type="hidden" name="actualHepaticos[]" value="0">
						<div class="form-group input-group input-group-sm   col-md-6">
							<div class="input-group-prepend">
			                      <span class="input-group-text" id="inputGroup-sizing-sm">TRATAMIENTO</span>
			                  </div>
			                  <input type="text" class="form-control" id="checkHepaticosActualParentesco" name="actualHepaticos[]" aria-label="Small" aria-describedby="inputGroup-sizing-sm" disabled>
							  <div class="" id="alertHepatiPersonal"></div>
						</div>
					</div> 
					<div class="form-row col-md-12">
						<div class="form-group form-check  col-md-6">
							<input class="form-check-input actual" type="checkbox" value="RENALES" id="checkRenalesActual" name="actualRenales[]">
			                <label class="form-check-label" for="checkRenalesActual">RENALES</label>
						</div>
						<input type="hidden" name="actualRenales[]" value="0">
						<div class="form-group input-group input-group-sm   col-md-6">
							<div class="input-group-prepend">
			                      <span class="input-group-text" id="inputGroup-sizing-sm">TRATAMIENTO</span>
			                  </div>
			                  <input type="text" class="form-control" id="checkRenalesActualParentesco" name="actualRenales[]" aria-label="Small" aria-describedby="inputGroup-sizing-sm" disabled>
							  <div class="" id="alertRenalesPersonal"></div>
						</div>
					</div>
					<div class="form-row col-md-12">
						<div class="form-group form-check  col-md-6">
							<input class="form-check-input actual" type="checkbox" value="URINARIOS" id="checkUrinariosActual" name="actualUrinarios[]">
			                <label class="form-check-label" for="checkUrinariosActual">URINARIOS</label>
						</div>
						<input type="hidden" name="actualUrinarios[]" value="0">
						<div class="form-group input-group input-group-sm   col-md-6">
							<div class="input-group-prepend">
			                      <span class="input-group-text" id="inputGroup-sizing-sm">TRATAMIENTO</span>
			                  </div>
			                  <input type="text" class="form-control" id="checkUrinariosActualParentesco" name="actualUrinarios[]" aria-label="Small" aria-describedby="inputGroup-sizing-sm" disabled>
							  <div class="" id="alertUrinariosPersonal"></div>
							</div>
					</div>
					<div class="form-row col-md-12">
						<div class="form-group form-check  col-md-6">
							<input class="form-check-input actual" type="checkbox" value="PROSTATA" id="checkProstataActual" name="actualProstata[]">
			                <label class="form-check-label" for="checkProstataActual">PROSTATA</label>
						</div>
						<input type="hidden" name="actualProstata[]" value="0">
						<div class="form-group input-group input-group-sm   col-md-6">
							<div class="input-group-prepend">
			                      <span class="input-group-text" id="inputGroup-sizing-sm">TRATAMIENTO</span>
			                  </div>
			                  <input type="text" class="form-control" id="checkProstataActualParentesco" name="actualProstata[]" aria-label="Small" aria-describedby="inputGroup-sizing-sm" disabled>
							  <div class="" id="alertProstataPersonal"></div>
						</div>
					</div>
					<div class="form-row col-md-12">
						<div class="form-group form-check  col-md-6">
							<input class="form-check-input actual" type="checkbox" value="DISFUNSION ERECTIL" id="checkDisfusionActual" name="actualDisfusion[]">
			                <label class="form-check-label" for="checkDisfusionActual">DISFUNSION ERECTIL</label>
						</div>
						<input type="hidden" name="actualDisfusion[]" value="0">
						<div class="form-group input-group input-group-sm   col-md-6">
							<div class="input-group-prepend">
			                      <span class="input-group-text" id="inputGroup-sizing-sm">TRATAMIENTO</span>
			                  </div>
			                  <input type="text" class="form-control" id="checkDisfusionActualParentesco" name="actualDisfusion[]" aria-label="Small" aria-describedby="inputGroup-sizing-sm" disabled>
							  <div class="" id="alertDisfuncionPersonal"></div>
						</div>
					</div>
					<div class="form-row col-md-12">
						<div class="form-group form-check  col-md-6">
							<input class="form-check-input actual" type="checkbox" value="HIPOTIROIDISMO" id="checkHipotiroidismoActual" name="actualHipotiroidismo[]">
			                <label class="form-check-label" for="checkHipotiroidismoActual">HIPOTIROIDISMO</label>
						</div>
						<input type="hidden" name="actualHipotiroidismo[]" value="0">
						<div class="form-group input-group input-group-sm   col-md-6">
							<div class="input-group-prepend">
			                      <span class="input-group-text" id="inputGroup-sizing-sm">TRATAMIENTO</span>
			                  </div>
			                  <input type="text" class="form-control" id="checkHipotiroidismoParentesco" name="actualHipotiroidismo[]" aria-label="Small" aria-describedby="inputGroup-sizing-sm" disabled>
							  <div class="" id="alertHipoPersonal"></div>
						</div>
					</div>
					<div class="form-row col-md-12">
						<div class="form-group form-check  col-md-6">
							<input class="form-check-input actual" type="checkbox" value="HIPERTIROIDISMO" id="checkHipertiroidismoActual" name="actualHipertiroidismo[]">
			                <label class="form-check-label" for="checkHipertiroidismoActual">HIPERTIROIDISMO</label>
						</div>
						<input type="hidden" name="actualHipertiroidismo[]" value="0">
						<div class="form-group input-group input-group-sm   col-md-6">
							<div class="input-group-prepend">
			                      <span class="input-group-text" id="inputGroup-sizing-sm">TRATAMIENTO</span>
			                  </div>
			                  <input type="text" class="form-control" id="checkHipertiroidismoParentesco" name="actualHipertiroidismo[]" aria-label="Small" aria-describedby="inputGroup-sizing-sm" disabled>
							  <div class="" id="alertHipertiroidismoPersonal"></div>
						</div>
					</div>
					<div class="form-row col-md-12">
						<div class="form-group form-check  col-md-6">
							<input class="form-check-input actual" type="checkbox" value="SINDROME DE OVARIO POLIQUISTICO" id="checkSindromeActual" name="actualSindrome[]">
			                <label class="form-check-label" for="checkSindromeActual">SINDROME DE OVARIO POLIQUISTICO</label>
						</div>
						<input type="hidden" name="actualSindrome[]" value="0">
						<div class="form-group input-group input-group-sm   col-md-6">
							<div class="input-group-prepend">
			                      <span class="input-group-text" id="inputGroup-sizing-sm">TRATAMIENTO</span>
			                  </div>
			                  <input type="text" class="form-control" id="checkSindromeParentesco" name="actualSindrome[]" aria-label="Small" aria-describedby="inputGroup-sizing-sm" disabled>
							  <div class="" id="alertSindromePersonal"></div>
						</div>
					</div>
					<div class="form-row col-md-12">
						<div class="form-group form-check  col-md-2">
							<input class="form-check-input actual" type="checkbox" value="OTROS" id="otroActual" name="actualOtro[]">
			                <label class="form-check-label" for="otroActual">OTROS</label>
						</div>
						<div class="form-group input-group input-group-sm col-md-4 indique" id="otroIndiqueActual">							
								<div class="input-group-prepend hide">
				                    <span class="input-group-text" id="inputGroup-sizing-sm">INDIQUE</span>
				                </div>
				                <input type="text" class="form-control hide" id="hideOtroActual" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="actualOtro[]">       
								<div class="" id="alertotroHidePersonal"></div> 
						</div>
						<div class="form-group input-group input-group-sm   col-md-6">
							<div class="input-group-prepend">
			                      <span class="input-group-text" id="inputGroup-sizing-sm">TRATAMIENTO</span>
			                  </div>
			                  <input type="text" class="form-control otroIndiqueActual" id="otrotratamientoActual" name="actualOtro[]" aria-label="Small" aria-describedby="inputGroup-sizing-sm" disabled>
							  <div class="" id="alertTratamientoPersonal"></div> 
						</div>
					</div> 
					<div class="form-row col-md-12">
						<div class="form-group form-check  col-md-6">
							<input class="form-check-input" type="checkbox" value="NINGUNO" id="checkNingunoActual" name="actualNinguno[]" checked>
							<input type="hidden" class="form-control"  name="actualNinguno[]" aria-label="Small"  value = "0">
							<input type="hidden" class="form-control"  name="actualNinguno[]" aria-label="Small"  value = "0">
							<input type="hidden" class="form-control"  name="actualNinguno[]" aria-label="Small"  value = "0">
			                    <label class="form-check-label" for="checkNingunoActual">
			                        NINGUNO
			                    </label>
						</div>
						<div class="form-group input-group input-group-sm   col-md-6">							
						</div>
					</div>
				</div>
<!-- ::::::::::::::::::::::::::::::::::::::::::::::::::::::cirugias::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
				<div class="page-header titulo_cirugia"><small>¿Le han realizado alguna cirugia actualmente?</small></div>
					<div>
				<hr>
					  <input type="radio" id="siCheck" name="cirugia" value="1">
					  <label for="siCheck">SI</label>
					</div>
					<div>
					  <input type="radio" id="noCheck" name="cirugia" value="2" checked>
					  <label for="noCheck">NO</label>
					</div>
				<div class="form-row col-md-12" id="cirugias">
					<div class="form-row col-md-12">
						<div class="form-group input-group input-group-sm col-md-6">
							<div class="input-group-prepend">
								<span class="input-group-text" id="inputGroup-sizing-sm">NOMBRE</span>
							</div>
							<input type="text" class="form-control disableoff" id="idNameOperacionuno" aria-label="Small" name="operacionUno[]" aria-describedby="inputGroup-sizing-sm" disabled>
							<div class="" id="alertOperacionNameUno"></div> 
						</div>
						<div class="form-group input-group input-group-sm col-md-6">
							<div class="input-group-prepend">
								<span class="input-group-text" id="inputGroup-sizing-sm">Fecha</span>
							</div>
								<input type="date" class="form-control disableoff" id="idFechaOperacionuno" aria-label="Small" name="operacionUno[]" aria-describedby="inputGroup-sizing-sm" disabled>
								<div class="" id="alertOperacionFechaUno"></div> 
						</div>
					</div>
					<div class="form-row col-md-12">
						<div class="form-group input-group input-group-sm col-md-6">
							<div class="input-group-prepend">
								<span class="input-group-text" id="inputGroup-sizing-sm">NOMBRE</span>
							</div>
							<input type="text" class="form-control disableoff" id="idNameOperacionDos" aria-label="Small" name="operacionDos[]" aria-describedby="inputGroup-sizing-sm" disabled>
							<div class="" id="alertOperacionNameDos"></div> 
						</div>
						<div class="form-group input-group input-group-sm   col-md-6">
							<div class="input-group-prepend">
								<span class="input-group-text " id="inputGroup-sizing-sm">Fecha</span>
							</div>
							<input type="date" class="form-control disableoff" id="idFechaOperacionDos" aria-label="Small" name="operacionDos[]" aria-describedby="inputGroup-sizing-sm" disabled>
							<div class="" id="alertOperacionFechaDos"></div> 
						</div>
					</div>
					<div class="form-row col-md-12">
						<div class="form-group input-group input-group-sm col-md-6">
							<div class="input-group-prepend">
								<span class="input-group-text " id="inputGroup-sizing-sm">NOMBRE</span>
							</div>
							<input type="text" class="form-control disableoff" id="idNameOperacionTres" aria-label="Small" name="operacionTres[]" aria-describedby="inputGroup-sizing-sm" disabled>
							<div class="" id="alertOperacionNameTres"></div>
						</div>
						<div class="form-group input-group input-group-sm   col-md-6">
							<div class="input-group-prepend">
								<span class="input-group-text " id="inputGroup-sizing-sm">Fecha</span>
							</div>
							<input type="date" class="form-control disableoff" id="idFechaOperacionTres" aria-label="Small" name="operacionTres[]" aria-describedby="inputGroup-sizing-sm" disabled>
							<div class="" id="alertOperacionFechaTres"></div> 
						</div>
					</div>
				</div>
<!-- :::::::::::::::::::::::::::::::::datos mujeres:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
				<div class="page-header titulo_mujeres"><small>DATOS MUJER</small></div>
				<hr>
				<div class="form-row col-md-12" id="mujeres">
					<div class="form-group col-md-3">
						<label for="unputEmbarazos">Numero de Embarazos</label>
						<input type="number" class="form-control hideOn" name="embarazos" id="unputEmbarazos" max="10">
						<div class="" id="alertEmbarazo"></div> 
					</div>
					<div class="form-group col-md-3">
						<label for="inputNacidosTermino">Nacidos al termino</label>
						<input type="number" class="form-control hideOn" name="namcidosTermino" id="inputNacidosTermino">
						<div class="" id="alertTermino"></div> 
					</div>
					<div class="form-group col-md-3">
						<label for="inputNacidosPre">Nacidos al pretermino</label>
						<input type="number" class="form-control hideOn" name="nacidosPretermino" id="inputNacidosPre">
						<div class="" id="alertPreTermino"></div> 
					</div>
					<div class="form-group col-md-3">
						<label for="inputultimoEmbarazo">Fecha del ultimo parto</label>
						<input type="date" class="form-control hideOn" name="ultimoEmbarazo" id="inputultimoEmbarazo">
						<div class="" id="alertpartoLast"></div> 
					</div>
				</div>
				<div class="form-row col-md-12" id="mujeres">
					<div class="form-group col-md-4">
						<label for="unputregla">Fecha de ultima regla</label>
						<input type="date" class="form-control hideOn" name="regla" id="unputregla">
						<div class="" id="alertRegla"></div> 
					</div>
					<div class="form-group col-md-4">
						<label for="inputMedotoAnticonceptivo">Metodo Anticonceptivo actual</label>
						<input type="text" class="form-control hideOn" name="MedotoAnticonceptivo" id="MedotoAnticonceptivo">
						<div class="" id="alertAnticonceptivo"></div> 
					</div>
					<div class="form-group col-md-4">
						
					</div>
				</div>
<!-- :::::::::::::::::::::::::::::::::tratamiento Anterior:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
				<div class="page-header titulo_anterior"><small>CONTROL DE PESO ANTERIOR</small></div>
				<hr>
				<div class="form-row col-md-12" id="anterior">
					<div class="form-control col-md-5 tratamiento">
						<label for="intputSexo" id="intputSexo">Tratamientos de control de peso anteriormente</label>
						<div class="custom-control custom-radio custom-control-inline radio-Sexo">
						  <input type="radio" id="customRadioControl" name="radioTratamiento" value="1">
						  <label  for="customRadioControl">SI</label>
						</div>
						<div class="custom-control custom-radio custom-control-inline radio-Sexo">
						  <input type="radio" id="customRadioControl2" name="radioTratamiento"  value="2" checked>
						  <label  for="customRadioControl2">NO</label>
						</div>
					</div>
					<div class="form-group col-md-7">
						
						</div>
					</div>
					<div class="form-row col-md-12" id="anteriorMedicamento">
						<label for="medicamentoAnterior">¿Que medicamentos consumio durante el tratamiento de control de peso anterior?</label>
						<input type="text" class="form-control anteriorMedicamento" name="medicamentoAnterior" id="medicamentoAnterior" placeholder="si es mas de un medicamento separalo por una coma (,)" disabled>
						<div class="" id="alertTratamientoControl"></div> 
				</div>
				<!-- <button class="btn btn-primary" type="submit">Submit form</button> -->
				<input type="submit" class="btn btn-primary" id="btn-env" values="enviar" name="enviar">
			</form>
		</div>
	</div>
</div>


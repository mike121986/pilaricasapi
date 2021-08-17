<div class="card border-0 shadow my-2">
	<div class="card-body p-5">
		<?php 
		require_once 'views/layout/editarNavs.php';
		require_once 'views/layout/cabeceraLogo.php';
		$sesion = ""; 
		 if(isset($_SESSION['formulario'])){$sesion = $_SESSION['formulario']['error'];} 
		 ?>
		<div class="texcto">
			<?php if($sesion != "") echo '<p class="alert alert-danger error" role="alert">'.$_SESSION['formulario']["error"]."</p>";
			 if(isset($_SESSION['statusSave'])) echo '<p class="alert alert-success error" role="alert">'.$_SESSION['statusSave']."</p>";
			 Utls::deleteSession('statusSave');
			 ?>
		</div>
		<div class="tab-content" id="nav-tabContent" style="height: auto">
			<form id="registro" action="<?=base_url?>Paciente/updateHeredofamiliar&id=012020080006" method="POST" class="tab-pane fade show active" role="tabpanel" aria-labelledby="nav-home-tab">
<!-- ::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
                <div class="page-header titulo_padecimiento"><small>ANTECEDENTES HEREDOFAMILIARES (PADRES-ABUELOS-HERMANOS):</small></div>
				<hr>
				<div class="form-row col-md-12" id="parentesco">
					<div class="form-row col-md-12">
						<div class="form-group form-check  col-md-6">
							<input class="form-check-input parentesco" type="checkbox" value="DIABETES" id="checkDeabetes" name="deabetes[]" <?php if(in_array('DIABETES',$name)){echo 'checked="checked"';$diabetes=array_search('DIABETES',$name);}?>>
			                    <label class="form-check-label" for="checkDeabetes">
			                        DIABETES
			                    </label>
						</div>
						<input type="hidden" class="form-control"  name="deabetes[]" aria-label="Small" value="0">
						<div class="form-group input-group input-group-sm col-md-6">
							<div class="input-group-prepend">
			                      <span class="input-group-text" id="inputGroup-sizing-sm">PARENTESCO</span>
			                  </div>
			                  <input type="text" class="form-control" id="checkDeabetesParentesco" name="deabetes[]" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="<?php if(in_array('DIABETES',$name)){echo $parentesco[$diabetes];}?>"<?php if($diabetes == '-1')echo ' disabled=disabled ';?>>
						</div>
					</div> 
					<div class="form-row col-md-12">
						<div class="form-group form-check col-md-6">
							<input class="form-check-input parentesco" type="checkbox" value="HIPERTENSIÓN" id="checkHipertension" name="hipertension[]" <?php if(in_array('HIPERTENSIÓN',$name)){echo 'checked="checked"';$hiper=array_search('HIPERTENSIÓN',$name);}?>>
			                    <label class="form-check-label" for="checkHipertension">
			                        HIPERTENSIÓN
			                    </label>
						</div>
						<div class="form-group input-group input-group-sm col-md-6">
							<div class="input-group-prepend">
			                      <span class="input-group-text" id="inputGroup-sizing-sm">PARENTESCO</span>
			                  </div>
			                  <input type="hidden" class="form-control"  name="hipertension[]" aria-label="Small"  value="0">
			                  <input type="text" class="form-control" id="checkHipertensionParentesco" name="hipertension[]" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="<?php if(in_array('HIPERTENSIÓN',$name)){echo $parentesco[$hiper];}?>"<?php if($hiper == '-1')echo ' disabled=disabled '; ?>>
						</div>
					</div> 
					<div class="form-row col-md-12">
						<div class="form-group form-check col-md-6">
							<input class="form-check-input parentesco" type="checkbox" value="Asma" id="checkAsma" name="Asma[]" <?php if(in_array('Asma',$name)){echo 'checked="checked"';$asma=array_search('Asma',$name);}?>>
			                    <label class="form-check-label" for="checkAsma">
			                        ASMA
			                    </label>
						</div>
						<div class="form-group input-group input-group-sm col-md-6">
							<div class="input-group-prepend">
			                      <span class="input-group-text" id="inputGroup-sizing-sm">PARENTESCO</span>
			                  </div>
			                  <input type="hidden" class="form-control"  name="Asma[]" aria-label="Small"  value="0">
			                  <input type="text" class="form-control" id="checkAsmaParntesco" name="Asma[]" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="<?php if(in_array('Asma',$name)){echo $parentesco[$asma];}?>"<?php if($asma == '-1')echo ' disabled=disabled '; ?>>
						</div>
					</div> 
					<div class="form-row col-md-12">
						<div class="form-group form-check col-md-6">
							<input class="form-check-input parentesco" type="checkbox" value="CÁNCER" id="checkCancer" name="cancer[]" <?php if(in_array('CÁNCER',$name)){echo 'checked="checked"';$cancer=array_search('CÁNCER',$name);}?>>
			                    <label class="form-check-label" for="checkCancer">
			                        CÁNCER
			                    </label>
						</div>
						<div class="form-group input-group input-group-sm col-md-6">
							<div class="input-group-prepend">
			                      <span class="input-group-text" id="inputGroup-sizing-sm">PARENTESCO</span>
			                  </div>
			                  <input type="hidden" class="form-control"  name="cancer[]" aria-label="Small"  value="0">
			                  <input type="text" class="form-control" id="checkCancerParntesco" name="cancer[]" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="<?php if(in_array('CÁNCER',$name)){echo $parentesco[$cancer];}?>"<?php if($cancer == '-1')echo ' disabled=disabled '; ?>>
						</div>
					</div> 
					<div class="form-row col-md-12">
						<div class="form-group form-check col-md-6">
							<input class="form-check-input parentesco" type="checkbox" value="ALERGIAS" id="checkAlergias" name="alergias[]" <?php if(in_array('ALERGIAS',$name)){echo 'checked="checked"';$aler=array_search('ALERGIAS',$name);}?>>
			                    <label class="form-check-label" for="checkAlergias">
			                        ALERGIAS
			                    </label>
						</div>
						<div class="form-group input-group input-group-sm col-md-6">
							<div class="input-group-prepend">
			                      <span class="input-group-text" id="inputGroup-sizing-sm">PARENTESCO</span>
			                  </div>
			                  <input type="hidden" class="form-control"  name="alergias[]" aria-label="Small"  value="0">
			                  <input type="text" class="form-control" id="checkAlergiasParntesco" name="alergias[]" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="<?php if(in_array('ALERGIAS',$name)){echo $parentesco[$aler];}?>"<?php if($aler == '-1')echo ' disabled=disabled '; ?>>
						</div>
					</div>
					<div class="form-row col-md-12">
						<div class="form-group form-check  col-md-2">
							<input class="form-check-input parentesco" type="checkbox" value="OTROS" id="checkOtrosFamilia" name="otros[]" <?php if(in_array('OTROS',$name)){echo 'checked="checked"';$otro=array_search('OTROS',$name);}?>>
			                    <label class="form-check-label" for="checkOtrosFamilia">
			                        OTROS
			                    </label>
						</div>
						<div class="form-group input-group input-group-sm col-md-4 <?php if(in_array('OTROS',$name)){echo 'ondique';}else{ echo 'indique';}?>" id="otroIndique">							
								<div class="input-group-prepend hide">
				                    <span class="input-group-text" id="inputGroup-sizing-sm">INDIQUE</span>
				                </div>
				                <input type="text" class="form-control hide" id="hide" name="otros[]" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="<?php if(in_array('OTROS',$name)){echo $indique[$otro];}?>">      
			             </div>
						<div class="form-group input-group input-group-sm col-md-6">
							<div class="input-group-prepend">
			                      <span class="input-group-text" id="inputGroup-sizing-sm">PARENTESCO</span>
			                  </div>
			                  <input type="text" class="form-control otroIndique" aria-label="Small" name="otros[]" aria-describedby="inputGroup-sizing-sm" value="<?php if(in_array('OTROS',$name)){echo $parentesco[$otro];}?>"<?php if($otro == '-1')echo ' disabled=disabled '; ?>>
						</div>
					</div> 
					<div class="form-row col-md-12">
						<div class="form-group form-check  col-md-6">
							<input class="form-check-input" type="checkbox" value="NINGUNO" id="checkNinguno" name="ninguno[]" <?php if(in_array('NINGUNO',$name)){echo 'checked="checked"';}?>>
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
				<input type="submit" class="btn btn-primary" id="btn-env" values="enviar" name="enviar">
			</form>
		</div>
	</div>
</div>


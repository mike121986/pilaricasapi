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
			<form id="registro" action="<?=base_url?>Paciente/updatePatologico&id=<?=$_GET['id']?>" method="POST" class="tab-pane fade show active" role="tabpanel" aria-labelledby="nav-home-tab">
<!-- ::::::::::::::::::::::::::::::::::::::::padecimientos actuales:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
<div class="page-header titulo_padecimiento"><small>ANTECEDENTES PERSONALES PATOLOGICOS:</small></div>
				<hr>
				<div class="form-row col-md-12" id="actuales">
					<div class="form-row col-md-12">
						<div class="form-group form-check  col-md-6">
							<input class="form-check-input actual" type="checkbox" value="DIABETES" id="checkDeabetesActual" name="actualDeabetes[]" <?php if(in_array('DIABETES',$name)){echo 'checked="checked"';$diabetes=array_search('DIABETES',$name);}?>>
			                <label class="form-check-label" for="checkDeabetesActual">DIABETES</label>
						</div>
						<input type="hidden"  name="actualDeabetes[]" value="0">
						<div class="form-group input-group input-group-sm col-md-6">
							<div class="input-group-prepend">
			                      <span class="input-group-text" id="inputGroup-sizing-sm">TRATAMIENTO</span>
			                  </div>
			                  <input type="text" class="form-control" id="checkDeabetesActualParentesco" name="actualDeabetes[]" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="<?php if(in_array('DIABETES',$name)){echo $parentesco[$diabetes];}?>"<?php if($diabetes == '-1')echo ' disabled=disabled ';?>>
						</div>
					</div> 
					<div class="form-row col-md-12">
						<div class="form-group form-check  col-md-6">
							<input class="form-check-input actual" type="checkbox" value="HIPERTENSIÓN" id="checkHipertensionActual" name="actualHipertension[]" <?php if(in_array('HIPERTENSIÓN',$name)){echo 'checked="checked"';$hiper=array_search('HIPERTENSIÓN',$name);}?>>
			                <label class="form-check-label" for="checkHipertensionActual">ENFERMEDADES CARDIOVASCULAES (HIPERTENSION)</label>
						</div>
						<input type="hidden" name="actualHipertension[]" value="0">
						<div class="form-group input-group input-group-sm   col-md-6">
							<div class="input-group-prepend">
			                      <span class="input-group-text" id="inputGroup-sizing-sm">TRATAMIENTO</span>
			                  </div>
			                  <input type="text" class="form-control" id="checkHipertensionActualParentesco" name="actualHipertension[]" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="<?php if(in_array('HIPERTENSIÓN',$name)){echo $parentesco[$hiper];}?>"<?php if($hiper == '-1')echo ' disabled=disabled '; ?>>
						</div>
					</div> 
					<div class="form-row col-md-12">
						<div class="form-group form-check  col-md-6">
							<input class="form-check-input actual" type="checkbox" value="ASMA" id="checkAsmaActual" name="actualAsma[]" <?php if(in_array('ASMA',$name)){echo 'checked="checked"';$asma=array_search('ASMA',$name);}?>>
			                <label class="form-check-label" for="checkAsmaActual">ASMA</label>
						</div>
						<input type="hidden" name="actualAsma[]" value="0">
						<div class="form-group input-group input-group-sm   col-md-6">
							<div class="input-group-prepend">
			                      <span class="input-group-text" id="inputGroup-sizing-sm">TRATAMIENTO</span>
			                  </div>
			                  <input type="text" class="form-control" id="checkAsmaActualParentesco" name="actualAsma[]" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="<?php if(in_array('ASMA',$name)){echo $parentesco[$asma];}?>"<?php if($asma == '-1')echo ' disabled=disabled '; ?>>
						</div>
					</div>
					<div class="form-row col-md-12">
						<div class="form-group form-check  col-md-6">
							<input class="form-check-input actual" type="checkbox" value="CÁNCER" id="checkCancerActual" name="actualCancer[]" <?php if(in_array('CÁNCER',$name)){echo 'checked="checked"';$cancer=array_search('CÁNCER',$name);}?>>
			                <label class="form-check-label" for="checkCancerActual">CÁNCER</label>
						</div>
						<input type="hidden" name="actualCancer[]" value="0">
						<div class="form-group input-group input-group-sm   col-md-6">
							<div class="input-group-prepend">
			                      <span class="input-group-text" id="inputGroup-sizing-sm">TRATAMIENTO</span>
			                  </div>
			                  <input type="text" class="form-control" id="checkCancerActualParentesco" name="actualCancer[]" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="<?php if(in_array('CÁNCER',$name)){echo $parentesco[$cancer];}?>"<?php if($cancer == '-1')echo ' disabled=disabled '; ?>>
						</div>
					</div>
					<div class="form-row col-md-12">
						<div class="form-group form-check  col-md-6">
							<input class="form-check-input actual" type="checkbox" value="ALERGIAS" id="checkAlergiasActual" name="actualAlergias[]" <?php if(in_array('ALERGIAS',$name)){echo 'checked="checked"';$aler=array_search('ALERGIAS',$name);}?>>
			                <label class="form-check-label" for="checkAlergiasActual">ALERGIAS</label>
						</div>
						<input type="hidden" name="actualAlergias[]" value="0">
						<div class="form-group input-group input-group-sm   col-md-6">
							<div class="input-group-prepend">
			                      <span class="input-group-text" id="inputGroup-sizing-sm">TRATAMIENTO</span>
			                  </div>
			                  <input type="text" class="form-control" id="checkAlergiasActualParentesco" name="actualAlergias[]" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="<?php if(in_array('ALERGIAS',$name)){echo $parentesco[$aler];}?>"<?php if($aler == '-1')echo ' disabled=disabled '; ?>>
						</div>
					</div>
					<div class="form-row col-md-12">
						<div class="form-group form-check  col-md-6">
							<input class="form-check-input actual" type="checkbox" value="DISLIPIDEMIAS" id="checkDislipidemiasActual" name="actualDislipidemias[]" <?php if(in_array('DISLIPIDEMIAS',$name)){echo 'checked="checked"';$dis=array_search('DISLIPIDEMIAS',$name);}?>>
			                <label class="form-check-label" for="checkDislipidemiasActual">DISLIPIDEMIAS (TRIGLICEDIDOS Y COLESTEROL)</label>
						</div>
						<input type="hidden" name="actualDislipidemias[]" value="0">
						<div class="form-group input-group input-group-sm   col-md-6">
							<div class="input-group-prepend">
			                      <span class="input-group-text" id="inputGroup-sizing-sm">TRATAMIENTO</span>
			                  </div>
			                  <input type="text" class="form-control" id="checkDislipidemiasActualParentesco" name="actualDislipidemias[]" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="<?php if(in_array('DISLIPIDEMIAS',$name)){echo $parentesco[$dis];}?>"<?php if($dis == '-1')echo ' disabled=disabled '; ?>>
						</div>
					</div>
					<div class="form-row col-md-12">
						<div class="form-group form-check  col-md-6">
							<input class="form-check-input actual" type="checkbox" value="HEPATICOS" id="checkHepaticosActual" name="actualHepaticos[]" <?php if(in_array('HEPATICOS',$name)){echo 'checked="checked"';$hepa=array_search('HEPATICOS',$name);}?>>
			                <label class="form-check-label" for="checkHepaticosActual">HEPATICOS</label>
						</div>
						<input type="hidden" name="actualHepaticos[]" value="0">
						<div class="form-group input-group input-group-sm   col-md-6">
							<div class="input-group-prepend">
			                      <span class="input-group-text" id="inputGroup-sizing-sm">TRATAMIENTO</span>
			                  </div>
			                  <input type="text" class="form-control" id="checkHepaticosActualParentesco" name="actualHepaticos[]" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="<?php if(in_array('HEPATICOS',$name)){echo $parentesco[$hepa];}?>"<?php if($hepa == '-1')echo ' disabled=disabled '; ?>>
						</div>
					</div> 
					<div class="form-row col-md-12">
						<div class="form-group form-check  col-md-6">
							<input class="form-check-input actual" type="checkbox" value="RENALES" id="checkRenalesActual" name="actualRenales[]" <?php if(in_array('RENALES',$name)){echo 'checked="checked"';$renales=array_search('RENALES',$name);}?>>
			                <label class="form-check-label" for="checkRenalesActual">RENALES</label>
						</div>
						<input type="hidden" name="actualRenales[]" value="0">
						<div class="form-group input-group input-group-sm   col-md-6">
							<div class="input-group-prepend">
			                      <span class="input-group-text" id="inputGroup-sizing-sm">TRATAMIENTO</span>
			                  </div>
			                  <input type="text" class="form-control" id="checkRenalesActualParentesco" name="actualRenales[]" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="<?php if(in_array('RENALES',$name)){echo $parentesco[$renales];}?>"<?php if($renales == '-1')echo ' disabled=disabled '; ?>>
						</div>
					</div>
					<div class="form-row col-md-12">
						<div class="form-group form-check  col-md-6">
							<input class="form-check-input actual" type="checkbox" value="URINARIOS" id="checkUrinariosActual" name="actualUrinarios[]" <?php if(in_array('URINARIOS',$name)){echo 'checked="checked"';$urinarios=array_search('URINARIOS',$name);}?>>
			                <label class="form-check-label" for="checkUrinariosActual">URINARIOS</label>
						</div>
						<input type="hidden" name="actualUrinarios[]" value="0">
						<div class="form-group input-group input-group-sm   col-md-6">
							<div class="input-group-prepend">
			                      <span class="input-group-text" id="inputGroup-sizing-sm">TRATAMIENTO</span>
			                  </div>
			                  <input type="text" class="form-control" id="checkUrinariosActualParentesco" name="actualUrinarios[]" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="<?php if(in_array('URINARIOS',$name)){echo $parentesco[$urinarios];}?>"<?php if($urinarios == '-1')echo ' disabled=disabled '; ?>>
						</div>
					</div>
					<div class="form-row col-md-12">
						<div class="form-group form-check  col-md-6">
							<input class="form-check-input actual" type="checkbox" value="PROSTATA" id="checkProstataActual" name="actualProstata[]" <?php if(in_array('PROSTATA',$name)){echo 'checked="checked"';$prostata=array_search('PROSTATA',$name);}?>>
			                <label class="form-check-label" for="checkProstataActual">PROSTATA</label>
						</div>
						<input type="hidden" name="actualProstata[]" value="0">
						<div class="form-group input-group input-group-sm   col-md-6">
							<div class="input-group-prepend">
			                      <span class="input-group-text" id="inputGroup-sizing-sm">TRATAMIENTO</span>
			                  </div>
			                  <input type="text" class="form-control" id="checkProstataActualParentesco" name="actualProstata[]" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="<?php if(in_array('PROSTATA',$name)){echo $parentesco[$prostata];}?>"<?php if($prostata == '-1')echo ' disabled=disabled '; ?>>
						</div>
					</div>
					<div class="form-row col-md-12">
						<div class="form-group form-check  col-md-6">
							<input class="form-check-input actual" type="checkbox" value="DISFUNSION ERECTIL" id="checkDisfusionActual" name="actualDisfusion[]" <?php if(in_array('DISFUNSION ERECTIL',$name)){echo 'checked="checked"';$erectil=array_search('DISFUNSION ERECTIL',$name);}?>>
			                <label class="form-check-label" for="checkDisfusionActual">DISFUNSION ERECTIL</label>
						</div>
						<input type="hidden" name="actualDisfusion[]" value="0">
						<div class="form-group input-group input-group-sm   col-md-6">
							<div class="input-group-prepend">
			                      <span class="input-group-text" id="inputGroup-sizing-sm">TRATAMIENTO</span>
			                  </div>
			                  <input type="text" class="form-control" id="checkDisfusionActualParentesco" name="actualDisfusion[]" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="<?php if(in_array('DISFUNSION ERECTIL',$name)){echo $parentesco[$erectil];}?>"<?php if($erectil == '-1')echo ' disabled=disabled '; ?>>
						</div>
					</div>
					<div class="form-row col-md-12">
						<div class="form-group form-check  col-md-6">
							<input class="form-check-input actual" type="checkbox" value="HIPOTIROIDISMO" id="checkHipotiroidismoActual" name="actualHipotiroidismo[]" <?php if(in_array('HIPOTIROIDISMO',$name)){echo 'checked="checked"';$hipo=array_search('HIPOTIROIDISMO',$name);}?>>
			                <label class="form-check-label" for="checkHipotiroidismoActual">HIPOTIROIDISMO</label>
						</div>
						<input type="hidden" name="actualHipotiroidismo[]" value="0">
						<div class="form-group input-group input-group-sm   col-md-6">
							<div class="input-group-prepend">
			                      <span class="input-group-text" id="inputGroup-sizing-sm">TRATAMIENTO</span>
			                  </div>
			                  <input type="text" class="form-control" id="checkHipotiroidismoParentesco" name="actualHipotiroidismo[]" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="<?php if(in_array('HIPOTIROIDISMO',$name)){echo $parentesco[$hipo];}?>"<?php if($hipo == '-1')echo ' disabled=disabled '; ?>>
						</div>
					</div>
					<div class="form-row col-md-12">
						<div class="form-group form-check  col-md-6">
							<input class="form-check-input actual" type="checkbox" value="HIPERTIROIDISMO" id="checkHipertiroidismoActual" name="actualHipertiroidismo[]" <?php if(in_array('HIPERTIROIDISMO',$name)){echo 'checked="checked"';$hiper=array_search('HIPERTIROIDISMO',$name);}?>>
			                <label class="form-check-label" for="checkHipertiroidismoActual">HIPERTIROIDISMO</label>
						</div>
						<input type="hidden" name="actualHipertiroidismo[]" value="0">
						<div class="form-group input-group input-group-sm   col-md-6">
							<div class="input-group-prepend">
			                      <span class="input-group-text" id="inputGroup-sizing-sm">TRATAMIENTO</span>
			                  </div>
			                  <input type="text" class="form-control" id="checkHipertiroidismoParentesco" name="actualHipertiroidismo[]" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="<?php if(in_array('HIPERTIROIDISMO',$name)){echo $parentesco[$hiper];}?>"<?php if($hiper == '-1')echo ' disabled=disabled '; ?>>
						</div>
					</div>
					<div class="form-row col-md-12">
						<div class="form-group form-check  col-md-6">
							<input class="form-check-input actual" type="checkbox" value="SINDROME DE OVARIO POLIQUISTICO" id="checkSindromeActual" name="actualSindrome[]" <?php if(in_array('SINDROME DE OVARIO POLIQUISTICO',$name)){echo 'checked="checked"';$sindrome=array_search('SINDROME DE OVARIO POLIQUISTICO',$name);}?>>
			                <label class="form-check-label" for="checkSindromeActual">SINDROME DE OVARIO POLIQUISTICO</label>
						</div>
						<input type="hidden" name="actualSindrome[]" value="0">
						<div class="form-group input-group input-group-sm   col-md-6">
							<div class="input-group-prepend">
			                      <span class="input-group-text" id="inputGroup-sizing-sm">TRATAMIENTO</span>
			                  </div>
			                  <input type="text" class="form-control" id="checkSindromeParentesco" name="actualSindrome[]" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="<?php if(in_array('SINDROME DE OVARIO POLIQUISTICO',$name)){echo $parentesco[$sindrome];}?>"<?php if($sindrome == '-1')echo ' disabled=disabled '; ?>>
						</div>
					</div>
					<div class="form-row col-md-12">
						<div class="form-group form-check  col-md-2">
							<input class="form-check-input actual" type="checkbox" value="OTROS" id="otroActual" name="actualOtro[]" <?php if(in_array('OTROS',$name)){echo 'checked="checked"';$otro=array_search('OTROS',$name);}?>>
			                <label class="form-check-label" for="otroActual">OTROS</label>
						</div>
						<div class="form-group input-group input-group-sm col-md-4 <?php if(in_array('OTROS',$name)){echo 'ondique';}else{ echo 'indique';}?>" id="otroIndiqueActual">							
								<div class="input-group-prepend hide">
				                    <span class="input-group-text" id="inputGroup-sizing-sm">INDIQUE</span>
				                </div>
				                <input type="text" class="form-control hide" id="hide" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="actualOtro[]" value="<?php if(in_array('OTROS',$name)){echo $indique[$otro];}?>">      
			             </div>
						<div class="form-group input-group input-group-sm   col-md-6">
							<div class="input-group-prepend">
			                      <span class="input-group-text" id="inputGroup-sizing-sm">TRATAMIENTO</span>
			                  </div>
			                  <input type="text" class="form-control otroIndiqueActual" name="actualOtro[]" aria-label="Small" aria-describedby="inputGroup-sizing-sm" value="<?php if(in_array('OTROS',$name)){echo $parentesco[$otro];}?>"<?php if($otro == '-1')echo ' disabled=disabled '; ?>>
						</div>
					</div> 
					<div class="form-row col-md-12">
						<div class="form-group form-check  col-md-6">
							<input class="form-check-input" type="checkbox" value="NINGUNO" id="checkNingunoActual" name="actualNinguno[]" <?php if(in_array('NINGUNO',$name)){echo 'checked="checked"';}?>>
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
				<input type="submit" class="btn btn-primary" id="btn-env" values="enviar" name="enviar">
			</form>
		</div>
	</div>
</div>


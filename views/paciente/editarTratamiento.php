<div class="card border-0 shadow my-2">
	<div class="card-body p-5">
		<?php 
		//Utls::deleteSession('genero');
		require_once 'views/layout/editarNavs.php';
		require_once 'views/layout/cabeceraLogo.php';
		$sesion = ""; 
		 if(isset($_SESSION['formulario'])){$sesion = $_SESSION['formulario']['datos'];} 
		 ?>
		<div class="texcto">
			<?php if($sesion != "") echo '<p class="alert alert-danger error" role="alert">'.$_SESSION['formulario']["error"]."</p>";
			 if(isset($_SESSION['statusSave'])) echo '<p class="alert alert-success error" role="alert">'.$_SESSION['statusSave']."</p>";
			 Utls::deleteSession('statusSave');
			 ?>
		</div>
		<div class="tab-content" id="nav-tabContent" style="height: auto">
			<form id="registro" action="<?=base_url?>Paciente/editarAnterior&id=<?=$_GET['id']?>" method="POST" class="tab-pane fade show active" role="tabpanel" aria-labelledby="nav-home-tab">
<!-- :::::::::::::::::::::::::::::::::tratamiento Anterior:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
<div class="page-header titulo_anterior"><small>CONTROL DE PESO ANTERIOR</small></div>
				<hr>
				<div class="form-row col-md-12" id="anterior">
					<div class="form-control col-md-5 genero">
					<label for="intputSexo" id="intputSexo">Tratamientos de control de peso anteriormente</label>
						<div class="custom-control custom-radio custom-control-inline radio-Sexo">
						  <input type="radio" id="customRadioControl" name="radioTratamiento" class="form-check-input" value="1" <?php if($medicamento != '')echo 'checked="checked"';?>>
						  <label class="form-check-label" for="customRadioControl">SI</label>
						</div>
						<div class="custom-control custom-radio custom-control-inline radio-Sexo">
						  <input type="radio" id="customRadioControl2" name="radioTratamiento" class="form-check-input" value="2" <?php if($medicamento== '')echo 'checked="checked"';?>>
						  <label class="form-check-label" for="customRadioControl2">NO</label>
						</div>
					</div>
					<div class="form-group col-md-7">
						
					</div>
				</div>
				<div class="form-row col-md-12" id="anteriorMedicamento">
					<label for="medicamentoAnterior">¿Que medicamentos consumio durante el tratamiento de control de peso anterior?</label>
					<input type="text" class="form-control anteriorMedicamento" name="medicamentoAnterior" id="medicamentoAnterior" placeholder="si es mas de un medicamento separalo por una coma (,)" value="<?=$medicamento?>">
				</div>
				<input type="submit" class="btn btn-primary" id="btn-env" values="enviar" name="enviar">
			</form>
		</div>
	</div>
</div>


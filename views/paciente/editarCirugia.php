<div class="card border-0 shadow my-2">
	<div class="card-body p-5">
		<?php 
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
			<form id="registro" action="<?=base_url?>Paciente/updateCirugia&id=<?=$_GET['id']?>" method="POST" class="tab-pane fade show active" role="tabpanel" aria-labelledby="nav-home-tab">
<!-- ::::::::::::::::::::::::::::::::::::::::::::::::::::::cirugias::::::::::::::::::::::::::::::::::::::::::::::::::::: -->
                <div class="page-header titulo_cirugia"><small>¿Le han realizado alguna cirugia actualmente?</small></div>
					<div>
				<hr>
					  <input type="radio" id="siCheck" name="cirugia" value="1" <?php if(!in_array('no',$name)){echo 'checked="checked';$si='1';} ?>>
					  <label for="siCheck">SI</label>
					</div>
					<div>
					  <input type="radio" id="noCheck" name="cirugia" value="2" <?php if(in_array('no',$name))echo 'checked="checked' ?>>
					  <label for="noCheck">NO</label>
					</div>
				<div class="form-row col-md-12" id="cirugias">
					<div class="form-row col-md-12">
						<div class="form-group input-group input-group-sm col-md-6">
							<div class="input-group-prepend">
								<span class="input-group-text" id="inputGroup-sizing-sm">NOMBRE</span>
							</div>
							<input type="text" class="form-control disableoff" aria-label="Small" name="operacionUno[]" aria-describedby="inputGroup-sizing-sm" value="<?php if($si == '1' && isset($name[0])){echo $name[0];}?>"<?php if($si == '-1'){ echo ' disabled=disabled ';}?>>
						</div>
						<div class="form-group input-group input-group-sm col-md-6">
							<div class="input-group-prepend">
								<span class="input-group-text" id="inputGroup-sizing-sm">Fecha</span>
							</div>
								<input type="date" class="form-control disableoff" aria-label="Small" name="operacionUno[]" aria-describedby="inputGroup-sizing-sm" value="<?php if($si == '1' && isset($fecha[0])){echo $fecha[0];}?>"<?php if($si == '-1'){ echo ' disabled=disabled ';}?>>
						</div>
					</div>
					<div class="form-row col-md-12">
						<div class="form-group input-group input-group-sm col-md-6">
							<div class="input-group-prepend">
								<span class="input-group-text" id="inputGroup-sizing-sm">NOMBRE</span>
							</div>
							<input type="text" class="form-control disableoff" aria-label="Small" name="operacionDos[]" aria-describedby="inputGroup-sizing-sm" value="<?php if($si == '1' && isset($name[1])){echo $name[1];}?>"<?php if($si == '-1'){ echo ' disabled=disabled ';}?>>
						</div>
						<div class="form-group input-group input-group-sm   col-md-6">
							<div class="input-group-prepend">
								<span class="input-group-text " id="inputGroup-sizing-sm">Fecha</span>
							</div>
							<input type="date" class="form-control disableoff" aria-label="Small" name="operacionDos[]" aria-describedby="inputGroup-sizing-sm" value="<?php if($si == '1' && isset($fecha[1])){echo $fecha[1];}?>"<?php if($si == '-1'){ echo ' disabled=disabled ';}?>>
						</div>
					</div>
					<div class="form-row col-md-12">
						<div class="form-group input-group input-group-sm col-md-6">
							<div class="input-group-prepend">
								<span class="input-group-text " id="inputGroup-sizing-sm">NOMBRE</span>
							</div>
							<input type="text" class="form-control disableoff" aria-label="Small" name="operacionTres[]" aria-describedby="inputGroup-sizing-sm" value="<?php if($si == '1' && isset($name[2])){echo $name[2];}?>"<?php if($si == '-1'){ echo ' disabled=disabled ';}?>>
						</div>
						<div class="form-group input-group input-group-sm   col-md-6">
							<div class="input-group-prepend">
								<span class="input-group-text " id="inputGroup-sizing-sm">Fecha</span>
							</div>
							<input type="date" class="form-control disableoff" aria-label="Small" name="operacionTres[]" aria-describedby="inputGroup-sizing-sm" value="<?php if($si == '1'&& isset($fecha[2])){echo $fecha[2];}?>"<?php if($si == '-1'){ echo ' disabled=disabled ';}?>>
						</div>
					</div>
				</div>
				<input type="submit" class="btn btn-primary" id="btn-env" values="enviar" name="enviar">
			</form>
		</div>
	</div>
</div>


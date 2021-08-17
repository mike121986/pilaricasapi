<div class="card border-0 shadow my-2">
	<div class="card-body p-5">
	<?php require_once 'views/layout/cabeceraLogo.php';?>
		<?php $sesion = ""; 
		 if(isset($_SESSION['formulario'])){$sesion = $_SESSION['formulario']['datos'];} ?>
		<div class="texcto">
			<?php if($sesion != "") echo '<p class="alert alert-danger error" role="alert">'.$_SESSION['formulario']["error"]."</p>";?>
			<?php if(isset($_SESSION['statusSave'])) echo '<p class="alert alert-success error" role="alert">'.$_SESSION['statusSave']."</p>";?>
		</div>
		<div style="height: auto">
			<form id="registroConsultorio" action="<?=base_url?>Consultorio/save" method="POST">
            
				<div class="form-row ">
					<div class="form-group col-md-4">
                        <label for="inpuEstado">Estado</label>
                        <select class="form-control inpuEstado" id="inpuEstadoConsultorio" name="inpuEstadoConsultorio">
                            <option value="">SELECCIONE UN ESTADO</option>
							<?php while ($estado = $nombreE->fetch_object()):?>															
							<option value="<?=$estado->idEstado?>"><?=$estado->estado?></option> 							
						<?php endwhile; ?>
						</select>
					</div>
					<div class="form-group col-md-4">
                        <label for="inpuMunicipio">Municipio</label>
					    <select class="form-control altaConsultorio" id="inpuMunicipio" name="inpuMunicipioConsultorio">
                            <option value="">SELECCIONE UN MUNICIPIO</option>
					    </select>
					</div>
					<div class="form-group col-md-4">
						<label for="inpuCP">CP.</label>
						<input type="text" class="form-control" id="inpuCPConsultorio" name="inpuCPConsultorio" >
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-4">
						<label for="inpuColonia">Colonia</label>
						<input type="text" class="form-control" id="inpuColoniaConsultorio" name="inpuColoniaConsultorio" >
					</div>
					<div class="form-group col-md-4">
						<label for="inpuCalle">Calle</label>
						<input type="text" class="form-control" id="inpuCalleConsultorio" name="inpuCalleConsultorio" >
					</div>
					<div class="form-group col-md-4">
						<label for="inpuNumCasa">Numero Consultorio</label>
						<input type="text" class="form-control" id="inpuNumCasaConsultorio" name="inpuNumCasaConsultorio" >
					</div>
                </div>
                <div class="form-row">
					<div class="form-group col-md-4">
						<label for="intputname">Nombre</label>
						<input type="text" class="form-control" id="intputnameConsultorio" name="intputnameConsultorio" >
					</div>
				</div>
				
				<!-- <button class="btn btn-primary" type="submit">Submit form</button> -->
				<input type="submit" id="btn-Consultorio" values="enviar" name="saveConsultorio">
			</form>
		</div>
	</div>
</div>


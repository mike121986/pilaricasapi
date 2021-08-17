<?php require_once 'views/layout/cabeceraLogo.php' ;
$idConsultorio = $_SESSION["usuario"]["datos"]->id_consultorio;
$idDoctor = $_SESSION["usuario"]["id"];
$date=date_create("",timezone_open("America/Mexico_City"));
$valorPesoPerdido = 0;
?>
<!-- List group -->
<div class="pagos">
    <div class="control"><span class="noPaciente">No Paciente: </span><?=$datos->idCliente?></div>
    <!-- Tab panes -->
    <div class="datosPaciente">
        <div class="nombrePaciente">
         <p class="name"><?php echo ucwords(SED::decryption($datos->nombreCliente).' '.SED::decryption($datos->apPatCliente).' '.SED::decryption($datos->apMatCliente))?></p>
        </div>
    </div>
    <div class="datosPacienteConsulta">

    </div>
    <?php
        $datosSEssion = '';
     if(isset($_SESSION["frmConsulta"])){echo '<p class="alert alert-danger error" role="alert">'.$_SESSION['frmConsulta']["error"]."</p>";$datosSEssion = $_SESSION["frmConsulta"]['datos'];}
     if(isset($_SESSION['statusSave'])) echo '<p class="alert alert-success error" role="alert">'.$_SESSION['statusSave']."</p>";
	 Utls::deleteSession('statusSave')
     ?>
    <form action="<?=base_url?>Consulta/saveConsulta" method="POST" id="frmConsultaDiaria" novalidate>
        <input type="hidden" name="Con" value="<?=$idConsultorio?>">
        <input type="hidden" name="Doc" value="<?=$idDoctor?>">
        <input type="hidden" name="title" id="tittleWeightLost" value="">
        <input type="hidden" name="Pac" value="<?=$datos->idCliente?>">
        <input type="hidden" name="ultimoPeso" id="ultimoPeso" value="<?=$datos->ultimo_Pesaje_Cliente?>">
        <!-- <div class="form-row consultaTblaScroll"> -->
        <div class="form-row consultaTblaScroll">
            <div class="form-group  col-md-1">
                <label for="inputEmail4">fecha:</label>
                <input type="text" class="form-control controlConsulta" name="fechaConsulta" value="<?=date_format($date,"d-m-Y");?>" id="fechaConsulta" readonly style="">
                <div class="" id="alertaFecha"></div>
            </div>
            <div class="form-group col-md-1">
                <label for="peso">Peso:</label>
                <input type="number" class="form-control controlConsulta" id="peso" name="txtPeso" value="<?php if($datosSEssion != ''){echo $datosSEssion['tituloPeso'];}else{echo 0;} ?>" style="">
                <div class="" id="alertaPeso"></div>
            </div>
            <div class="form-group col-md-1">
                <label for="medida1">Medida</label>
                <input type="number" class="form-control controlConsulta" id="medida1" name="medida1" value="<?php if($datosSEssion != ''){echo $datosSEssion['medida1'];}else{echo 0;} ?>">
                <div class="" id="alertamedida1"></div>
            </div>
            <div class="form-group col-md-1">
                <label for="medida2">Medida</label>
                <input type="number" class="form-control controlConsulta" id="medida2" name="medida2" value="<?php if($datosSEssion != ''){echo $datosSEssion['medida2'];}else{echo 0;} ?>">
                <div class="" id="alertamedida2"></div>
            </div>
            <div class="form-group col-md-1">
                <label for="medida3">Medida</label>
                <input type="number" class="form-control controlConsulta" id="medida3" name="medida3" value="<?php if($datosSEssion != ''){echo $datosSEssion['medida3'];}else{echo 0;} ?>">
                <div class="" id="alertamedida3"></div>
            </div>
            <div class="form-group col-md-1">
                <label for="medida4">Medida</label>
                <input type="number" class="form-control controlConsulta" id="medida4" name="medida4" value="<?php if($datosSEssion != ''){echo $datosSEssion['medida4'];}else{echo 0;} ?>">
                <div class="" id="alertamedida4"></div>
            </div>
            <div class="form-group col-md-1">
                <label for="aparato">Aparatología</label>
                <input type="text" class="form-control controlConsulta" id="aparato" name="aparato" value="<?php if($datosSEssion != ''){echo $datosSEssion['Aparatologia'];}else{echo 0;} ?>">
                <div class="" id="alertaAparato"></div>
            </div>
            <div class="form-group col-md-1">
                <label for="lostWeight">Peso <small id="titleWeight"></small></label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend2"><i class="" id="arrowupdown"></i></span>
                    </div>
                    <input type="number" class="form-control controlConsulta" id="lostWeight" name="lostWeight" value="<?php if($datosSEssion != ''){echo $datosSEssion['pesoPerGan'];}else{echo 0;} ?>">
                </div>
                <div class="" id="alertaLost"></div>
            </div>
            <div class="form-group col-md-1">
                <label for="medicina">Medicamento</label>
                <input type="text" class="form-control controlConsulta" id="medicina" name="medicina" value="<?php if($datosSEssion != ''){echo $datosSEssion['Medicina'];}else{echo 0;} ?>">
                <div class="" id="alertaMedicamento"></div>
            </div>
            <div class="form-group col-md-1">
                <label for="mesoterapia">Mesoterapia</label>
                <input type="text" class="form-control controlConsulta" id="mesoterapia" name="mesoterapia" data-backdrop="static" data-keyboard="false" data-toggle="modal" data-target="#mesoterapiaModal" value="<?php if($datosSEssion != ''){echo $datosSEssion['mesoterapia'];}else{echo 0;} ?>">
                <div class="" id="alertaMesoterapia"></div>
            </div>
            <div class="form-group col-md-1">
                <label for="concentrado">Concentradas</label>
                <input type="text" class="form-control controlConsulta" id="concentrado" name="concentrado" data-backdrop="static" data-keyboard="false" data-toggle="modal" data-target="#concentradopiaModal" value="<?php if($datosSEssion != ''){echo $datosSEssion['concentrado'];}else{echo 0;} ?>">
                <div class="" id="alertaConcentradas"></div>
            </div>
            <div class="form-group col-md-1">
                <label for="promocion">Promoción</label>
                <input type="text" class="form-control controlConsulta" id="promocion" name="promocion" value="<?php if($datosSEssion != ''){echo $datosSEssion['promocion'];}else{echo 0;} ?>">
                <div class="" id="alertaPromocion"></div>
            </div>
            <div class="input-group observacion">
                <div class="input-group-prepend">
                    <span class="input-group-text">OBSERVACIONES</span>
                </div>
                <textarea class="form-control" name="observaciones" id="observ" aria-label="With textarea"  placeholder="maximo 500 caracteres"></textarea>
                <div class="input-group-append">
                    <span class="input-group-text" id="sumaTextoObser">0</span>
                </div>
            </div>
        </div>
        <div class="input-group col-md-3" id="cobro" style="display: none;">
            <div class="input-group-prepend">
                <span class="input-group-text">COBRO CONSULTA $</span>
            </div>
            <input type="text" class="form-control" id="cobroConsultaDato" value="<?=$datos->cobroCliente?>" disabled>
        </div>
        <div class="form-row col-md-12 pagos " id="seccionPagos">
            <div class="efectivo col-md-6">
                <label for="">EFECTIVO</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">$</span>
                    </div>
                    <input type="text" name="efectivo" class="form-control" id="inputefectivo" value="0" aria-label="Amount (to the nearest dollar)">
                    <div class="input-group-append">
                        <span class="input-group-text">.00</span>
                    </div>
                </div>
                <div class="alertEfectivo"></div>
            </div>
            <div class="tarjeta col-md-6 ">
                <label for="">TARJETA</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">$</span>
                    </div>
                    <input type="text" name="tarjeta" class="form-control" id="inputTarjeta" value="0" aria-label="Amount (to the nearest dollar)">
                    <div class="input-group-append">
                        <span class="input-group-text">.00</span>
                    </div>
                </div>
                <div class="alertTarjeta"></div>
            </div>
            
        </div>
        <!-- <div class="btn btn-lg btn-primary mt-3 col-md-3" id="btnPagoToggle">Pago</div> -->
        <a href="#" class="btn btn-lg btn-primary mt-3 col-md-3" id="btnPagoToggle">Pago</a>
        <button type="submit" class="btn btn-lg btn-primary col-md-3" name="btnRegistro" id="btnUpdateRegistro" style="display: none;">REGISTRAR</button>
    </form>
    <div class="form-group mt-4">
        <label for="observacion">Historial</label>
        <div class="overflow-auto"  style="border:1px solid green;max-height:280px">
        <table class="table table-striped ">
            <thead>
                <tr>
                <th scope="col">Fecha</th>
                <th scope="col">Peso</th>
                <th scope="col">Medida</th>
                <th scope="col">Medida</th>
                <th scope="col">Medida</th>
                <th scope="col">Medida</th>
                <th scope="col">Aparatologia</th>
                <th scope="col">Peso Perdido</th>
                <th scope="col">Medicamento</th>
                <th scope="col">Mesoterapia</th>
                <th scope="col">Concentrados</th>
                <th scope="col">Promocion</th>
                <th scope="col">Efectivo</th>
                <th scope="col">tarjeta</th>
                <th scope="col">Observación</th>
                </tr>
            </thead>
            <tbody>
                <?php if($historia == "sin Datos"):?>
                    <tr>
                        <th colspan="14" style="text-align: center;text-transform:uppercase; font-size:xx-large"><?=$historia;?></th>
                    </tr>
                <?php 
                else:
                    while ($hisPac = $historia->fetch_object()):?>
                    
                    <?php 
                    
                    $fecha=date_create($hisPac->fechaConsulta,timezone_open("America/Mexico_City"));
                    switch ($hisPac->titlepesoConsulta) {
                        case '1':
                            $valorPesoPerdido = '<i class="fas fa-arrow-alt-circle-down" style="color:green;"></i>';
                            break;
                        case '2':
                            $valorPesoPerdido = '<i class="far fa-arrow-alt-circle-up" style="color:red;"></i>';
                            break; 
                        case '3':
                            $valorPesoPerdido = '<i class="fa fa-arrows-h" style="color:#f39c12;"></i>';
                            break;
                        
                        default:
                        $valorPesoPerdido = '<i class="fa fa-arrows" style="color:#f39c12;"></i>';
                            break;
                    }?>
                        <tr>
                            <th style="font-size:smaller;min-width: 98px;"><?=date_format($fecha,"d-m-Y");?></th>
                            <th style="font-size:smaller;min-width: 98px;"><?=$hisPac->pesoClienteConsulta;?></th> 
                            <th style="font-size:smaller;min-width: 98px;"><?=$hisPac->medida1Consulta;?></th> 
                            <th style="font-size:smaller;min-width: 98px;"><?=$hisPac->medida2Consulta;?></th> 
                            <th style="font-size:smaller;min-width: 98px;"><?=$hisPac->medida3Consulta;?></th> 
                            <th style="font-size:smaller;min-width: 98px;"><?=$hisPac->medida4Consulta;?></th> 
                            <th style="font-size:smaller;min-width: 98px;"><?=$hisPac->aparotoConsulta;?></th> 
                            <th style="font-size:smaller;min-width: 98px;"><?=$valorPesoPerdido.$hisPac->pesoPerConsulta;?></th> 
                            <th style="font-size:smaller;min-width: 98px;"><?=$hisPac->medicamentoConsulta;?></th> 
                            <th style="font-size:smaller;min-width: 98px;"><?=$hisPac->mesopiaConsulta;?></th> 
                            <th style="font-size:smaller;min-width: 98px;"><?=$hisPac->conConsulta;?></th> 
                            <th style="font-size:smaller;min-width: 98px;"><?=$hisPac->promConsulta;?></th> 
                            <th style="font-size:smaller;min-width: 98px;"><?=$hisPac->montoEfectivoConsulta;?></th> 
                            <th style="font-size:smaller;min-width: 98px;"><?=$hisPac->tarjetaConsutla;?></th> 
                            <th style="font-size:smaller;min-width: 98px;" data-toggle="tooltip" data-placement="top" title="<?=$hisPac->obser?>"><?=Validacion::recotarPuntos($hisPac->obser,15,10);?></th> 
                        </tr>
                    <?php endwhile;?>
                <?php endif;?>
            </tbody>
            
            </table>
        </div>






        <div class="form-row">
					<div class="form-group col-md-1">
                    <i class="fas fa-arrow-alt-circle-down" style="color:green;"></i>
					<label>BAJA</label>
					</div>
					<div class="form-group col-md-1">
                    <i class="far fa-arrow-alt-circle-up" style="color:red;"></i>
                    <label>SUBIR</label>
					</div>
					<div class="form-group col-md-1">
                    <i class="fa fa-arrows-h" style="color:#f39c12;"></i>
                    <label>IGUAL</label>
                    </div>
                    <div class="form-group col-md-1">
                    <i class="fa fa-arrows" style="color:#f39c12;"></i>
                    <label>INICIO</label>
					</div>
				</div>
    </div>
</div>

<!-- Modal Mesoterapia-->
<div class="modal fade" id="mesoterapiaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">CANTIDAD MESOTERAPIA</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="contenedorTitulo">
              <label class="mesoTitulo">Total :</label>
              <h3 class="totalMesoNumero" value="<?=$con->meso_Consultorio;?>"><?=$con->meso_Consultorio;?></h3>
          </div>
          <div class="mesoUsar">
              <label for="mesoUsarTotal" class="tituloUsar">Cantidad a Usar:</label>
              <input type="text" name="cantidad" id="mesoUsarTotal" value="0">
          </div>
          <small id="verificaer"></small>
          <small>SE DESCONTARA LAS PIEZAS UNA VEZ REGISTRADA LA CONSULTA</small>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">CERRAR</button>
        <button type="button" class="btn btn-primary" id="saveMesoterapia">GUARDAR</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Concentrado-->
<div class="modal fade" id="concentradopiaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">CANTIDAD CONCENTRADO</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="contenedorTitulo">
              <label class="mesoTitulo">Total :</label>
              <h3 class="totalConcetradoNumero"><?=$con->consentrado_Consultorio;?></h3>
          </div>
          <div class="mesoUsar">
              <label for="mesoUsarTotal" class="tituloUsar">Cantidad a Usar:</label>
              <input type="text" name="cantidad" id="concentradoUsarTotal" value="0">
          </div>
          <small id="verificarConcentrado"></small>
          <small>SE DESCONTARA LAS PIEZAS UNA VEZ REGISTRADA LA CONSULTA</small>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">CERRAR</button>
        <button type="button" class="btn btn-primary" id="saveconcentrado">GUARDAR</button>
      </div>
    </div>
  </div>
</div>
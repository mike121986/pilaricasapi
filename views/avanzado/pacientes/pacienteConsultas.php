<?php require_once 'views/layout/cabeceraLogo.php' ;
$date=date_create("",timezone_open("America/Mexico_City"));
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
    
    
    
    
    
    
    <div class="form-group mt-2">
        <div class="overflow-auto"  style="border:1px solid green;min-height:250px;max-height:280px">
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
                <th scope="col">Atendido Por:</th>
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
                    $nombreDoctor = SED::decryption($hisPac->nombreUsuario)." ".Utls::getApellido($hisPac->apellidoUsuario);
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
                            <th style="font-size:smaller;min-width: 98px;" data-toggle="tooltip" data-placement="top" title="<?=$nombreDoctor?>"><?=Validacion::recotarPuntos($nombreDoctor,15,10);?></th> 
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
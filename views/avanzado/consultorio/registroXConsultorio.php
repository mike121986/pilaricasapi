<?php require_once 'views/layout/cabeceraLogo.php';?>
<div class="btnglobal" data-toggle="modal" data-target="#exampleModal">
  <div class="btn btn-primary btn-lg">INFORME PERSONALIZADO</div>
</div>
<div id="tituloReporte">
  <p class="text-center">
    Reporte Global del Mes <?=$tittle?>
  </p>
</div>
<table class="table table-hover table-striped display newPaciente " id="newPaciente">
  <thead>
    <tr>
      <th class="text-center" scope="col">Consultorio</th>
      <th class="text-center" scope="col">Total Pacientes </th>
      <th class="text-center" scope="col">Total Efectivo</th>
      <th class="text-center" scope="col">Total Tarjeta</th>
      <th class="text-center" scope="col">Suma Total</th>
      <th class="text-center" scope="col">Total Gastos</th>
      <th class="text-center" scope="col">Total Menos Gastos</th>
    </tr>
  </thead>
  <tbody>
   <?php if($tabla != '0'):
            while($listas = $tabla->fetch_object()):?>        
                <tr>
                  <th scope="row"><?=$listas->nombreConsultorio?></th>
                  <td class="text-center"><?=$listas->totalPaciente?></td>
                  <td class="text-center">$ <?=number_format($listas->efectivo);?></td>
                  <td class="text-center">$ <?=number_format($listas->tarjeta);?></td>
                  <td class="text-center bg-primary text-white">$ <?=number_format($listas->total);?></td>
                  <td class="text-center bg-danger text-white">$ <?=number_format($listas->gastoTotal);?></td>
                  <td class="text-center bg-success text-white">$ <?=number_format($listas->queda);?></td>
                </tr>
              <?php 
                    $totalPacientes += $listas->totalPaciente;
                    $totalEfectivo += $listas->efectivo;
                    $totaltarjeta += $listas->tarjeta;
                    $total += $listas->total;
                    $totalGasto += $listas->gastoTotal;
                    $totalQueda += $listas->queda;
                ?>
            <?php endwhile;?>
            <tr>
              <th scope="row" class="text-right border-right">TOTALES</td>
              <th scope="row" class="text-center border-right"><?=number_format($totalPacientes);?></td>
              <th scope="row" class="text-center border-right">$ <?=number_format($totalEfectivo,2,".",",");?></td>
              <th scope="row" class="text-center border-right">$ <?=number_format($totaltarjeta,2,".",",");?></td>
              <th scope="row" class="text-center border-right">$ <?=number_format($total,2,".",",");?></td>
              <th scope="row" class="text-center border-right">$ <?=number_format($totalGasto,2,".",",");?></td>
              <th scope="row" class="text-center border-right">$ <?=number_format($totalQueda,2,".",",");?></td>
            </tr>
  <?php else: ?>
          <tr>
            <th scope="row" class="text-right border-right text-center" colspan="7">SIN RESULTADOS</td>
          </tr>
  <?php endif; ?>
  </tbody>
</table>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="sandbox-container">
        <p>INDIQUE LA FECHA INICIAL Y LA FECHA FINAL PARA SU REPORTE</p>
        <div class="input-daterange ml-5">        
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon3">FECHA INICIAL</span>
            </div>
            <input type="text" class="form-control w-75" id="datepickerInicio" width="156">
          </div>

          <!-- <label for="basic-url">FECHA FINAL</label> -->
          <div class="input-group mt-3">
            <div class="input-group-prepend">
              <span class="input-group-text text-center" id="basic-addon3" >FECHA FINAL</span>
            </div>
            <input type="text" class="form-control w-75" id="datepicker" width="166">
          </div>
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="btnReporteFEchas">Save changes</button>
      </div>
    </div>
  </div>
</div>
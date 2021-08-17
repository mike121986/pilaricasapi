<?php require_once 'views/layout/cabeceraLogo.php';?>

<div class="row mb-5">
    <div class="col-12 col-lg-6 col-xl">
        <div class="card border-success" style="background-color: #F8F9FA;">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col">
                        <h6 class="text-uppercase text-muted mb-2">
                            Pacientes
                        </h6>
                        <span class="h2 mb-0">
                            <?=$paciente?>
                        </span>
                    </div>
                    <div class="col-auto">
                        <!-- <span class="h2 fe fe-dollar-sign text-muted mb-0"></span> -->
                        <i class="fas fa-users text-muted mb-0"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-6 col-xl">
        <div class="card border-success" style="background-color: #F8F9FA;">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col">
                        <h6 class="text-uppercase text-muted mb-2">
                            Efectivo
                        </h6>
                        <span class="h2 mb-0">
                            $ <?=$efectivo?>
                        </span>
                    </div>
                    <div class="col-auto">
                        <!-- <span class="h2 fe fe-dollar-sign text-muted mb-0"></span> -->
                        <i class="far fa-money-bill-alt text-muted mb-0"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-6 col-xl">
        <div class="card border-success" style="background-color: #F8F9FA;">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col">
                        <h6 class="text-uppercase text-muted mb-2">
                            Tarjeta
                        </h6>
                        <span class="h2 mb-0">
                            $<?=$tarjeta?>
                        </span>
                    </div>
                    <div class="col-auto">
                        <!-- <span class="h2 fe fe-dollar-sign text-muted mb-0"></span> -->
                        <i class="fas fa-credit-card text-muted mb-0"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-6 col-xl">
        <div class="card border-success" style="background-color: #F8F9FA;">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col">
                        <h6 class="text-uppercase text-muted mb-2">
                            Mesoterapia
                        </h6>
                        <span class="h2 mb-0">
                            <?=$meso?>
                        </span>
                    </div>
                    <div class="col-auto">
                        <!-- <span class="h2 fe fe-dollar-sign text-muted mb-0"></span> -->
                        <i class="fas fa-pills text-muted mb-0"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-6 col-xl">
        <div class="card border-success" style="background-color: #F8F9FA;">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col">
                        <h6 class="text-uppercase text-muted mb-2">
                            Concentrado
                        </h6>
                        <span class="h2 mb-0">
                            <?=$con?>
                        </span>
                    </div>
                    <div class="col-auto">
                        <!-- <span class="h2 fe fe-dollar-sign text-muted mb-0"></span> -->
                        <i class="fas fa-pills text-muted mb-0"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="des">
    <h2 id="golose">desgolose</h2>    
</div>
<div class="table-responsive">
<!-- <table class="table table-hover display newPaciente " id="newPaciente"> -->
<table class="table table-hover display newPaciente " id="newPaciente">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Peso </th>
      <th scope="col">medida1</th>
      <th scope="col">medida2</th>
      <th scope="col">medida3</th>
      <th scope="col">medida4</th>
      <th scope="col">meso</th>
      <th scope="col">Con</th>
      <th scope="col">Promocion</th>
      <th scope="col">Aparato</th>
      <th scope="col">Medicamento</th>
      <th scope="col">Efectivo</th>
      <th scope="col">Tarjeta</th>
      <th scope="col">Observacion</th>
    </tr>
  </thead>
  <tbody>
        <?php if($datosCompletos != "0" ): ?>
            <?php while($consulta = $datosCompletos->fetch_object()):?>
                <tr>
                    <td><?=SED::decryption($consulta->nombreCliente)." ".SED::decryption($consulta->apPatCliente)." ".SED::decryption($consulta->apMatCliente)?></td>
                    <td><?=$consulta->pesoClienteConsulta?></td>
                    <td><?=$consulta->medida1Consulta?></td>
                    <td><?=$consulta->medida2Consulta?></td>
                    <td><?=$consulta->medida3Consulta?></td>
                    <td><?=$consulta->medida4Consulta?></td>
                    <td><?=$consulta->mesopiaConsulta?></td>
                    <td><?=$consulta->conConsulta?></td>
                    <td><?=$consulta->promConsulta?></td>
                    <td><?=$consulta->aparotoConsulta?></td>
                    <td><?=$consulta->medicamentoConsulta?></td>
                    <td><?=$consulta->montoEfectivoConsulta?></td>
                    <td><?=$consulta->tarjetaConsutla?></td>
                    <td style="font-size:smaller;min-width: 98px;" data-toggle="tooltip" data-placement="bottom" title="<?=$consulta->obseConsulta?>"><?=Validacion::recotarPuntos($consulta->obseConsulta,15,10);?></td>
                </tr>
            <?php endwhile;?>
        <?php endif?>
  </tbody>
</table>
</div>
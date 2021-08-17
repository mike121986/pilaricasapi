<?php require_once 'views/layout/cabeceraLogo.php';?>
<div class="tituloEntradas">
    <p class="textoTituloEntradas">
        ENTRADAS
    </p>
<hr>
</div>
<div class="row mb-5">
    <div class="col-12 col-lg-6 col-xl">
        <div class="card border-success" style="background-color: #F8F9FA;">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col text-center">
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
                    <div class="col text-center">
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
                    <div class="col text-center">
                        <h6 class="text-uppercase text-muted mb-2">
                            Tarjeta
                        </h6>
                        <span class="h2 mb-0">
                            $ <?=$tarjeta?>
                        </span>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-credit-card text-muted mb-0"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>    
    <!-- <div class="col-12 col-lg-6 col-xl">
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
                        <i class="fas fa-pills text-muted mb-0"></i>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <div class="col-12 col-lg-6 col-xl">
        <div class="card border-success" style="background-color: #F8F9FA;">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col text-center">
                        <h6 class="text-uppercase text-muted mb-2">
                            Total Entrada Caja
                        </h6>
                        <span class="h2 mb-0">
                            $ <?=$totalDinero?>
                        </span>
                    </div>
                    <div class="col-auto">
                        <!-- <span class="h2 fe fe-dollar-sign text-muted mb-0"></span> -->
                        <i class="far fa-money-bill-alt text-muted mb-0"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-auto mt-2 ml-5">
            <a href="<?=base_url?>Consultorio/corteDiario&idCorte=<?=$_GET["idCtr"]?>" class="btn btn-outline-primary">ver detalles</a>
        </div>
    </div>
</div>
<div class="tituloEntradas">
    <p class="textoTituloEntradas">
        SALIDAS
    </p>
<hr>
</div>
<div class="row mb-5">
    <div class="col-lg-1">
        <!-- <div class="card border-success" style="background-color: #F8F9FA;">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col">
                        <h6 class="text-uppercase text-muted mb-2">
                            Total Entrada Caja
                        </h6>
                        <span class="h2 mb-0">
                            $ <?=$totalDinero?>
                        </span>
                    </div>
                    <div class="col-auto">
                        <i class="far fa-money-bill-alt text-muted mb-0"></i>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
    <div class="col-12 col-lg-6 col-xl">
        <div class="card border-danger" style="background-color: #F8F9FA;">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col text-center">
                        <h6 class="text-uppercase text-muted mb-2">
                            Total Gastos
                        </h6>
                        <span class="h2 mb-0">
                            $ <?=$totalGasto?>
                        </span>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-sign-out-alt"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="mx-auto mt-2" style="width: 200px;">
            <a href="<?=base_url?>Consultorio/gastos&idGastos=<?=$_GET["idCtr"]?>" class="btn btn-outline-primary">ver detalles</a>
        </div>
    </div>
    <div class="col-lg-1">
        <!-- <div class="card border-success" style="background-color: #F8F9FA;">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col">
                        <h6 class="text-uppercase text-muted mb-2">
                            Total Entrada Caja
                        </h6>
                        <span class="h2 mb-0">
                            $ <?=$totalDinero?>
                        </span>
                    </div>
                    <div class="col-auto">
                        <i class="far fa-money-bill-alt text-muted mb-0"></i>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
    <div class="col-12 col-lg-6 col-xl">
        <div class="card border-success" style="background-color: #F8F9FA;">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col text-center">
                        <h6 class="text-uppercase text-muted mb-2">
                            Queda En Caja
                        </h6>
                        <span class="h2 mb-0">
                            $ <?=$totalQuedaDinero?>
                        </span>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-hand-holding-usd"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

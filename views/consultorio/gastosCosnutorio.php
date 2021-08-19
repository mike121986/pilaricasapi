<?php require_once 'views/layout/cabeceraLogo.php';?>
<?php 
$getisgastos = "";
$sesion = ""; 
if(isset($_SESSION["gastoRegistro"])){$sesion = $_SESSION['gastoRegistro']['datos'];} ?>
<div class="row mb-5">
    <div class="col-12 col-lg-6 col-xl">
        <div class="card border-success" style="background-color: #F8F9FA;">
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
                        <!-- <span class="h2 fe fe-dollar-sign text-muted mb-0"></span> -->
                        <i class="far fa-money-bill-alt text-muted mb-0"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-6 col-xl">
        <div class="card border-danger" style="background-color: #F8F9FA;">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col">
                        <h6 class="text-uppercase text-muted mb-2">
                            Total Gastos
                        </h6>
                        <span class="h2 mb-0">
                            $<?=$totalGasto?>
                        </span>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-sign-out-alt"></i>
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
                            Queda En Caja
                        </h6>
                        <span class="h2 mb-0">
                            $<?=$totalQuedaDinero?>
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
<hr>
<!-- <?php if(!isset($_GET["idGastos"])):?> -->
    <div class="row mb-5">
        <form class="col-md-12" id="restaDinero" action="<?=base_url?>Consultorio/registrarGasto" method="POST" novalidate>
            <div class="form-row col-md-12">
                <div class="form-group col-md-6">
                    <label for="dineroAtomar">Cantidad</label>
                    <input type="hidden" id="quedaDinero" name="queda" value="<?=$totalQuedaDinero?>">
                    <input type="number" class="form-control" name="gasto" id="dineroAtomar" placeholder="0.00" value="<?php if($sesion != "") echo $sesion["Cantidad"];?>">
                    <div class="" id="alertadineroAtomar"></div>
                </div>
                <div class="form-group col-md-6">
                    <label for="motivoGasto">Motivo</label>
                    <input type="text" class="form-control" name="motivo" id="motivoGasto" placeholder="pago de..." value="<?php if($sesion != "") echo $sesion["motivo"];?>">
                    <div class="" id="alertaMotivo"></div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary" id="enviarDatos">Registrar</button>
            <?php if($sesion != ""): ?>
            <div class="alert alert-danger mt-3" role="alert"><?=$_SESSION['gastoRegistro']["error"]?></div>
            <?php endif ?>
        </form>
    </div>
<!-- <?php endif; ?> -->

<div class="form-group mt-4">
        <label for="observacion">Historial Gastos</label>
        <div class="overflow-auto"  style="border:1px solid green;max-height:280px">
        <table class="table table-striped ">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Monto Gasto</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">fecha Y Hora</th>
                </tr>
            </thead>
            <tbody>
                <?php if($lista  == "sin Datos"):?>
                    <tr>
                        <th colspan="14" style="text-align: center;text-transform:uppercase; font-size:xx-large"><?=$lista;?></th>
                    </tr>
                <?php 
                
                else:
                    while ($hisPac = $lista->fetch_object()):?>
                    
                    <?php 
                    $createName = SED::decryption($hisPac->nameUser)." ".Utls::getApellido($hisPac->apellido);
                    $fecha=date_create($hisPac->fechaGasto,timezone_open("America/Mexico_City")); 
                    ?>
                        <tr>
                            <th style="font-size:smaller;min-width: 98px;"><?=$createName;?></th> 
                            <th style="font-size:smaller;min-width: 98px;"><?=$hisPac->cantidadGastos;?></th> 
                            <th style="font-size:smaller;min-width: 98px;" data-toggle="tooltip" data-placement="top" title="<?=$hisPac->descripcionGastos?>"><?=Validacion::recotarPuntos($hisPac->descripcionGastos,15,10);?></th> 
                            <th style="font-size:smaller;min-width: 98px;"><?=date_format($fecha,"d-m-Y H:s:m");?></th>
                        </tr>
                    <?php endwhile;?>
                <?php endif;?>
            </tbody>
            
            </table>
        </div>
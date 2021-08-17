<?php require_once 'views/layout/cabeceraLogo.php';?>
<div class="card">
    <div class="card-header">
    Consultorios
    </div>
    <div class="card-body" id="contenedorConsultorio">
        <div class="card contenedorMenuConsultrorios">
            <div class="card-body">
                <h5 class="card-title card-header">Lista Consultorios</h5>
                <p class="card-text">Obtenemos una lista completa de los consultorios registrados </p>
                <a href="<?=base_url?>Avanzado/consultorios" class="card-link">Vamos!</a>
            </div>
        </div>
        <div class="card contenedorMenuConsultrorios">
            <div class="card-body">
                <h5 class="card-title card-header">Vista Global</h5>
                <p class="card-text" data-toggle="tooltip" data-placement="top" title="Se muestra información global de todos los consultorios registrados, muestra las entradas y salidas de dinero dia, mes, año"><?=Validacion::recotarPuntos("Se muestra información global de todos los consultorios registrados",62,10)?></p>
                <a href="<?=base_url?>Avanzado/reporte" class="card-link">Card link</a>
            </div>
        </div>
    </div>
</div>
<hr>
<div class="card">
    <div class="card-header">
    Pacientes
    </div>
    <div class="card-body" id="contenedorConsultorio">
        <div class="card contenedorMenuConsultrorios">
            <div class="card-body">
                <h5 class="card-title card-header">Lista Pacientes</h5>
                <p class="card-text">Obtenemos una lista completa de los pacientes registrados, ordenados por consultorio</p>
                <a href="<?=base_url?>Avanzado/pacientes" class="card-link">Vamos!</a>
            </div>
        </div>
        <div class="card contenedorMenuConsultrorios">
            <div class="card-body">
                <h5 class="card-title card-header">Vista Global</h5>
                <p class="card-text" data-toggle="tooltip" data-placement="top" title="Se muestra información global de todos los consultorios registrados, muestra las entradas y salidas de dinero dia, mes, año"><?=Validacion::recotarPuntos("Se muestra información global de todos los consultorios registrados",69,10)?></p>
                <a href="" class="card-link">Card link</a>
            </div>
        </div>
    </div>
</div>
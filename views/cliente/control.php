<?php require_once 'views/layout/cabeceraLogo.php' ?>
<!-- List group -->
<div class="allMedical">
    <div class="list-group" id="myList" role="tablist">
        <a class="list-group-item list-group-item-action active " data-toggle="list" href="#home" role="tab">
        MESO
        <span class="badge badge-dark badge-pill" id="mesoTotal"><?=$resultado->meso_Consultorio?></span>
        </a>
    <a class="list-group-item list-group-item-action " data-toggle="list" href="#profile" role="tab">
        CONSENTRADO
        <span class="badge badge-dark badge-pill" id="conTotal"><?=$resultado->consentrado_Consultorio?></span>
    </a>
    </div>

    <!-- Tab panes -->
    <div class="tab-content meso">
        <div class="tab-pane active" id="home" role="tabpanel">
            <div class="tittleUpdate">
                <label for="staticEmail2" >ACTUALIZAR</label>
            </div>
            <form class="form-inline frmMeso">
                <div class="form-group divMeso">
                    <label for="staticEmail2" id="meso">INGRESAR MESO</label>
                </div>
                <div class="form-group inputNumero">
                    <label for="inputMesotrolSumaResta" class="sr-only">Password</label>
                    <input type="text" class="form-control" id="inputMesotrolSumaResta" placeholder="ingreso numero">
                    <div class="errorSumResta"></div>
                </div>
                <div class="botones">
                    <a href="" class="btn btn-success" id="btnSumaMeso">+</a>          
                    <div class="sumarMeso botonControl"></div>
                    <a href="" class="btn btn-danger" id="btnRestarMeso">-</a>
                    <div class="restarMeso botonControl"></div>
                </div>
            </form>
        </div>
        <div class="tab-pane" id="profile" role="tabpanel">
            <div class="tittleUpdate">
                <label for="staticEmail2">ACTUALIZAR</label>
            </div>
            <form class="form-inline frmMeso">
                <div class="form-group divCon">
                    <label for="staticEmail2" id="con">INGRESAR CONCENTRADO</label>
                </div>
                <div class="form-group inputNumero">
                    <label for="inputControlSumaResta" class="sr-only">Password</label>
                    <input type="text" class="form-control" id="inputControlSumaResta" placeholder="ingrese numero">
                    <div class="errorSumResta"></div>
                </div>
                <div class="botones">
                    <a href="" class="btn btn-success" id="btnSumaCon">+</a>          
                    <div class="sumarCon botonControl"></div>
                    <a href="" class="btn btn-danger" id="btnRestarCon">-</a>
                    <div class="restarCon botonControl"></div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php $nombreHide = ""; if(isset($_GET['idCtr'])){$nombreHide = "<small>".$nombre->nombreConsultorio."</small>";} ?>
<!-- <figure>    
    <img src="<?=base_url?>assets/img/logo.png" class="text-center" alt="logo salud y bienestar">
    <figcaption>
        <h2 class="font-weight-light"><p><?=Utls::titleCabecera($_GET).$nombreHide?></p></h2> 
    </figcaption> 
</figure> -->
        <div class="boton"  id="botondiv">
            <button type="button" id="backHisotry" class="btn btn-primary">REGRESAR</button>
        </div>
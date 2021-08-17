<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-item nav-link <?php if($_GET['tittle']==''){echo 'active';}?>" id="nav-home-tab" href="<?=base_url?>Paciente/editar&id=<?=$_GET['id']?>&tittle=" role="tab" aria-controls="nav-home" aria-selected="true">Datos Personales</a>
    <a class="nav-item nav-link <?php if($_GET['tittle']=='heredofamiliar'){echo 'active';}?>" id="nav-profile-tab"  href="<?=base_url?>Paciente/editarAntecedente&id=<?=$_GET['id']?>&tittle=heredofamiliar" role="tab" aria-controls="nav-profile" aria-selected="false">Antecedentes</a>
    <a class="nav-item nav-link <?php if($_GET['tittle']=='patologico'){echo 'active';}?>" id="nav-contact-tab" href="<?=base_url?>Paciente/editarPatologico&id=<?=$_GET['id']?>&tittle=patologico" role="tab" aria-controls="nav-contact" aria-selected="false">Patologicos</a>
    <a class="nav-item nav-link <?php if($_GET['tittle']=='cirugia'){echo 'active';}?>" id="nav-contact-tab" href="<?=base_url?>Paciente/editarCirugia&id=<?=$_GET['id']?>&tittle=cirugia" role="tab" aria-controls="nav-contact" aria-selected="false">Cirugias</a>
    <a class="nav-item nav-link <?php if($_GET['tittle']=='mujer'){echo 'active';}?>" id="nav-contact-tab" href="<?=base_url?>Paciente/editarEmbarazo&id=<?=$_GET['id']?>&tittle=mujer" role="tab" aria-controls="nav-contact" aria-selected="false">Datos Mujer</a>
    <a class="nav-item nav-link <?php if($_GET['tittle']=='anterior'){echo 'active';}?>" id="nav-contact-tab" href="<?=base_url?>Paciente/editarTratamiento&id=<?=$_GET['id']?>&tittle=anterior" role="tab" aria-controls="nav-contact" aria-selected="false">Control Anterior</a>
  </div>
</nav>
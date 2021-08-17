<?php require_once 'views/layout/cabeceraLogo.php';?>

<table class="table table-hover display" id="listAllPaciente">
  <thead>
    <tr>

      <th scope="col">Consultorio</th>
      <th scope="col">Nombre </th>
      <th scope="col">Genero </th>
      <th scope="col">Municipio </th>
      <th scope="col">Acción</th>
    </tr>
  </thead>
  <tbody>
   <?php 
  //  var_dump($datos->fetch_object());
   while($nuevo = $datos->fetch_object()):?>
        <?php $sexo = ($nuevo->sexo == "dndMc3") ? "Hombre" : "Mujer" ; ?>
            <tr>
              <th scope="row"><?=$nuevo->consul?></th>
              <td style="text-transform: uppercase;"><?=SED::decryption($nuevo->nameC).' '.Utls::getApellido($nuevo->apellidos)?></td>
              <td><?=$sexo?></td>
              <td><?=$nuevo->nombreMunicipio?></td>
              <td>
                <div class="btn-group" role="group" aria-label="Basic example">
                  <a href="<?=base_url?>Avanzado/Historial&id=<?=$nuevo->idCl?>" class="btn btn-dark" data-toggle="tooltip" data-placement="top" title="HISTORIAL COMPLETO"><i class="fas fa-file-medical-alt"></i></a>
                  <a href="<?=base_url?>Paciente/editar&id=<?=$nuevo->idCl?>&tittle=" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="HOJA CLINICA"><i class="fa fa-file-text" aria-hidden="true"></i></a>
                  <a href="<?=base_url?>Consulta/consultaDiaria&id=<?=$nuevo->idCl?>" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="DAR CONSULTA"><i class="fa fa-user-md" aria-hidden="true"></i></a>
                </div>
              </td>
            </tr>
    <?php endwhile;?>
  </tbody>
</table>
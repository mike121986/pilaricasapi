<?php require_once 'views/layout/cabeceraLogo.php' ?>

<table class="table table-hover display newPaciente " id="newPaciente">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">NOMBRE </th>
      <th scope="col">ACCION</th>
    </tr>
  </thead>
  <tbody>
  <?php while($nuevo = $listar->fetch_object()):?>
            <tr>
              <th scope="row"><?=$nuevo->idCliente?></th>
              <td><?=SED::decryption($nuevo->nombreCliente).' '.SED::decryption($nuevo->apPatCliente).' '.SED::decryption($nuevo->apMatCliente)?></td>
              <td>
                <div class="btn-group" role="group" aria-label="Basic example">
                  <a href="<?=base_url?>Consulta/consultaDiaria&id=<?=$nuevo->idCliente?>" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="DAR CONSULTA"><i class="fa fa-user-md" aria-hidden="true"></i></a>
                  <a href="<?=base_url?>Paciente/editar&id=<?=$nuevo->idCliente?>&tittle=" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Hoja Clinica"><i class="fa fa-file-text" aria-hidden="true"></i></a>
                </div>
              </td>
            </tr>
    <?php endwhile;?>
  </tbody>
</table>
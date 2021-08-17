<?php require_once 'views/layout/cabeceraLogo.php';?>

<table class="table table-hover display newPaciente " id="newPaciente">
  <thead>
    <tr>
      <th scope="col">Consultorio</th>
      <th scope="col">Estado </th>
      <th scope="col">Municipio</th>
      <th scope="col">Calle</th>
      <th scope="col">Status</th>
      <th scope="col">Acción</th>
    </tr>
  </thead>
  <tbody>
   <?php while($listas = $listar->fetch_object()):?>
        <?php 
        $estatus = "";
        switch ($listas->statusConsultorio) {
            case '1':
                $estatus = 'Activo';
                break;
            case '2':
                $estatus = 'Inactivo';
                break;
            default:
                $estatus = 'Sin Información';
                break;
        }?>
            <tr>
              <th scope="row"><?=$listas->nombreConsultorio?></th>
              <td><?=$listas->estado?></td>
              <td><?=$listas->municipio?></td>
              <td><?=$listas->calleConsultorio?></td>
              <td><?=$estatus?></td>
              <td>
                <div class="btn-group" role="group" aria-label="Basic example">
                  <a href="<?=base_url?>Avanzado/movimientos&idCtr=<?=$listas->id_consultorio?>" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Registro Diario"><i class="fa fa-file-text" aria-hidden="true"></i></a>
                  <a href="<?=base_url?>Consulta/consultaDiaria&id=<?=$listas->idCl?>" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Registro Avanzado"><i class="fa fa-user-md" aria-hidden="true"></i></a>
                </div>
              </td>
            </tr>
    <?php endwhile;?>
  </tbody>
</table>
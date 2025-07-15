<?php
/**
 * Created by:
 * author: @LuisMi
 * Fecha: 2025-07-14
 * Time: 16:54
 */
include ('../../app/config.php');
include ('../../admin/layout/parte1.php');

include ('../../app/controllers/roles/listado_de_roles.php');  

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <br>
    <div class="content">
      <div class="container">
        <div class="row">
            <h1>Listado de categorias</h1>
        </div>
        <br>

        <div class="row">
            <div class="col-md-8 mx-auto">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Roles registrados</h3>

                <div class="card-tools">
                    <a href="create.php" class="btn btn-success"><i class="bi bi-plus-square"></i> Crear nuevo rol</a>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                 <table class="table table-hover">
                <head">
                    <tr>
                        <th><center>Nro</center></th>
                        <th><center>Nombre del rol</center></th>
                        <th><center>Acciones</center></th>
                    </tr>
                </head>
                <tbody>
                <?PHP
                $contador_rol = 0;
                foreach ($roles as $rol) {
                    $id_rol = $rol['id_rol']; 
                    $contador_rol++;
                    ?>
                    <tr>
                        <td style="text-align: center;"><?=$contador_rol?></td>
                        <td><?=$rol['nombre_rol'];?></td>
                        <td style="text-align: center;">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button type="button" class="btn btn-info"><i class="bi bi-eye"></i></button>
                                <button type="button" class="btn btn-success"><i class="bi bi-pencil-square"></i></button>
                                <button type="button" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                            </div>
                        </td>
                    </tr>
                <?php
                }
                ?>
                </tbody>
            </table>

              </div>
              <!-- /.card-body -->
            </div>
            <hr>  <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php

include ('../../admin/layout/parte2.php');
include ('../../layout/mensajes.php');

?>

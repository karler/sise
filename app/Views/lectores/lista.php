  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active"><?=$titulo?></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><?=$titulo?></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id Lector</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>DNI</th>
                    <th>Celular</th>
                    <th>Dirección</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                  <?PHP
                    foreach ($datos as $fila){
                        echo "<tr>";
                        echo "<td>{$fila['Idlector']}</td>";
                        echo "<td>".$fila['Nombre']."</td>";
                        echo "<td>{$fila['Apellidos']}</td>";
                        echo "<td>".$fila['DNI']."</td>";
                        echo "<td>".$fila['Celular']."</td>";
                        echo "<td>".$fila['Direccion']."</td>";
                        $ruta1 = "";

                        echo "<td><a class='btn btn-success'href='".base_url()."/lectores/editar/".$fila['Idlector']."'>Editar</a></td>";
                        echo "<td><a class='btn btn-success'href='".base_url()."/lectores/eliminar/".$fila['Idlector']."'>Eliminar</a></td>";
                        echo "</tr>";
                    }
                    ?>
                  
                  </tr>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Id Lector</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>DNI</th>
                    <th>Celular</th>
                    <th>Dirección</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
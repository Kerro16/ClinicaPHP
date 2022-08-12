<?php
include_once("db-mysqli.php");
?>
<?php
session_start();

if($_SESSION['id_cargo']=="3")
{
   
}

else
{
    
    header("Location:inicio.php");
      exit();
      }
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <title>Citas</title>

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  

</head>

<body id="page-top">
   
  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php include_once "menu.php"; ?> 
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

        

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

          

            <!-- Nav Item - User Information -->
            
          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

            
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Citas para el dia de hoy.</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Paciente</th>
                      <th>Asunto</th>
                      <th>Medico</th>
                      <th>Fecha</th>
                      <th>Hora</th>
                      <th>Estado</th>
                      <th>Acciones</th>
                      </tr>
                  </thead>
                  <tbody>

<?php

$query = "SELECT cita.id_cita, cita.motivo, CONCAT(paciente.nombre, ' ', paciente.apellidos) AS id_paciente, CONCAT(medico.nombre, ' ', medico.apellidos) AS id_medico, cita.fecha, cita.hora, estado_citas.tipo_estado AS id_estado_citas FROM cita, paciente, medico, estado_citas WHERE cita.id_paciente = paciente.id_paciente AND cita.id_medico = medico.id_medico AND cita.id_estado_citas = estado_citas.id_estado_citas AND cita.id_estado_citas != 3";

$result = mysqli_query($db, $query);    

while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
  <td><?php echo $row['id_paciente']; ?></td>
  <td><?php echo $row['motivo']; ?></td>
  <td><?php echo $row['id_medico']; ?></td>
  <td><?php echo $row['fecha']; ?></td>
  <td><?php echo $row['hora']; ?></td> 
  <td><?php echo $row['id_estado_citas']; ?></td> 
  
  <td>
    <a href="asignacion-form.php?id=<?php echo $row['id_cita']?>" class="btn btn-secondary">
    <i title="Editar Cita" class="fas fa-marker"></i>
    </a>
    <a href="asignacion_citas.php?id=<?php echo $row['id_cita']?>&delete=true" class="btn btn-danger">
      <i  title="Eliminar Cita" class="far fa-trash-alt"></i>
    </a>
  </td>
</tr>
<?php } ?>
</tbody>
 </table>
              </div>
            </div>
          </div>

        <!-- /.container-fluid -->



             

    <!--Termina form -->
      <!-- Footer -->
      <?php include_once "footer.php"; ?> 
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

       <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>

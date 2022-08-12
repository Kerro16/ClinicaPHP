<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <title>Observaciones</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/historia.css?sd=fdr">
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/historia.js?p=r"></script>


</head>

<body id="page-top">
   
  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php include_once "menu.php"; $id_paciente = ""; ?> 
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


        <?php
        include_once("db-mysqli.php");

           $asunto = "";
            $id_paciente = "";
            $id_medico = "";
            $fecha = "";
            $hora = "";
            $id_estado_citas = "";

        if(isset($_GET['id'])){

           $id = $_GET['id'];
          $query = "SELECT * FROM cita WHERE id_cita=$id";
          $result = mysqli_query($db, $query);
          if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
            $asunto = $row['motivo'];
            $id_paciente = $row['id_paciente'];
            $id_medico = $row['id_medico'];
            $fecha = $row['fecha'];
            $hora = $row['hora'];
            $id_estado_citas = $row['id_estado_citas'];

          }
        }

        ?> 

            <!-- Nav Item - User Information -->
          
          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

            
    <!-- Circle Buttons -->
    <div class="card shadow mb-8">
                <div class="card-header py-12">
                  <h6 class="m-0 font-weight-bold text-primary"> Observaciones del paciente </h6>
                </div>
                
                <div class="card-body">

                   <form method="POST" action="observaciones.php"> 
                 
                  <div class="col-md-6 mb-10">
                    <label for="sintoma"><font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">Sintomas </font>
                    </font></label>
                    <input type="text" class="form-control" id="sintoma" name="sintoma" placeholder="" value="" required>
                      </div>

                      <div class="col-md-6 mb-3">
                      <label for="diagnostico"><font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Diagnostico</font>
                      </font></label>
                      <input type="text" class="form-control" id="diagnostico" name="diagnostico" placeholder="" value="" required>
                        </div>

                  <div class="col-md-6 mb-3">
                      <label for="tratamiento"><font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Tratamientos</font>
                      </font></label>
                      <input type="text" class="form-control" id="tratamiento" name="tratamiento" placeholder="" value="" required>
                        </div>
<!--
                  <div class="col-md-6 mb-3">
                      <label for="tratamiento"><font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Fecha de consulta</font>
                      </font></label>
                     <select name="fecha_cita" class="form-control" required>
                       <?php /*
                        $id_paciente = $_GET['id'];
                                echo '<option value="0">-- SELECCIONE --</option>';
                                $query = $db -> query ("SELECT CONCAT(cita.fecha, ' ', cita.hora) AS fecha FROM cita WHERE id_paciente = $id_paciente AND cita.id_motivo_consulta IS NULL");
                                while ($valores = mysqli_fetch_array($query)) {
                                echo '<option value="'.$valores[fecha].'">'.$valores[fecha].'</option>';
                              }*/
                                ?>
                     </select>
                  </div>
-->
                  <input type="hidden" name="id_paciente" value="<?php echo $_GET['id']; ?>">     
                         
                 <center>
                 <div style="text-align: right:700;width:800px">
                        <div class="col-md-6 mb-3">
                          <button type="submit" name="enviar" class="btn btn-primary">Guardar </button>
                          <br> </br>
                          <a href="medicos_form.php" class="a-btn">
                          <button class="btn btn-primary" name="regresar" value="Regresar"> Regresar </button>
                          </a>
    
                      </form>



             

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

        <!-- Core plugin JavaScript-->
      <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    
      <!-- Custom scripts for all pages-->
      <script src="js/sb-admin-2.min.js"></script>
    
      <!-- Page level plugins -->
      <script src="vendor/chart.js/Chart.min.js"></script>
    
      <!-- Page level custom scripts -->
      <script src="js/demo/chart-area-demo.js"></script>
      <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>

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

  <title>Registro</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="//oss.maxcdn.com/jquery.bootstrapvalidator/0.5.2/css/bootstrapValidator.min.css" rel="stylesheet"></link>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/historia.css?sd=fdr">
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/historia.js?p=r"></script>
    <script type="text/javascript" src="validator.js"></script>


</head>

<body id="page-top">
   
  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php
    include_once("menu.php");
?>
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

            
    <!-- Circle Buttons -->
              <div class="card shadow mb-8">
                <div class="card-header py-12">
                  <h6 class="m-0 font-weight-bold text-primary"> Registrar Paciente </h6>
                </div>
                <div class="card-body">
                  <form method="POST" action="ingresar_paciente.php" class="needs-validation"> 
                 
                      <div class="col-md-6 mb-3">
                      <label for="nombre"><font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Nombre</font>
                      </font></label>
                      <input type="text" class="form-control" id="nombre" name="nombre" 
                      onblur="revisar(this)" onkeyup="revisar(this)" placeholder="" value="" 
                      revisaLLongitud(this, 20) required>
                       <div class="valid-feedback"></div>
                        </div>

                  <div class="col-md-6 mb-3">
                      <label for="apellidos"><font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Apellidos</font>
                      </font></label>
                      <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="" value="" required>
                        </div>

                  <div class="col-md-6 mb-3">
                      <label for="fecha_nacimiento"><font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Fecha Nacimiento</font>
                      </font></label>
                      <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" placeholder="" value="" required>
                        </div>

                  <div class="col-md-6 mb-3">
                      <label for="genero"><font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Genero</font>
                      </font></label>
                      <input type="text" class="form-control" id="genero" name="genero" placeholder="" value="" required>
                        </div>
                        
                        <div class="col-md-6 mb-3">
                      <label for="direccion"><font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Direccion</font>
                      </font></label>
                      <input type="text" class="form-control" id="direccion" name="direccion" placeholder="" value="" required>
                        </div>

                  <div class="col-md-6 mb-3">
                      <label for="n_telefono"><font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Numero de telefono</font>
                      </font></label>
                      <input type="is_numeric" class="form-control" id="n_telefono" name="n_telefono" placeholder="" value="" required>
                        </div>

                        <div class="col-md-6 mb-3">
                      <label for="dui"><font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">DUI</font>
                      </font></label>
                      <input type="is_numeric" class="form-control" id="dui" name="dui" placeholder="" value="" required>
                        </div>
                 <div class="col-md-6 mb-3">
                      <label for="nit"><font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">NIT</font>
                      </font></label>
                      <input type="is_numeric" class="form-control" id="nit" name="nit" placeholder="" value="" required>
                        </div>

                        <h5 class="m-0 font-weight-bold text-primary">___________________________________________________________________________________
                       </h5>
               <br/>
                        
                  <h5 class="m-0 font-weight-bold text-primary"> Datos de persona responsable </h5>
               <br/>
                        <div class="col-md-6 mb-3">
                      <label for="nom_persoR"><font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Nombre </font>
                      </font></label>
                      <input type="text" class="form-control" id="nom_persoR" name="nom_persoR" placeholder="" value="" required>
                        </div>

                        <div class="col-md-6 mb-3">
                      <label for="apellido_persoR"><font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Apellido </font>
                      </font></label>
                      <input type="text" class="form-control" id="apellido_persoR" name="apellido_persoR" placeholder="" value="" required>
                        </div>
                  
                        <div class="col-md-6 mb-3">
                      <label for="tel_persoR"><font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Telefono </font>
                      </font></label>
                      <input type="is_numeric" class="form-control" id="tel_persoR" name="tel_persoR" placeholder="" value="" required>
                        </div>
                  
                  
                        <h5 class="m-0 font-weight-bold text-primary">___________________________________________________________________________________
                       </h5>
               <br/>

                        <h5 class="m-0 font-weight-bold text-primary"> Generalidades de consulta </h5>
               <br/>
                  
                      <div class="col-md-6 mb-3">
                      <label for="motivo_consulta"><font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Motivo consulta</font>
                      </font></label>
                      <input type="text" class="form-control" id="motivo_consulta" name="motivo_consulta" placeholder="" value="" required="">
                        </div>

                        <div class="col-md-6 mb-3">
                      <label for="alergia"><font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Enfermedades</font>
                      </font></label>
                      <input type="text" class="form-control" id="alergia" name="alergia" placeholder="" value="" required>
                        </div>
                  
                        <div class="col-md-6 mb-3">
                      <label for="medicamentos"><font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Medicamentos</font>
                      </font></label>
                      <input type="text" class="form-control" id="medicamentos" name="medicamentos" placeholder="" value="" required>
                        </div>

                        <h5 class="m-0 font-weight-bold text-primary">___________________________________________________________________________________
                       </h5>
               <br/>
                  
                       
                      
                                      
                        <div class="col-md-6 mb-3">
                          <input type="submit" value="Guardar" id="Guardar" />
                      </form>
                     
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

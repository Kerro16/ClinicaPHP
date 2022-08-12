<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="menu.html">
  <div class="sidebar-brand-icon rotate-n-15">
    <i class="material-icons"> local_hospital </i>
  </div>
  <div class="sidebar-brand-text mx-3">Clínica Odontológica<sup></sup></div>
</a>
<!-- Heading -->
<div class="sidebar-heading">
  Menu </div>

  <li class="nav-item active">
        <a class="nav-link" href="inicio.php">
          <i class="material-icons"> star </i>
          <span>Inicio</span></a> 
      </li>

<!-- Divider -->
<hr class="sidebar-divider my-0">
<!-- Nav Item - Inicio -->
<li class="nav-item active">
  <a class="nav-link" href="">
    <i class="material-icons"> desktop_mac </i>
    <span>Secretaria</span></a> 
</li>
<!-- Divider -->
<hr class="sidebar-divider">


<!-- Nav Item - Registro Paciente -->
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
    <i class="material-icons"> person_add </i>
    <span>Registro Paciente</span>
  </a>
  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Opciones</h6>
      <a class="collapse-item" href="registrar_form.php">Registrar</a>
    </div>
  </div>       
</li>
<!-- Nav Item - Archivo Paciente -->
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#archivo" aria-expanded="true" aria-controls="archivo">
    <i class="material-icons"> folder_special </i>
    <span>Archivo Paciente</span>
  </a>
  <div id="archivo" class="collapse" aria-labelledby="headingarchivo" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Opciones</h6>
      <a class="collapse-item" href="mostrarpaciente.php">Archivo</a>
    </div>
  </div>       
</li>

<!-- Nav Item - Asignación de Citas -->
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
    <i class="material-icons"> today </i>
    <span>Citas</span>
  </a>
  <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Opciones:</h6>
      <a class="collapse-item" href="asignacion-form.php">Asignar Cita</a>
      <a class="collapse-item" href="citas_hoyform.php">Citas</a>  
    </div>
  </div>
</li>

<!-- Divider -->
<hr class="sidebar-divider my-0">
<!-- Nav Item - Inicio -->
<li class="nav-item active">
  <a class="nav-link" href="">
    <i class="material-icons"> healing </i>
    <span>Medico</span></a> 
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Nav Item -Consultas -->
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#consulta" aria-expanded="true" aria-controls="consulta">
    <i class="material-icons"> note_add </i>
    <span>Consultas</span>
  </a>
  <div id="consulta" class="collapse" aria-labelledby="headingconsulta" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Opciones:</h6>
      <a class="collapse-item" href="medicos_form.php">Observaciones</a>  
      <a class="collapse-item" href="historial_observaciones.php">Historial Observaciones</a>   
  </div>
</li>


<!-- Divider -->
<hr class="sidebar-divider my-0">
<!-- Nav Item - Inicio -->
<li class="nav-item active">
  <a class="nav-link" href="">
    <i class="material-icons"> lock_open </i>
    <span>Administrador</span></a> 
</li>
<!-- Divider -->
<hr class="sidebar-divider">

<!-- Nav Item - Ingreso de usuarios -->
<li class="nav-item">
<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#usuario" aria-expanded="true" aria-controls="usuario">
<i class="material-icons"> perm_identity </i>
<span>Ingreso de Usuarios</span>
</a>
<div id="usuario" class="collapse" aria-labelledby="headingusuario" data-parent="#accordionSidebar">
<div class="bg-white py-2 collapse-inner rounded">
<h6 class="collapse-header">Opciones:</h6>
<a class="collapse-item" href="ingeso-usuarios-form.php">Ingresar</a>

</div> 
</div>
</li>
 
<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<li class="nav-item active">
  <a class="nav-link" href="logout.php">
    <i class="material-icons"> settings_power </i>
    <span>Cerrar sesión</span></a>
</li>

</ul>
<!-- End of Sidebar -->

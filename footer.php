<footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Clinica &copy; Analisis de Sistemas II 2019</span>
            <div align="center"><?php
                        date_default_timezone_set('America/El_Salvador');

                        $fecha = date('d/m/Y');
                        echo '<br>' . $fecha . "<br>";

                        $tiempo = date('h:i:s a');
                        echo $tiempo . " <br>";
                        ?> </div>
                </div>
          </div>
        </div>
      </footer>
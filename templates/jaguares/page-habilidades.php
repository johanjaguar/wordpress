<?php
/*
Template Name: Habilidades
*/
get_header();
?>

<body>
  <div class="white_patron">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="<?php echo get_bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
  <script src="<?php echo get_bloginfo('template_url'); ?>/js/RGraph.common.core.js"></script>
  <script src="<?php echo get_bloginfo('template_url'); ?>/js/RGraph.radar.js"></script>




    <div id="elconcepto" class="transparente">

      <?php
      global $wpdb;
      $jugadores = $wpdb->get_results("SELECT * FROM habilidades;");?>



      <div class="container">
          <a name="estadisticas" id="aestadisticas"></a>
          <div class="row">
            <div class="col-md-12" id="listaJugadores">
              <?php foreach($jugadores as $jugador):?>
              <a  href="#" class="jugador"
                  data-id="<?php echo $jugador->id?>"
                  data-nombre="<?php echo $jugador->nombres . ' ' .$jugador->apellidos?>"
                  data-posicion1="<?php echo $jugador->posicion1?>"
                  data-posicion2="<?php echo $jugador->posicion2?>"
                  data-tc="<?php echo $jugador->tackle?>"
                  data-te="<?php echo $jugador->trabajo_equipo?>"
                  data-td="<?php echo $jugador->toma_decisiones?>"
                  data-fz="<?php echo $jugador->fuerza?>"
                  data-vl="<?php echo $jugador->velocidad?>"
                  data-ag="<?php echo $jugador->agilidad?>"
                  data-ps="<?php echo $jugador->pase?>"
                  data-rs="<?php echo $jugador->resistencia?>"
                  data-fortalezas="<?php echo $jugador->fortalezas?>"
                  data-debilidades="<?php echo $jugador->debilidades?>"
                  data-oportunidades="<?php echo $jugador->oportunidades?>"
                  data-amenazas="<?php echo $jugador->amenazas?>"
                  data-fo="<?php echo $jugador->FO?>"
                  data-do="<?php echo $jugador->DO?>"
                  data-fa="<?php echo $jugador->FA?>"
                  data-da="<?php echo $jugador->DA?>"
                  data-perfil="<?php echo $jugador->perfil?>"
                  data-referentes="<?php echo $jugador->referentes?>"
               ><?php echo $jugador->nombres . ' ' .$jugador->apellidos?></a>
               <?php endforeach;?>
            </div>
          </div>


          <div class="row" id="estadisticas" style="display:none">
            <div class="col-md-8">
              <div class="row">
                <div class="col-md-7">
                  <p class="nombreJugador"></p>
                </div>
                <div class="col-md-5">
                  <table class="habilidadesJugador">
                    <tr>
                      <th>TC</th>
                      <th>TE</th>
                      <th>TD</th>
                      <th>FZ</th>
                      <th>VL</th>
                      <th>AG</th>
                      <th>PS</th>
                      <th>RS</th>
                    </tr>
                    <tr>
                      <td class="tc"></td>
                      <td class="te"></td>
                      <td class="td"></td>
                      <td class="fz"></td>
                      <td class="vl"></td>
                      <td class="ag"></td>
                      <td class="ps"></td>
                      <td class="rs"></td>
                    </tr>
                  </table>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4 ">
                  <p class="posicion1"></p>
                  <p class="posicion2"></p>
                  <div class="perfilBox borderbox">
                    <h5>Perfil según posiciones</h5>
                    <p class="perfil"></p>
                  </div>
                  <div class="referentesBox borderbox">
                    <h5>Referentes internacionales recomendados</h5>
                    <p class="referentes"></p>
                  </div>

                </div>
                <div class="col-md-8 borderbox">
                  <canvas id="cvs" width="400" height="350">[No canvas support]</canvas>
                  <div class="row">
                    <div class="col-md-6 borderbox">
                      <h5>Fortalezas</h5>
                      <p class="fortalezas"></p>
                    </div>
                    <div class="col-md-6 borderbox">
                      <h5>Debilidades</h5>
                      <p class="debilidades"></p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 borderbox">
                      <h5>Oportunidades</h5>
                      <p class="oportunidades"></p>
                    </div>
                    <div class="col-md-6 borderbox">
                      <h5>Amenazas</h5>
                      <p class="amenazas"></p>
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <div class="col-md-4">
              <div class="row">
                <div class="col-md-12 borderbox">
                  <h5>FO: PARA MAXIMIZAR FORTALEZAS Y OPORTUNIDADES</h5>
                  <p class="fo"></p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 borderbox">
                  <h5>DO: PARA MINIMIZAR DEBILIDAEDS Y MAXIMIZAR OPORTUNIDADES</h5>
                  <p class="do"></p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 borderbox">
                  <h5>FA: ESTRATEGIA PARA FORTALECERSE Y MINIMIZAR AMENAZAS</h5>
                  <p class="fa"></p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 borderbox">
                  <h5>DA: PARA MINIMIZAR LAS DEBILIDADES Y LAS AMENAZAS.</h5>
                  <p class="da"></p>
                </div>
              </div>

            </div>


          </div>

      </div>
      <?php
      /*echo "<table>";
      foreach($jugadores as $jugador){
        echo "<tr>";
        echo "<td>".$jugador->nombres."</td>";
        echo "<td>".$jugador->apellidos."</td>";
        echo "<td>".$jugador->posicion1."</td>";
        echo "<td>".$jugador->posicion2."</td>";
        echo "<td>".$jugador->tackle."</td>";
        echo "<td>".$jugador->trabajo_equipo."</td>";
        echo "<td>".$jugador->toma_decisiones."</td>";
        echo "<td>".$jugador->fuerza."</td>";
        echo "<td>".$jugador->velocidad."</td>";
        echo "<td>".$jugador->agilidad."</td>";
        echo "<td>".$jugador->pase."</td>";
        echo "<td>".$jugador->resistencia."</td>";
        echo "<td>".$jugador->fortalezas."</td>";
        echo "<td>".$jugador->debilidades."</td>";
        echo "<td>".$jugador->oportunidades."</td>";
        echo "<td>".$jugador->amenazas."</td>";
        echo "<td>".$jugador->FO."</td>";
        echo "<td>".$jugador->DO."</td>";
        echo "<td>".$jugador->FA."</td>";
        echo "<td>".$jugador->DA."</td>";

        echo "</tr>";
      }
      echo "</table>";
      */


      ?>

    </div>




  <script src="<?php echo get_bloginfo('template_url'); ?>/js/bxslider.min.js" type="text/javascript" ></script>
  <script src="<?php echo get_bloginfo('template_url'); ?>/js/varios_jQ.js" type="text/javascript" ></script>
</div>
<footer class="montana-tarawera"><?php get_footer(); ?></footer>
</body>
</html>

<div class="separador lightning_yellow">red mediaTIC</div>
<a name="redMediaTIC" class="anchor"></a>
<div class="container" id="redContent">
    <div class="row ">
        <!-- Nav tabs -->
        <ul id="listaRedMediaTIC" class="nav nav-tabs" role="tablist">
          <li id="clientesLi" class="redes active col-md-4 sinmargen malibu"><a class="l-white" href="#clientes" role="tab" data-toggle="tab">Clientes</a></li>
          <li id="AliadosLi" class="redes col-md-4 conifer"><a class="l-white" href="#aliados" role="tab" data-toggle="tab">Aliados</a></li>
          <li id="AmigosLi" class="redes col-md-4 maroon"><a class="l-white" href="#amigos" role="tab" data-toggle="tab">Amigos</a></li>
        </ul>
        <div class="row tab-content">
            <a name="clientes" class="anchorRed"></a><div class="col-md-12 tab-pane fade in active" id="clientes">
              <?php include("clientes.php"); ?>
            </div>
            <a name="aliados" class="anchorRed"></a><div class="col-md-12 tab-pane fade" id="aliados">
              <?php include("aliados.php"); ?>
            </div>
           <a name="amigos" class="anchorRed"></a><div class="col-md-12 tab-pane fade" id="amigos">
              <?php include("amigos.php"); ?>
            </div>
  
        </div>

    </div>
</div>

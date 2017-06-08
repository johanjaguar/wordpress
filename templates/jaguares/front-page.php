<?php get_header();?>
  <body>
    <a name="inicio"></a>
    <header><?php include('sections/header.php') ?></header>
    <div id="quienessomos" class="textura_gorse">
    	<a name"quienessomos"></a>
    	<h2>Quienes somos</h2>
    	<div class="container">
    		<div class="row">
    			<div class="col-md-12">
    				<p>Club de rugby bogotano dedicado a la practica y promocion del deporte.</p>
    				<p>Siempre interesados en recibir nuevos jugadores.</p>

    			</div>
    		</div>
    	</div>
    </div>
    <div id="divisiones" class="textura_black">
    	<a name"divisiones"></a>
    	<h2>Estas son nuestras divisiones</h2>
    	<div class="container">
    		<div class="row">
    			<div class="col-md-4">
    				<img class="img-responsive" src="<?php echo get_bloginfo('template_url'); ?>/cdn/images/m14.png"/>
    				<h3>Infantil</h3>
    				<p>Enfocados en el aprendizaje del rugby en niños desde los 6 años hasta los 14, con el fin de que aprendan el deporte en un marco de diversión y compañerismo.</p>

    			</div>
    			<div class="col-md-4">
    				<img class="img-responsive" src="<?php echo get_bloginfo('template_url'); ?>/cdn/images/m16.png"/>
    				<h3>Juvenil M16</h3>
    				<p>Acompañando a los niños en su primer paso hacia la competencia, y afianzando los conceptos y valores del rugby desde esta edad de transición.</p>

    			</div>
    			<div class="col-md-4">
    				<img class="img-responsive" src="<?php echo get_bloginfo('template_url'); ?>/cdn/images/m18.png"/>
    				<h3>Juvenil M19</h3>
    				<p>El paso previo al equipo de mayores, equipos con más competencia y afianzamiento de los valores del club.</p>

    			</div>
    		</div>
    		<div class="row">
 				<div class="col-md-4">
					<img class="img-responsive" src="<?php echo get_bloginfo('template_url'); ?>/cdn/images/femme.png"/>
    				<h3>Mayores Femenino</h3>
    				<p>Desde nuestro club damos gran importancia al rugby femenino, al ser la división mas fuerte del rugby en Colombia, con especial atención en acercar mas chicas jovenes al deporte.</p>

    			</div>
    			<div class="col-md-4">
    				<img class="img-responsive" src="<?php echo get_bloginfo('template_url'); ?>/cdn/images/mayores.png"/>
    				<h3>Mayores Masculino</h3>
    				<p>La división mayor de nuestro rugby masculino, equipo de tradicion de mas de 15 años y presente en las diferentes competencias de la Liga de Rugby de Bogotá.</p>

    			</div>
    			<div class="col-md-4">
    				<img class="img-responsive" src="<?php echo get_bloginfo('template_url'); ?>/cdn/images/ud.png"/>
    				<h3>Universitario UDistrital</h3>
    				<p>Nunca descuidamos nuestras raices, alimentamos los diferentes equipos universitarios de la Universidad Distrital, cuna de nuestro club.</p>

    			</div>
    		</div>
    	</div>
    </div>
    <div id="entrenamientos" class="textura_gray">
    	<a name="entrenamientos"></a>
    	<h2>¿Donde y cuando entrenamos?</h2><br/>
    	<div class="container">
    		<div class="row">
    			<div class="col-md-6">
				<h3>MAYORES FEMENINO Y MASCULINO</h3>
    			<p>Avenida de las Americas con Carrera 69 - Cancha de Fútbol Barrio Marsella - Atras de las gradas.</p>
    			<P>MARTES Y JUEVES - 7:00PM A 9:00PM </p>
<br/>
				<h3>INFANTIL Y JUVENIL</h3>
    			<p>Carrera 69 con Calle 9c Bis - Parque de Villa Veronica - Marsella.</p>
    			<P>SABADOS 9:00AM A 11:30AM / DOMINGOS 10:00AM A 12:00PM</p>
    			</div>
    			<div class="col-md-6">
    			<a href="https://www.google.com.co/maps/@4.6339419,-74.1252431,16z/data=!4m2!6m1!1szcuL5bAUWdBc.k7Zcl39sjsD8?hl=es-419" target="_blank">
    				<img class="img-responsive" src="<?php echo get_bloginfo('template_url'); ?>/cdn/images/mapa.jpg"/>
    				<p>Ver mapa en google maps</p>
				</a>
    			</div>
			</div>
		</div>
	</div>
    <?php if( wp_is_mobile() ): ?>
    <div class="volverarriba"><a href="#inicio">^</a></div>
    <?php endif;?>
    <footer class="nero">
		<a name="contactenos"></a>
    	<?php include('sections/footer.php') ?>
	</footer>
  </body>
</html>

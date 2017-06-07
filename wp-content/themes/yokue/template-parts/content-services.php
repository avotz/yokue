<div class="main-services">
	<div class="main-services-container">
		<div class="main-services-item item-hotel">
			<figure class="main-services-item-img">
				<img src="<?php echo get_template_directory_uri();?>/img/option-img-hotels.jpg" alt="Hotels">
			</figure>
			<div class="main-services-item-info">
				<h1 class="main-services-item-title">Hoteles</h1>
				<div class="main-services-item-description">
					Escoje tu hotel en el lugar que más te guste. <!--Choose your hotel in the place that you like-->
				</div>
				<a href="<?php echo esc_url( home_url( '/mapa-hoteles' ) ); ?>" class="btn">Reserva Ya</a>
			</div>
		</div>
		<div class="main-services-item item-tour">
			<figure class="main-services-item-img">
				<img src="<?php echo get_template_directory_uri();?>/img/option-img-tours.jpg" alt="Tours">
			</figure>
			<div class="main-services-item-info">
				<h1 class="main-services-item-title">Tours</h1>
				<div class="main-services-item-description">
					Aventura, Playas, Volcanes, Naturaleza. <!--Adventure, Beaches, Volcanoes, Nature, etc.-->
				</div>
				<a href="<?php echo esc_url( home_url( '/mapa-tours' ) ); ?>" class="btn">Reserva Ya</a>
			</div>
		</div>
		<div class="main-services-item item-transport">
			<figure class="main-services-item-img">
				<img src="<?php echo get_template_directory_uri();?>/img/option-img-transport.jpg" alt="Transport">
			</figure>
			<div class="main-services-item-info">
				<h1 class="main-services-item-title">Transporte</h1>
				<div class="main-services-item-description">
					Escoje tu transporte para viajar. <!--Choose your transport for travel-->
				</div>
				<a href="#transport" class="btn btn-reservar">Reserva Ya</a>
				<div id="transport" class="transport-form white-popup mfp-hide mfp-with-anim">
						<h1>Reservación de Transporte</h1>
						<p style="background-color: #3fa52e; padding: .3rem; color:white;">Transporte a cualquier parte del país bajo pedido</p>
						<?php echo do_shortcode ( '[contact-form-7 id="95" title="Reservaciones Transporte"]'); ?>
						
				</div>
			</div>
		</div>
	</div>
</div>
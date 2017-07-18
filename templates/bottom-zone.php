
<section class="bottom-zone">
	<div class="row">
		<div class="col-sm-6">
			<h3>#FOTOS</h3>
			<div class="row fotos-entel">
		        <?php
		        $i=0;
		        $query = new WP_Query( array( 'post_type' => 'imagenes', 'posts_per_page' => 6));
		        if ($query->have_posts() ) {
		            while ( $query->have_posts() ) { 
		                $query->the_post();
		                $bg = wp_get_attachment_url( get_post_thumbnail_id( $query->ID ) );
		                ?>
		                <div class="col-sm-6 item"><a href="<?php echo $bg; ?>" rel="gallery-zones"><img src="<?php echo $bg; ?>" alt="<?php the_title(); ?>" class="img-responsive"></a></div>
		              <?php $i++; ?>
		            <?php
		            }
		            wp_reset_postdata();
		        }
		        ?>  
			</div>
			<div class="text-center">
				<a href="<?= esc_url(home_url('/')); ?>imagenes" class="btn-naranjo">Ver más</a>
			</div>
		</div>
		<div class="col-sm-6">
			<h3>#DESTACADOS</h3>
			<?php get_template_part("templates/tips"); ?>
		</div>
	</div>
</section>
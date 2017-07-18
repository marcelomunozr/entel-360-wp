
<?php if (is_home()): ?>
  <section class="home-bottom">
    <div id="carousel-gal">
        <?php
        $i=0;
        $query = new WP_Query( array( 'post_type' => 'imagenes', 'posts_per_page' => -1));
        if ($query->have_posts() ) {
            while ( $query->have_posts() ) { 
                $query->the_post();
                $bg = wp_get_attachment_url( get_post_thumbnail_id( $query->ID ) );
                ?>
                <div class="item">
                  <a href="<?php echo $bg; ?>" rel="gallery-homi"><img src="<?php echo $bg; ?>" alt="<?php the_title(); ?>" class="img-responsive"></a>
                </div>
              <?php $i++; ?>
            <?php
            }
            wp_reset_postdata();
        }
        ?>     
    </div>
  </section>
<?php endif ?>
<?php 
  $gplay = get_field('google_play', 'option');
?>
<footer class="content-info">
  <div class="container">
  	<div class="row">
  		<div class="col-sm-4 vtop">
  			<div class="logo-footer"></div><span><a href="<?= esc_url(home_url('/')); ?>sobre-entel-360">Sobre Entel 360°</a></span>
  		</div>
  		<div class="col-sm-8 text-right">
  			<span>Descarga la Aplicación</span><br><a href="<?php echo $gplay; ?>"><div class="google-play"></div></a>
  		</div>
  	</div>
    <?php dynamic_sidebar('sidebar-footer'); ?>
  </div>
</footer>

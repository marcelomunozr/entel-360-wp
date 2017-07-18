<?php
/**
 * Template Name: Repositorio Categorías Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
	<?php get_template_part('templates/page', 'header'); ?>
	<!-- REPOSITORIOS -->
	<?php if (is_page('repositorio')): ?>
		<?php if(isset($_GET['categoria'])){ ?>
		<?php $categoria = $_GET['categoria']; ?>
			<div class="page-header">
			  <h1><?php echo "#".$categoria; ?></h1>
			</div>
			<div class="row">
				<?php echo do_shortcode('[ajax_load_more post_type="post" post_format="standard" category="'.$categoria.'" posts_per_page="6" button_label="Cargando"]'); ?>
			</div>
			<?php get_template_part("templates/bottom-zone"); ?>
		<?php } ?>
	<?php endif ?>

	<!-- IMAGENES -->
	<?php if (is_page('imagenes')): ?>
			<div class="page-header">
			  <h1>#FOTOS</h1>
			</div>
			<div class="row">
		        <?php
		        $i=0;
		        $query = new WP_Query( array( 'post_type' => 'imagenes', 'posts_per_page' => 6));
		        if ($query->have_posts() ) {
		            while ( $query->have_posts() ) { 
		                $query->the_post();
		                $bg = wp_get_attachment_url( get_post_thumbnail_id( $query->ID ) );
		                ?>
		                <div class="col-sm-2 itemson"><a href="<?php echo $bg; ?>" rel="gallery-page"><img src="<?php echo $bg; ?>" alt="<?php the_title(); ?>" class="img-responsive"></a></div>
		              <?php $i++; ?>
		            <?php
		            }
		            wp_reset_postdata();
		        }
		        ?>  
			</div>
			<?php get_template_part("templates/bottom-zone"); ?>
	<?php endif ?>

	<?php if (!is_page('repositorio')&&!is_page('imagenes')): ?>
		<?php get_template_part('templates/content', 'page'); ?>
	<?php endif ?>
<?php endwhile; ?>

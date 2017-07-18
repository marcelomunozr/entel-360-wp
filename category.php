
<section class="category-zone">
	<?php
	foreach((get_the_category()) as $category) {
	?>
	<h1><?php echo "#".strtoupper($category->cat_name); ?></h1>
		<div class="row">
			<?php $i=0; ?>
			<?php while (have_posts()) : the_post(); ?>
				<?php if ($i<=2): ?>
					<div class="col-sm-4">
						<div class="relative">
							<?php $bg = wp_get_attachment_url( get_post_thumbnail_id( $query->ID ) ); ?>
							<a href="<?php the_permalink();?>"><img src="<?php echo $bg; ?>" alt="<?php the_title(); ?>" class="img-responsive"><span class="play-big"></span></a>
						</div>
						<h2 class="entry-title">
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</h2>
						<?php the_excerpt(); ?>
					</div>
					<?php if ($i%3==0): ?>
						<div class="clearfix"></div>
					<?php endif ?>
				<?php endif ?>
				<?php if (($i>2)&&($i<=6)): ?>
					<div class="col-sm-3">
						<div class="relative">
							<?php $bg = wp_get_attachment_url( get_post_thumbnail_id( $query->ID ) ); ?>
							<a href="<?php the_permalink();?>"><img src="<?php echo $bg; ?>" alt="<?php the_title(); ?>" class="img-responsive"><span class="play-tiny"></span></a>
						</div>
						<h2 class="entry-title">
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</h2>
						<?php the_excerpt(); ?>
					</div>
				<?php endif ?>
				<?php if ($i>9999999999999): ?>
					<div class="col-sm-3">
						<div class="relative">
							<?php $bg = wp_get_attachment_url( get_post_thumbnail_id( $query->ID ) ); ?>
							<a href="<?php the_permalink();?>"><img src="<?php echo $bg; ?>" alt="<?php the_title(); ?>" class="img-responsive"><span class="play-tiny"></span></a>
						</div>
						<h2 class="entry-title">
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</h2>
						<?php the_excerpt(); ?>
					</div>
				<?php endif ?>
				<?php $i++; ?>
			<?php endwhile; ?>
		</div>	
	<?php
	}
	?>
</section>
<div class="text-center">
	<a href="<?= esc_url(home_url('/')); ?>repositorio?categoria=<?php echo $category->category_nicename;?>" class="btn-naranjo">Ver más</a>
</div>

<?php get_template_part("templates/bottom-zone"); ?>
<section class="page-zone">
	<?php $bg = wp_get_attachment_url( get_post_thumbnail_id( $query->ID ) ); ?>
	<img src="<?php echo $bg; ?>" alt="<?php the_title(); ?>" class="img-responsive">
	<?php the_content(); ?>
	<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
</section>

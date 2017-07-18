
<?php $bg = wp_get_attachment_url( get_post_thumbnail_id( $query->ID ) ); ?>
<div class="relative">
	<a href="<?php the_permalink(); ?>"><img src="<?php echo $bg; ?>" alt="<?php the_title(); ?>" class="img-responsive"><span class="play-tiny"></span></a>
</div>
<?php
foreach((get_the_category()) as $category) {                                                            
    $category_id = get_cat_ID( $category->cat_name );
    $category_link = get_category_link( $category_id );
	?>
	<h2 class="entry-title">
		<a href="<?php echo esc_url( $category_link ); ?>" title="<?php echo $category->cat_name . ' '; ?>" class="categoria"><?php echo "#".strtoupper($category->cat_name); ?></a><br>
		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	</h2>    
<?php
}
?>

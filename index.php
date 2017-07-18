<?php get_template_part('templates/page', 'header'); ?>

<?php if (!have_posts()) : ?>
	<div class="alert alert-warning">
		<?php _e('Lo sentimos, no hay resultados que mostrar.', 'sage'); ?>
	</div>
	<?php get_search_form(); ?>
<?php endif; ?>

<?php if (have_posts()): the_post(); ?>	
	<section class="home-top">
		<div class="row">
			<div class="col-sm-6 destacado">
				<div class="relative">
					<?php $bg = wp_get_attachment_url( get_post_thumbnail_id( $query->ID ) ); ?>
					<a href="<?php the_permalink();?>"><img src="<?php echo $bg; ?>" alt="<?php the_title(); ?>" class="img-responsive"><span class="play-big"></span></a>
				</div>
				<?php
				foreach((get_the_category()) as $category) {                                                            
				    $category_id = get_cat_ID( $category->cat_name );
				    $category_link = get_category_link( $category_id );
					?>
					<h2 class="entry-title">
						<a href="<?php echo esc_url( $category_link ); ?>" title="<?php echo $category->cat_name . ' '; ?>" class="categoria"><?php echo "#".strtoupper($category->cat_name); ?></a>
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</h2>
				    
				<?php
				}
				?>
				<!-- <time class="updated" datetime="<?= get_post_time('c', true); ?>"><?= get_the_date(); ?></time>
				<p class="byline author vcard"><?= __('Por', 'sage'); ?> <a href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn"><?= get_the_author(); ?></a></p> -->
				<?php the_excerpt(); ?>
			</div>
			<div class="col-sm-6 secundarios">
				<div class="row">
					<?php $i=1; ?>
					<?php while (have_posts()) : the_post(); ?>				
			  			<?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
			  			<?php if ($i%3==0): ?>
			  				<div class="clearfix hidden-xs"></div>			  				
			  			<?php endif ?>
			  			<div class="clearfix visible-xs"></div>
			  			<?php if ($i==6): ?>
			  				<?php break; ?>
			  			<?php endif ?>
			  			<?php $i++; ?>
					<?php endwhile; ?>
				</div>
			</div>
		</div>
		<div class="clear30"></div>
		<div class="row">
			<div class="col-sm-7 inferiores">
				<div class="row">
					<?php while (have_posts()) : the_post(); ?>
						<div class="col-sm-4 col-xs-5">
							<?php $bg = wp_get_attachment_url( get_post_thumbnail_id( $query->ID ) ); ?>
							<div class="relative">
								<a href="<?php the_permalink(); ?>"><img src="<?php echo $bg; ?>" alt="<?php the_title(); ?>" class="img-responsive"><span class="play-tiny"></span></a>
							</div>
						</div>
						<div class="col-sm-8 col-xs-7">
							<?php
							foreach((get_the_category()) as $category) {                                                            
							    $category_id = get_cat_ID( $category->cat_name );
							    $category_link = get_category_link( $category_id );
								?>
								<h2 class="entry-title">
									<a href="<?php echo esc_url( $category_link ); ?>" title="<?php echo $category->cat_name . ' '; ?>" class="categoria"><?php echo "#".strtoupper($category->cat_name); ?></a>
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h2>
								<?php the_excerpt(); ?>
							<?php
							}
							?>
						</div>
						<div class="clear10"></div>
					<?php endwhile; ?>
				</div>
			</div>
			<div class="col-sm-5">
				<?php get_template_part("templates/tips"); ?>
			</div>
		</div>
	</section>
<?php endif ?>


<?php the_posts_navigation(); ?>

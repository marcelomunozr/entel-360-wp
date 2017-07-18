<?php while (have_posts()) : the_post(); ?>
  <?php  $video = get_field('video');?>
  <article <?php post_class('single-zone'); ?>>
    <div class="row">
      <div class="col-sm-2 hidden-xs"></div>
      <div class="col-sm-8 col-sm-offset-2">
        <?php $bg = wp_get_attachment_url( get_post_thumbnail_id( $query->ID ) ); ?>
        <div class="relative">
          <?php if (!empty($video)): ?>
            <iframe class="el-video" width="100%" height="400" src="<?php echo $video; ?>" frameborder="0" allowfullscreen></iframe>
          <?php endif ?>
          <?php if (empty($video)): ?>
            <img src="<?php echo $bg; ?>" alt="<?php the_title(); ?>" class="img-responsive img-center"><span class="play-tiny"></span>
          <?php endif ?>
        </div>
        <?php
        foreach((get_the_category()) as $category) { 
          ?>
          <h1 class="entry-title text-center">
            <span><?php echo "#".strtoupper($category->cat_name)." "; ?> </span>
            <?php the_title(); ?>
          </h1>    
        <?php
        }
        ?>
      </div>
    </div>
    <div class="entry-content text-center">
      <?php the_content(); ?>
    </div>

  </article>
<?php endwhile; ?>
<?php get_template_part("templates/bottom-zone"); ?>
<article <?php post_class(); ?>>
  <div>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php if (get_post_type() === 'post') { get_template_part('templates/entry-meta'); } ?>
  </div>
  <div class="entry-summary">
    <?php the_excerpt(); ?>
  </div>
</article>

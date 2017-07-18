<div class="tips-zone">
	<span class="up-tip" id="prev-tip"></span>

    <?php $gal=5; ?>
    <?php if (is_home()): ?>
        <?php $gal = 4; ?>
    <?php endif ?>

    <ul id="tips" class="tips" data-gal="<?php echo $gal; ?>">
        <?php
        $i=0;
        $query = new WP_Query( array( 'post_type' => 'tips', 'posts_per_page' => -1));
        if ($query->have_posts() ) {
            while ( $query->have_posts() ) { 
                $query->the_post();
                $tip = get_field('tip');
                $terms = get_the_terms( get_the_ID(), 'hashtag' );//para las tax
                ?>
                <li>
                	<div class="the-tip">> <?php echo $tip; ?></div>
                	<div class="the-hash">
						<?php                          
						if ( $terms && ! is_wp_error( $terms ) ) :  
						    $draught_links = array(); 
						    foreach ( $terms as $term ) {
						        echo '#'.$term->name.' ';
						    }
						endif; 
						?>
                	</div>
            	</li>
            	<?php $i++; ?>
            <?php
            }
            wp_reset_postdata();
        }
        ?>
    </ul>
    <span class="down-tip" id="next-tip"></span>
</div>
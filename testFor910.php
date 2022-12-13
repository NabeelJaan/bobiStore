<?php $query = new WP_Query( [
    'post_type'      => 'popular-categories',
    'nopaging'       => true,
    'posts_per_page' => '-1',
] ); ?>

<?php if ( $query->have_posts() ) : ?>


    <div class="container">
        <div class="owl-carousel">

            <?php while ( $query->have_posts() ) : $query->the_post(); ?>

                <div>

                    <div class="single-cat">

                        <?php the_post_thumbnail(''); ?>

                        <h4><?php the_title(); ?></h4>

                        <a href="<?php the_permalink();?>" area-label="view details" target="_self">view detail</a>

                    </div>

                </div>

            <?php endwhile; ?>
        </div>
    </div>

<?php endif; ?>

<?php wp_reset_postdata(); ?>








<div class="owl-carousel">
	
  	<div>
		
	  	<div class="single-cat">
			
			<img src="/wp-content/uploads/2021/12/WEB_0019_APX3SYS-A_300dpi_No_White_Space-1.png" width="300" height="">


			
			<h4>Dual lane system long category system dropping to three lines</h4>

			
			<a href="#" area-label="view details" target="_self">view detail</a>

			
		</div>
		
	</div>
	
	
</div>
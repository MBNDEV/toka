<?php 

/* Template Name: Inner Page */

get_header() ?>



<section class="page-content">
	<?php
	while ( have_posts() ) : the_post();
		
		the_content();

	endwhile; // End of the loop.
	?>
	<?php if(is_page() == 11) {?>
		<a href="<?php echo home_url('/find-store/') ?>" class="find-store-btn fixed">
			<img src="<?php echo MBN_ASSETS_URI ?>/img/icn-find-a-store.svg" alt="">
			Find A Store
		</a>	
	<?php }	?>
</section>



<?php get_footer() ?>
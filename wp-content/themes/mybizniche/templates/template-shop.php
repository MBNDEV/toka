<?php 

/* Template Name: Shop Page */

get_header() ?>



<main class="shop-content">
	<div class="grid-container">
	<?php
	while ( have_posts() ) : the_post();
		
		the_content();

	endwhile; // End of the loop.
	?>
	</div>
</main>



<?php get_footer() ?>
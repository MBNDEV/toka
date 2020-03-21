<?php get_header() ?>


<main id="blog-post">
    <div class="grid-container">
    <?php if ( is_home() && ! is_front_page() ) : ?>
					<h1><?php single_post_title(); ?></h1>
			<?php else : ?>
				<h1><?php echo str_replace("Month: ", "Date: ", get_the_archive_title()); ?></h1>
			<?php endif; ?>
    <?php
    if ( have_posts() ) : ?>
                    
        <?php 
        while ( have_posts() ) :  the_post(); ?>

        <article id="post-<?php the_ID(); ?>" class="post-item">
           
            <?php the_post_thumbnail(); ?>
        
            <div class="entry-content">
                <h2><?php the_title(); ?></h2>
                <?php
                the_excerpt();
                ?>
            </div><!-- .entry-content -->
        </article><!-- #post-<?php the_ID(); ?> -->

        <?php endwhile;

        the_posts_navigation();

    else :

        get_template_part( 'template-parts/content', 'none' );

    endif;
    ?>
    </div>
</main><!-- #main -->



<?php get_footer() ?>
<?php get_header() ?>

<main id="blog-post">
    <div class="grid-container">
        <div class="blog-post-header d2">
            <h6><?php echo get_the_title( get_option('page_for_posts', true) ); ?></h6>
            <?php the_title('<h1>', '</h1>') ?>
        </div>   
        <div class="blog-post-detail">    
        <?php
        if ( have_posts() ) : ?>
                        
            <?php 
            while ( have_posts() ) :  
                
                the_post(); 
                
                get_template_part( 'template-parts/post-list', get_post_format() );
      
            endwhile;

        endif;
        ?>
        </div> 
    </div>

    <a href="<?php echo home_url('/find-store/') ?>" class="find-store-btn fixed hide-for-medium">
        <img src="<?php echo MBN_ASSETS_URI ?>/img/icn-find-a-store.svg" alt="">
        Find A Store
    </a>	
</main><!-- #main -->

<?php get_footer() ?>
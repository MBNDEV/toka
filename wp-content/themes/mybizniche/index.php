<?php get_header() ?>


<main id="blog-post">
    <div class="grid-container">
        <div class="blog-post-header">
            <?php if ( is_home() && ! is_front_page() ) : ?>
                <h1><?php single_post_title(); ?></h1>
            <?php else : ?>
                <h1><?php echo str_replace("Month: ", "Date: ", get_the_archive_title()); ?></h1>
            <?php endif; ?>
        </div>   
        <div class="blog-post-list">    
        <?php
            if ( have_posts() ) : 

                while ( have_posts() ) :  
                    
                    the_post(); 
                    get_template_part( 'template-parts/post-list', get_post_format() );
        
                endwhile;

            else :

                get_template_part( 'template-parts/content', 'none' );

            endif;
        ?>
        </div> 
        <?php if (  $wp_query->max_num_pages > 1 ) { ?>
            <div class="btn-loading"><img src="<?php echo MBN_ASSETS_URI ?>/img/loading.gif" alt=""></div>
        <?php } ?>

        <script>
            var mbn_ajaxurl = '/wp-admin/admin-ajax.php', 
            mbn_posts = '<?php echo serialize( $wp_query->query_vars ) ?>',
            mbn_current_page = 1,
            mbn_max_page = <?php echo $wp_query->max_num_pages; ?>

            jQuery(function($){
                var canBeLoaded = true,
                    bottomOffset = 2000; 
            
                $(window).scroll(function(){
                    var data = {
                        'action': 'loadmore',
                        'query': mbn_posts,
                        'page' : mbn_current_page
                    };
                    if( $(document).scrollTop() > ( $(document).height() - bottomOffset ) && canBeLoaded == true ){
                        $.ajax({
                            url : mbn_ajaxurl,
                            data:data,
                            type:'POST',
                            beforeSend: function( xhr ){
                                canBeLoaded = false; 
                            },
                            success:function(data){
                                if( data ) {
                                    $('.blog-post-list').find('article:last-of-type').after( data );
                                    canBeLoaded = true; 
                                    mbn_current_page++;
                                    if ( mbn_current_page == mbn_max_page ) $('.btn-loading').remove(); 
                                } else {
                                    $('.btn-loading').remove();
                                }
                            }
                        });
                    }
                });
            }); 
        </script>
    </div>

    <a href="<?php echo home_url('/find-store/') ?>" class="find-store-btn fixed hide-for-medium">
        <img src="<?php echo MBN_ASSETS_URI ?>/img/icn-find-a-store.svg" alt="">
        Find A Store
    </a>	
</main><!-- #main -->



<?php get_footer() ?>
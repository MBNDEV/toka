<article id="post-<?php the_ID(); ?>" class="blog-post-item">
    <div class="post-date">
        <span><?php echo get_the_date( 'M' ); ?>
            <b><?php echo get_the_date( 'd' ); ?></b></span>
        <?php echo get_the_date( 'Y' ); ?>
    </div>
    
    <figure>
        <?php 
            if ( has_post_thumbnail() ) {
                the_post_thumbnail();
            } 
        ?>
    </figure>
    
    <div class="post-share">
        <h5>Share On:</h5>
        <ul>
            <li class="share-to-fb">
                <a onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>&p[title]=<?php the_title(); ?>','newwindow', 'width=560,height=560'); return false;" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>">
                    <!-- <img width="20" height="30" src="<?php echo MBN_ASSETS_URI ?>/img/icn-facebook-share.svg" alt="Facebook"> -->
                    <svg width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path class="prefix__cls-1" d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/></svg>
                </a>
            </li>
            <li class="share-to-tweet">
                <a onclick="window.open('http://twitter.com/intent/tweet?text=Currently reading <?php the_title(); ?>&url=<?php the_permalink(); ?>','newwindow', 'width=560,height=560'); return false;" href="http://twitter.com/intent/tweet?text=Currently reading <?php the_title(); ?>&url=<?php the_permalink(); ?>">
                    <!-- <img width="25" height="30" src="<?php echo MBN_ASSETS_URI ?>/img/icn-twitter-share.svg" alt="Twitter"> -->
                    <svg width="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"/></svg>
                </a>
            </li>
            <li class="share-to-email">
                <a class="no-animation" href="mailto:?subject=I wanted to share this post with you from <?php bloginfo('name'); ?>&amp;body= <?php the_title('','',true); ?>&#32;&#32;<?php the_permalink(); ?>"  title="Share by Email">
                    <!-- <img width="25" height="23" src="<?php echo MBN_ASSETS_URI ?>/img/icn-envelope-share.svg" alt="Email"> -->
                    <svg width="25" xmlns="http://www.w3.org/2000/svg" id="prefix__envelope" width="30.003" height="22.502" viewBox="0 0 30.003 22.502"><path id="prefix__Path_4005" d="M7.135 65.826c4.118 3.487 11.343 9.623 13.467 11.536a1.255 1.255 0 0 0 1.815 0c2.125-1.915 9.351-8.051 13.469-11.538a.625.625 0 0 0 .088-.863A2.482 2.482 0 0 0 34.011 64h-25a2.482 2.482 0 0 0-1.962.963.625.625 0 0 0 .086.863z" class="prefix__cls-1" data-name="Path 4005" transform="translate(-6.509 -64)"/><path id="prefix__Path_4006" d="M29.641 126.47a.622.622 0 0 0-.667.09c-4.567 3.871-10.395 8.833-12.229 10.486a2.531 2.531 0 0 1-3.489 0c-1.955-1.761-8.5-7.325-12.227-10.485a.625.625 0 0 0-1.029.476v15.719a2.5 2.5 0 0 0 2.5 2.5h25a2.5 2.5 0 0 0 2.5-2.5v-15.719a.625.625 0 0 0-.359-.567z" class="prefix__cls-1" data-name="Path 4006" transform="translate(0 -122.754)"/></svg>
                </a>
            </li>
        </ul>
    </div>
            
    <div class="entry-content">
        <?php if (!is_singular('post')) {
                the_title('<h2 class="post-title">','</h2>');
                the_excerpt(10); 
            } else {
                the_content();
            }         
        ?>

        <?php if (!is_singular('post')) { ?>
        <div class="btn-arrow">
        <a href="<?php the_permalink(); ?>">Read More</a>
        </div>
        <?php } ?>

    </div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
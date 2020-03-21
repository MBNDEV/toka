<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package te
 */

get_header();
?>

	<main id="search-results" >
		<div  class="grid-container">

        <?php if ( have_posts() ) : ?>
            
				<h1 class="page-title">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'te' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>
           
            
            <div class="grid-x grid-margin-x grid-padding-x">
            <?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post(); ?>
                <div class="cell large-12">
                    <div id="post-<?php the_ID(); ?>" class="search-item">
                        <figure <?php if(has_post_thumbnail()) { ?> style="width:170px;" <?php } ?>>
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                        </figure>
                        <article>
                            <?php the_title( sprintf( '<h2 class="entry-title"><small>&#9658;</small><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
                            <?php the_excerpt(); ?>
                        </article><!-- .entry-summary -->
                    </div>
                </div>
			<?php endwhile; ?>
            </div>    
		<?php the_posts_navigation();

		else : ?>

            <section class="no-results not-found">
                    <h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'te' ); ?></h1>
                
                    <?php
                    if ( is_home() && current_user_can( 'publish_posts' ) ) :

                        printf(
                            '<p>' . wp_kses(
                                /* translators: 1: link to WP admin new post page. */
                                __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'te' ),
                                array(
                                    'a' => array(
                                        'href' => array(),
                                    ),
                                )
                            ) . '</p>',
                            esc_url( admin_url( 'post-new.php' ) )
                        );

                    elseif ( is_search() ) :
                        ?>

                        <p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'te' ); ?></p>
                        <?php

                    else :
                        ?>

                        <p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'te' ); ?></p>
                        <?php

                    endif;
                    ?>
            </section><!-- .no-results -->

		<?php endif;
		?>

    </div>
	</main><!-- #main -->

<?php
get_footer();

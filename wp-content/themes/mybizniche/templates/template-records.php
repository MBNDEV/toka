<?php 

/* Template Name: Batch Records Page */

get_header() ?>



<main class="records-content">
	<div class="grid-container">
		<?php
			while ( have_posts() ) : the_post();
					
				the_content();

			endwhile; // End of the loop.
		?>

		<section class="content" id="batch-wrap" data-something>
		<div class="grid-x grid-margin-x">
			<div class="large-9 cell small-order-2">
	
				<div class="products-by-tax">
				<?php
					$pcat = get_terms( 
						'batch-records', 
						array(
							'orderby'=> 'title', 
							'order'=> 'DESC', 
							'parent' => 0, 
							'hide_empty' => false
						)
					);
										
					foreach ( $pcat as $batch_category ) {
						$args = array(
							'posts_per_page' => -1,
							'post_type' => 'batch-record',	
							'orderby' => 'title,',
							'tax_query' => array(
								'relation' => 'AND',
								array(
									'taxonomy' => 'batch-records',
									'field' => 'slug',
									'terms' => $batch_category->slug,
									'include_children' => false
								)
							)
						);
						$pque = new WP_Query( $args );
						$tCount = count (get_term_children( $batch_category->term_id, 'batch-records' ));
						$pCount = $pque->found_posts; 

						//if($tCount < 1 and $pCount > 0) {
							echo '<div class="batch-group"> <div class="offset" id="'. $batch_category->slug .'"></div>';
							echo '<h4 class="batch-head">' . $batch_category->name . '</h4>';
							if($pque->found_posts > 0) {
								echo "<div class='grid-x grid-margin-x batch-list'>";
								while ( $pque->have_posts() ) { $pque->the_post(); ?>
									<div class="large-4 medium-6 cell">
										<div class="offset" id="post<?php echo $batch_category->term_id; the_ID(); ?>"></div>	
										<div class="batch-item">
											<figure>
												<?php 
													if ( has_post_thumbnail() ) {
														the_post_thumbnail('news-thumbs');
													}
												?>
											</figure>
											<h6><?php the_title(); ?></h6>
											<?php if(get_field('batch_record_number') != "") { ?>
											<div class="lot-number">Lot Number: <a href="<?php the_field('batch_record_file') ?>" target="_blank"><?php the_field('batch_record_number'); ?></a> (<?php the_field('batch_record_date'); ?>)</div>
											<?php } ?>
											<?php if(get_field('batch_record_2_number') != "") { ?>
											<div class="lot-number">Lot Number: <a href="<?php the_field('batch_record_2_file') ?>" target="_blank"><?php the_field('batch_record_2_number'); ?></a> (<?php the_field('batch_record_2_date'); ?>)</div>
											<?php } ?>
											<?php if(get_field('batch_record_3_number') != "") { ?>
											<div class="lot-number">Lot Number: <a href="<?php the_field('batch_record_3_file') ?>" target="_blank"><?php the_field('batch_record_3_number'); ?></a> (<?php the_field('batch_record_3_date'); ?>)</div>
											<?php } ?>
											<?php if(get_field('batch_record_4_number') != "") { ?>
											<div class="lot-number">Lot Number: <a href="<?php the_field('batch_record_4_file') ?>" target="_blank"><?php the_field('batch_record_4_number'); ?></a> (<?php the_field('batch_record_4_date'); ?>)</div>
											<?php } ?>
											<?php if(get_field('batch_record_5_number') != "") { ?>
											<div class="lot-number">Lot Number: <a href="<?php the_field('batch_record_5_file') ?>" target="_blank"><?php the_field('batch_record_5_number'); ?></a> (<?php the_field('batch_record_5_date'); ?>)</div>
											<?php } ?>
											<?php if(get_field('batch_record_6_number') != "") { ?>
											<div class="lot-number">Lot Number: <a href="<?php the_field('batch_record_6_file') ?>" target="_blank"><?php the_field('batch_record_6_number'); ?></a> (<?php the_field('batch_record_6_date'); ?>)</div>
											<?php } ?>
											<?php if(get_field('batch_record_7_number') != "") { ?>
											<div class="lot-number">Lot Number: <a href="<?php the_field('batch_record_7_file') ?>" target="_blank"><?php the_field('batch_record_7_number'); ?></a> (<?php the_field('batch_record_7_date'); ?>)</div>
											<?php } ?>
											<?php if(get_field('batch_record_8_number') != "") { ?>
											<div class="lot-number">Lot Number: <a href="<?php the_field('batch_record_8_file') ?>" target="_blank"><?php the_field('batch_record_8_number'); ?></a> (<?php the_field('batch_record_8_date'); ?>)</div>
											<?php } ?>
											<?php if(get_field('batch_record_9_number') != "") { ?>
											<div class="lot-number">Lot Number: <a href="<?php the_field('batch_record_9_file') ?>" target="_blank"><?php the_field('batch_record_9_number'); ?></a> (<?php the_field('batch_record_9_date'); ?>)</div>
											<?php } ?>
											<?php if(get_field('batch_record_10_number') != "") { ?>
											<div class="lot-number">Lot Number: <a href="<?php the_field('batch_record_10_file') ?>" target="_blank"><?php the_field('batch_record_10_number'); ?></a> (<?php the_field('batch_record_10_date'); ?>)</div>
											<?php } ?>
											<?php if(get_field('batch_record_11_number') != "") { ?>
											<div class="lot-number">Lot Number: <a href="<?php the_field('batch_record_11_file') ?>" target="_blank"><?php the_field('batch_record_11_number'); ?></a> (<?php the_field('batch_record_11_date'); ?>)</div>
											<?php } ?>
											<?php if(get_field('batch_record_12_number') != "") { ?>
											<div class="lot-number">Lot Number: <a href="<?php the_field('batch_record_12_file') ?>" target="_blank"><?php the_field('batch_record_12_number'); ?></a> (<?php the_field('batch_record_12_date'); ?>)</div>
											<?php } ?>
											<?php if(get_field('batch_record_13_number') != "") { ?>
											<div class="lot-number">Lot Number: <a href="<?php the_field('batch_record_13_file') ?>" target="_blank"><?php the_field('batch_record_13_number'); ?></a> (<?php the_field('batch_record_13_date'); ?>)</div>
											<?php } ?>
											<?php if(get_field('batch_record_14_number') != "") { ?>
											<div class="lot-number">Lot Number: <a href="<?php the_field('batch_record_14_file') ?>" target="_blank"><?php the_field('batch_record_14_number'); ?></a> (<?php the_field('batch_record_14_date'); ?>)</div>
											<?php } ?>
											<?php if(get_field('batch_record_15_number') != "") { ?>
											<div class="lot-number">Lot Number: <a href="<?php the_field('batch_record_15_file') ?>" target="_blank"><?php the_field('batch_record_15_number'); ?></a> (<?php the_field('batch_record_15_date'); ?>)</div>
											<?php } ?>
										</div>
									</div>
									<?php
								}
								echo "</div>";
							} else {
								echo "<p class='no-results'>No Batch Record/s Found</p>";
							}
							echo "</div>";
						//}
					}
				?>
				</div>
			</div>
			<div class="large-3 cell small-order-1" data-sticky-container>

				<aside class="batch-sidebar" data-toggler=".show" data-sticky data-margin-top="7" data-anchor="batch-wrap">
					<div class="batch-menu">
						<ul class="vertical menu" data-accordion-menu>
						<?php
							$pcat = get_terms( 
								'batch-records', 
								array(
									'orderby'=> 'title', 
									'order'=> 'DESC', 
									'parent' => 0, 
									'hide_empty' => false
								)
							);
							$batchCount = 0;					
							foreach ( $pcat as $batch_category ) {
								$batchCount ++;
								if($batchCount == 1) {$batchCount = 'is-active';} else {$batchCount = '';}
								$args = array(
									'posts_per_page' => -1,
									'post_type' => 'batch-record',	
									'orderby' => 'title,',
									'tax_query' => array(
										'relation' => 'AND',
										array(
											'taxonomy' => 'batch-records',
											'field' => 'slug',
											'terms' => $batch_category->slug,
											'include_children' => false
										)
									)
								);
								$pque = new WP_Query( $args );
								$tCount = count (get_term_children( $batch_category->term_id, 'batch-records' ));
								$pCount = $pque->found_posts; 

								//if($tCount < 1 and $pCount > 0) {
									echo '<li class="prodbytax-item '. $batch_category->slug .'" data-c="'.$batchCount.'" aria-expanded="false">';
									echo '<a href="#'. $batch_category->slug .'" class="prodtax-head"  data-smooth-scroll>' . $batch_category->name . '</a>';
									if($pque->found_posts > 0) {
										echo "<ul class='".$batchCount."'>";
										while ( $pque->have_posts() ) { $pque->the_post(); ?>
											<li><a href="#post<?php  echo $batch_category->term_id; the_ID(); ?>"  data-smooth-scroll><?php the_title(); ?></a></li>
											<?php
										}
										echo "</ul>";
									} 
									echo "</li>";
								//}
							}
						?>
						</ul>


					</div>
				</aside>
			</div>
		</div>
		</section>
		<script>
			jQuery(function($){
				$(".batch-menu ul ul a").click(function(e){
					e.preventDefault();
					var href = $(this).attr("href");
					$('.item-active').removeClass('item-active');
					setTimeout(function(){
						$(href).addClass("item-active");
						/*setTimeout(function(){
							$(href).removeClass("animHighlights");
						},800);*/
					},500)
					$("html,body").animate({scrollTop:$(href).offset().top - (app.data.bannner_height * 0.5)},500);
				});
			});
		</script>
		
	</div>
</main>



<?php get_footer() ?>
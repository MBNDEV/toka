<?php 
	$current_link = home_url($_SERVER['REQUEST_URI']); 
	$taxonomy_name = 'product_cat';
	$applications_terms = array(20,21,22,23,24);
	$batteries_terms = array(18,19,109);
	$accessories_terms = array(70,71);
?>

<aside class="woocommerce-sidebar"  id="mobtoggle" data-toggler=".show">
	<h4 class="all-products <?php if(get_the_permalink(6) == $current_link) {echo "selected";} ?>"><a href="<?php the_permalink(6); ?>">
		<img src="<?php bloginfo('template_url'); ?>/assets/images/icn-all-products.svg" alt="All Products" width="45">
		All Products</a><span class="mobtoggle" data-toggle="mobtoggle"></span></h4>

	<div class="all-categories">
	<h5><a href="<?php echo get_term_link(77) ?>"><?php echo get_term(77)->name; ?></a></h5>
	<?php
		echo '<ul class="vertical menu accordion-menu" data-accordion-menu data-submenu-toggle="true" data-multi-open="false" >';
		$categories = get_terms( array('taxonomy'=>$taxonomy_name, 'parent' => 0,  'hide_empty' => false) );
		foreach ( $categories as $category ) {
			$image = wp_get_attachment_url(get_term_meta($category->term_id, 'thumbnail_id', true));	 
			if($image != ""){$image = '<img width="45" src="'.$image.'" alt="'.$category->name.'">';}
			$term_link = get_term_link( $category );	
			if($term_link == $current_link) {$acc_active = "acc-active"; $is_active = "is-active";} else {$acc_active = ""; $is_active = "";}

		    echo '<li class="'.$acc_active.'">';
		    echo '<a href="'.$term_link.'">'.$image.' <span>'.$category->name.'</span></a>';

			$subCategories = get_terms( $taxonomy_name, array('parent' => $category->term_id, 'hide_empty' => false));
		    if(count($subCategories) > 0) {  
			    echo  '<ul class="'.$is_active.'" style="display:block">'; 
		        foreach($subCategories as $subCategory) {
			  		$term_link = get_term_link( $subCategory );
					if($term_link == $current_link) {$is_active = "sub-active";} else {$is_active = "";}
		            echo '<li class="'.$is_active.'"><a href="'.$term_link.'">'.$subCategory->name.'</a></li>';
		        }
			    echo  '</ul>';  
	    	}
		    echo  '</li>';  
		}
		echo  '</ul>';
	?>


	</div>
</aside>
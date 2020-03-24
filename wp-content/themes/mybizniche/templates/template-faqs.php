<?php

/* Template Name: Faqs */

get_header(); 
$post_args = ['post_status'=>'publish',
'post_type'=>'faq',
'orderby'=>'menu_order',
'order'=>"ASC",
'posts_per_page'=>-1,
'tax_query' => array(
            array(
                'include_children'=> false,
                'taxonomy' => 'faqs_categories',
                'field'    => 'term_id',
            )
        )
    ];
$taxonomy_post_content = [];
$layout = ['full'=>'large-12','one_half'=>'large-6','one_third'=>'large-4'];
$terms = get_terms([
    'taxonomy'=>"faqs_categories",
    "hide_empty"=>0
]);
?>

<section class="banner">
    <div class="grid-container">
        <div class="grid-x grid-margin-x align-center">
            <h1><?php the_title();?></h1>
        </div>
    </div>
</section>

<section class="content">
    <div class="grid-container">
        <div class="grid-x grid-margin-x">
            <div class="cell large-3">

            <ul class="accordion" data-accordion data-allow-all-closed="true">
            <?php foreach($terms as $term): ?>
            <li class="accordion-item" data-accordion-item>
                <a href="#" class="accordion-title"><?php echo $term->name?></a>
                <div class="accordion-content" data-tab-content>
                    <ul class="sidenav">
                    <?php
                        $post_args['tax_query'][0]['terms'] = $term->term_id;
                        $posts = query_posts($post_args);
                        $post_arr = [];
                        foreach($posts as $post){
                            ?>
                                <li><a href="#post<?php echo $post->ID?>"><?php echo $post->post_title;?></a></li>
                            <?php
                            $post_arr[] = $post;
                        }
                        $taxonomy_post_content[] = [
                            'term'=>$term,
                            'posts'=>$post_arr,
                        ];
                    ?>
                    </ul>
                </div>
            </li>
            <?php endforeach; wp_reset_query();?>
            </ul>
            </div>
            <div class="cell large-9">
                    <?php foreach($taxonomy_post_content as $content):?>
                            <div class="inner-content">
                                <h2><?php echo $content['term']->name?></h2>
                                <div class="grid-x grid-margin-x">
                                <?php if(count($content['posts'])>0):?>
                                    <?php foreach($content['posts'] as $key=> $post):
                                        $layout_key = strtolower(str_replace(" ","_",get_field("layout",$post->ID)));
                                        ?>
                                    <div data-equalizer data-equalize-on="large" class="cell box <?php echo array_key_exists($layout_key,$layout)?$layout[$layout_key]:"large-4"?>">
                                        <div id="post<?php echo $post->ID;?>" class="item it<?php echo $key;?>">
                                        <h3><?php echo $post->post_title ?></h3>
                                        <?php echo apply_filters('the_content', $post->post_content)?>

                                        </div><!--end-->
                                    </div>
                                    <?php endforeach;?>
                                    <?php else:?>
                                        <div class="cell large-12">
                                            <p>No post found.</p>
                                        </div>
                                    <?php endif;?>
                                </div>
                            </div>
                    <?php endforeach;?>
            </div>
        </div>
    </div>
</section>
<?php get_footer() ?>
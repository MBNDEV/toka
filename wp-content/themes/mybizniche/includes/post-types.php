<?php


function mbn_register_post_types(){

    /* Dogs  */
    // $labels = array(
    //     'name'                  => __('Dogs'),
    //     'singular_name'         => __('Dog'),
    //     'menu_name'             => __('Dogs'),
    //     'name_admin_bar'        => __('Dog'),
    //     'add_new'               => __('Add New'),
    //     'add_new_item'          => __('Add New Dog'),
    //     'new_item'              => __('New Dog'),
    //     'edit_item'             => __('Edit Dog'),
    //     'view_item'             => __('View Dog'),
    //     'all_items'             => __('Dogs'),
    //     'search_items'          => __('Search Dogs'),
    //     'parent_item_colon'     => __('Parent Dogs:'),
    //     'not_found'             => __('No Dogs found.'),
    //     'not_found_in_trash'    => __('No Dogs found in Trash.')
    // );

    // $args = array(
    //     'labels'                => $labels,
    //     'description'           => 'lorem ipsum',
    //     'public'                => false,
    //     'publicly_queryable'    => false,
    //     'show_in_menu'          => true,
    //     'show_ui'               => true,
    //     'show_in_admin_bar'     => false,
    //     'show_in_nav_menus'     => true,
    //     'capability_type'       => 'post',
    //     'show_in_rest'          => true,
    //     'has_archive'           => true,
    //     'hierarchical'          => false,
    //     'can_export'            => true,
    //     'menu_position'         => 5,
    //     'menu_icon'             => 'dashicons-buddicons-activity',
    //     'supports'              => array('title', 'editor', 'thumbnail'),
    //     'delete_with_user'      => true
    // );

    // register_post_type('dogs', $args);


    // // Add new taxonomy
    // $labels = array(
    //     'name'              => 'Categories',
    //     'singular_name'     => 'Category',
    //     'search_items'      => 'Search Categories',
    //     'all_items'         => 'All Categories',
    //     'parent_item'       => 'Parent Category',
    //     'parent_item_colon' => 'Parent Category:',
    //     'edit_item'         => 'Edit Category',
    //     'update_item'       => 'Update Category',
    //     'add_new_item'      => 'Add New Category',
    //     'new_item_name'     => 'New Category Name',
    //     'menu_name'         => 'Category',
    // );

    // $args = array(
    //     'hierarchical'      => true,
    //     'labels'            => $labels,
    //     'show_ui'           => true,
    //     'show_admin_column' => true,
    //     'query_var'         => true,
    //     'rewrite'           => array('slug' => 'faqs_cat'),
    // );

    // register_taxonomy('faqs_cat', array('faqs'), $args);
}

add_action('init', 'mbn_register_post_types');


function mbn_faqs_post_types(){

    /* Faqs  */
    $labels = array(
        'name'                  => __('Faqs'),
        'singular_name'         => __('Faq'),
        'menu_name'             => __('Faqs'),
        'name_admin_bar'        => __('Faq'),
        'add_new'               => __('Add New'),
        'add_new_item'          => __('Add New Faq'),
        'new_item'              => __('New Faq'),
        'edit_item'             => __('Edit Faq'),
        'view_item'             => __('View Faq'),
        'all_items'             => __('All Faqs'),
        'search_items'          => __('Search Faqs'),
        'parent_item_colon'     => __('Parent Faqs:'),
        'not_found'             => __('No Faqs found.'),
        'not_found_in_trash'    => __('No Faqs found in Trash.')
    );

    $args = array(
        'labels'                => $labels,
        'description'           => 'lorem ipsum',
        'public'                => false,
        'publicly_queryable'    => false,
        'show_in_menu'          => true,
        'show_ui'               => true,
        'show_in_admin_bar'     => false,
        'show_in_nav_menus'     => true,
        'capability_type'       => 'post',
        'show_in_rest'          => true,
        'has_archive'           => true,
        'hierarchical'          => false,
        'can_export'            => true,
        'menu_position'         => 20,
        'menu_icon'             => 'dashicons-editor-paragraph',
        'supports'              => array('title', 'editor', 'thumbnail'),
        'delete_with_user'      => true
    );

    register_post_type('faq', $args);


}

add_action('init', 'mbn_faqs_post_types');
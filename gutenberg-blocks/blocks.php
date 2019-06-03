<?php

function register_acf_block_types() {

    // register a page-header block.
    acf_register_block_type(array(
        'name'              => 'page-header',
        'title'             => __('Page header'),
        'render_template'   => 'gutenberg-blocks/page-header/page-header.php',
        'category'          => 'layout',
        'align' 			=> 'full',
        'icon'              => 'admin-comments',
        'supports' => array(
            'align'     => 'full',
        ),
        'enqueue_style' 	=> get_template_directory_uri() . '/gutenberg-blocks/page-header/page-header.css',
    ));


    acf_register_block_type(array(
        'name'              => 'articles-grid',
        'title'             => __('Articles-grid'),
        'render_template'   => 'gutenberg-blocks/articles-grid/articles-grid.php',
        'category'          => 'layout',
        'align' 			=> 'full',
        'icon'              => 'admin-comments',
        'supports' => array(
            'align'     => false,
        ),
        'enqueue_style' 	=> get_template_directory_uri() . '/gutenberg-blocks/articles-grid/articles-grid.css',
    ));


}

// Check if function exists and hook into setup.
if( function_exists('acf_register_block_type') ) {
    add_action('acf/init', 'register_acf_block_types');
}
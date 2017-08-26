<?php
add_action( 'init', 'create_Articles' ); // create_Page(name)s_post.php
function create_Articles() {
    $args = array(
        'label' => __('Articles'),  // Wordpess post name
        'singular_label' => __('Articles'),  // Page(name)_post.php
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => true,
        'supports' => array('title', 'editor', 'thumbnail')  ,
        'taxonomies'  => array( 'category' )
    );

    register_post_type('Articles',$args);  // Page(name)s_post.php
    flush_rewrite_rules();

}
register_taxonomy("Articles_group", array("Articles"), array("hierarchical" => true, "label" => "Categories", "singular_label" => "Articles group", "rewrite" => true));

?>
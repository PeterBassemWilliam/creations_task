<?php
add_action( 'init', 'create_Moviess' ); // create_Page(name)s_post.php
function create_Moviess() {
    $args = array(
        'label' => __('Movies'),  // Wordpess post name
        'singular_label' => __('Movies'),  // Page(name)_post.php
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => true,
        'supports' => array('title', 'editor', 'thumbnail')  ,
        'taxonomies'  => array( 'category' )
    );

    register_post_type('Moviess',$args);  // Page(name)s_post.php
    flush_rewrite_rules();

}
register_taxonomy("Movies_group", array("Moviess"), array("hierarchical" => true, "label" => "Categories", "singular_label" => "Movies group", "rewrite" => true));

?>
<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
 
    $parent_style = 'blocksy-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.
 
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}


/* Funksjon for å plassere widget for søkefeltet */
function wpb_widgets_init() {
    register_sidebar( array(
        'name'          => 'Custom Header Widget Area',
        'id'            => 'custom-header-widget',
        'before_widget' => '<div class="chw-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="chw-title">',
        'after_title'   => '</h2>',
    ) );
 
}

add_action( 'widgets_init', 'wpb_widgets_init' );

/* Kategorivisning i sidebar */
$kategoriertorget = array(
        'child_of'            => 135,
        'current_category'    => 1,
        'depth'               => 1,
        'echo'                => 1,
        'exclude'             => '1',
        'exclude_tree'        => '132',
        'feed'                => '',
        'feed_image'          => '',
        'feed_type'           => '',
        'hide_empty'          => 0,
        'hide_title_if_empty' => false,
        'hierarchical'        => true,
        'order'               => 'ASC',
        'orderby'             => 'name',
        'separator'           => '<br />',
        'show_count'          => 1,
        'show_option_all'     => '',
        'show_option_none'    => __( 'Ingen kategorier' ),
        'style'               => 'list',
        'taxonomy'            => 'category',
        'title_li'            => __( '' ),
        'use_desc_for_title'  => 1,
);

$omradertorget = array(
    'child_of'            => 132,
    'current_category'    => 1,
    'depth'               => 2,
    'echo'                => 1,
    'exclude'             => '1',
    'exclude_tree'        => '135',
    'feed'                => '',
    'feed_image'          => '',
    'feed_type'           => '',
    'hide_empty'          => 0,
    'hide_title_if_empty' => false,
    'hierarchical'        => true,
    'order'               => 'ASC',
    'orderby'             => 'name',
    'separator'           => '<br />',
    'show_count'          => 1,
    'show_option_all'     => '',
    'show_option_none'    => __( 'Velg område' ),
    'taxonomy'            => 'category',
    'title_li'            => __( '' ),
    'use_desc_for_title'  => 1,
);

/* Arrays for sidebaren på kategorisidene */
$kategori1 = array(
    'child_of'            => 135,
    'current_category'    => 1,
    'depth'               => 0,
    'echo'                => 1,
    'exclude'             => '1',
    'exclude_tree'        => '132, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18',
    'feed'                => '',
    'feed_image'          => '',
    'feed_type'           => '',
    'hide_empty'          => 0,
    'hide_title_if_empty' => false,
    'hierarchical'        => true,
    'order'               => 'ASC',
    'orderby'             => 'name',
    'separator'           => '<br />',
    'show_count'          => 1,
    'show_option_all'     => '',
    'show_option_none'    => __( 'No categories' ),
    'style'               => 'list',
    'taxonomy'            => 'category',
    'title_li'            => __( '' ),
    'use_desc_for_title'  => 1,
);

$kategori2 = array(
    'child_of'            => 135,
    'current_category'    => 1,
    'depth'               => 0,
    'echo'                => 1,
    'exclude'             => '1',
    'exclude_tree'        => '132, 8, 10, 11, 12, 13, 14, 15, 16, 17, 18',
    'feed'                => '',
    'feed_image'          => '',
    'feed_type'           => '',
    'hide_empty'          => 0,
    'hide_title_if_empty' => false,
    'hierarchical'        => true,
    'order'               => 'ASC',
    'orderby'             => 'name',
    'separator'           => '<br />',
    'show_count'          => 1,
    'show_option_all'     => '',
    'show_option_none'    => __( 'No categories' ),
    'style'               => 'list',
    'taxonomy'            => 'category',
    'title_li'            => __( '' ),
    'use_desc_for_title'  => 1,
);

$kategori3 = array(
    'child_of'            => 135,
    'current_category'    => 1,
    'depth'               => 0,
    'echo'                => 1,
    'exclude'             => '1',
    'exclude_tree'        => '132, 8, 9, 11, 12, 13, 14, 15, 16, 17, 18',
    'feed'                => '',
    'feed_image'          => '',
    'feed_type'           => '',
    'hide_empty'          => 0,
    'hide_title_if_empty' => false,
    'hierarchical'        => true,
    'order'               => 'ASC',
    'orderby'             => 'name',
    'separator'           => '<br />',
    'show_count'          => 1,
    'show_option_all'     => '',
    'show_option_none'    => __( 'No categories' ),
    'style'               => 'list',
    'taxonomy'            => 'category',
    'title_li'            => __( '' ),
    'use_desc_for_title'  => 1,
);

$kategori4 = array(
    'child_of'            => 135,
    'current_category'    => 1,
    'depth'               => 0,
    'echo'                => 1,
    'exclude'             => '1',
    'exclude_tree'        => '132, 8, 9, 10, 12, 13, 14, 15, 16, 17, 18',
    'feed'                => '',
    'feed_image'          => '',
    'feed_type'           => '',
    'hide_empty'          => 0,
    'hide_title_if_empty' => false,
    'hierarchical'        => true,
    'order'               => 'ASC',
    'orderby'             => 'name',
    'separator'           => '<br />',
    'show_count'          => 1,
    'show_option_all'     => '',
    'show_option_none'    => __( 'No categories' ),
    'style'               => 'list',
    'taxonomy'            => 'category',
    'title_li'            => __( '' ),
    'use_desc_for_title'  => 1,
);

$kategori5 = array(
    'child_of'            => 135,
    'current_category'    => 1,
    'depth'               => 0,
    'echo'                => 1,
    'exclude'             => '1',
    'exclude_tree'        => '132, 8, 9, 10, 11, 13, 14, 15, 16, 17, 18',
    'feed'                => '',
    'feed_image'          => '',
    'feed_type'           => '',
    'hide_empty'          => 0,
    'hide_title_if_empty' => false,
    'hierarchical'        => true,
    'order'               => 'ASC',
    'orderby'             => 'name',
    'separator'           => '<br />',
    'show_count'          => 1,
    'show_option_all'     => '',
    'show_option_none'    => __( 'No categories' ),
    'style'               => 'list',
    'taxonomy'            => 'category',
    'title_li'            => __( '' ),
    'use_desc_for_title'  => 1,
);

$kategori6 = array(
    'child_of'            => 135,
    'current_category'    => 1,
    'depth'               => 0,
    'echo'                => 1,
    'exclude'             => '1',
    'exclude_tree'        => '132, 8, 9, 10, 11, 12, 14, 15, 16, 17, 18',
    'feed'                => '',
    'feed_image'          => '',
    'feed_type'           => '',
    'hide_empty'          => 0,
    'hide_title_if_empty' => false,
    'hierarchical'        => true,
    'order'               => 'ASC',
    'orderby'             => 'name',
    'separator'           => '<br />',
    'show_count'          => 1,
    'show_option_all'     => '',
    'show_option_none'    => __( 'No categories' ),
    'style'               => 'list',
    'taxonomy'            => 'category',
    'title_li'            => __( '' ),
    'use_desc_for_title'  => 1,
);

$kategori7 = array(
    'child_of'            => 135,
    'current_category'    => 1,
    'depth'               => 0,
    'echo'                => 1,
    'exclude'             => '1',
    'exclude_tree'        => '132, 8, 9, 10, 11, 12, 13, 15, 16, 17, 18',
    'feed'                => '',
    'feed_image'          => '',
    'feed_type'           => '',
    'hide_empty'          => 0,
    'hide_title_if_empty' => false,
    'hierarchical'        => true,
    'order'               => 'ASC',
    'orderby'             => 'name',
    'separator'           => '<br />',
    'show_count'          => 1,
    'show_option_all'     => '',
    'show_option_none'    => __( 'No categories' ),
    'style'               => 'list',
    'taxonomy'            => 'category',
    'title_li'            => __( '' ),
    'use_desc_for_title'  => 1,
);

$kategori8 = array(
    'child_of'            => 135,
    'current_category'    => 1,
    'depth'               => 0,
    'echo'                => 1,
    'exclude'             => '1',
    'exclude_tree'        => '132, 8, 9, 10, 11, 12, 13, 14, 16, 17, 18',
    'feed'                => '',
    'feed_image'          => '',
    'feed_type'           => '',
    'hide_empty'          => 0,
    'hide_title_if_empty' => false,
    'hierarchical'        => true,
    'order'               => 'ASC',
    'orderby'             => 'name',
    'separator'           => '<br />',
    'show_count'          => 1,
    'show_option_all'     => '',
    'show_option_none'    => __( 'No categories' ),
    'style'               => 'list',
    'taxonomy'            => 'category',
    'title_li'            => __( '' ),
    'use_desc_for_title'  => 1,
);

$kategori9 = array(
    'child_of'            => 135,
    'current_category'    => 1,
    'depth'               => 0,
    'echo'                => 1,
    'exclude'             => '1',
    'exclude_tree'        => '132, 8, 9, 10, 11, 12, 13, 14, 15, 17, 18',
    'feed'                => '',
    'feed_image'          => '',
    'feed_type'           => '',
    'hide_empty'          => 0,
    'hide_title_if_empty' => false,
    'hierarchical'        => true,
    'order'               => 'ASC',
    'orderby'             => 'name',
    'separator'           => '<br />',
    'show_count'          => 1,
    'show_option_all'     => '',
    'show_option_none'    => __( 'No categories' ),
    'style'               => 'list',
    'taxonomy'            => 'category',
    'title_li'            => __( '' ),
    'use_desc_for_title'  => 1,
);

$kategori10 = array(
    'child_of'            => 135,
    'current_category'    => 1,
    'depth'               => 0,
    'echo'                => 1,
    'exclude'             => '1',
    'exclude_tree'        => '132, 8, 9, 10, 11, 12, 13, 14, 15, 16, 18',
    'feed'                => '',
    'feed_image'          => '',
    'feed_type'           => '',
    'hide_empty'          => 0,
    'hide_title_if_empty' => false,
    'hierarchical'        => true,
    'order'               => 'ASC',
    'orderby'             => 'name',
    'separator'           => '<br />',
    'show_count'          => 1,
    'show_option_all'     => '',
    'show_option_none'    => __( 'No categories' ),
    'style'               => 'list',
    'taxonomy'            => 'category',
    'title_li'            => __( '' ),
    'use_desc_for_title'  => 1,
);

$kategori11 = array(
    'child_of'            => 135,
    'current_category'    => 1,
    'depth'               => 0,
    'echo'                => 1,
    'exclude'             => '1',
    'exclude_tree'        => '132, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17',
    'feed'                => '',
    'feed_image'          => '',
    'feed_type'           => '',
    'hide_empty'          => 0,
    'hide_title_if_empty' => false,
    'hierarchical'        => true,
    'order'               => 'ASC',
    'orderby'             => 'name',
    'separator'           => '<br />',
    'show_count'          => 1,
    'show_option_all'     => '',
    'show_option_none'    => __( 'No categories' ),
    'style'               => 'list',
    'taxonomy'            => 'category',
    'title_li'            => __( '' ),
    'use_desc_for_title'  => 1,
);

/* Viser annonser i kategoriarkiv */
function themeprefix_show_cpt_archives( $query ) {
    if( is_category() || is_tag() && empty( $query->query_vars['suppress_filters'] ) ) {
    $query->set( 'post_type', array(
    'post', 'nav_menu_item', 'annonser'
    ));
    return $query;
    }
   }

add_filter( 'pre_get_posts', 'themeprefix_show_cpt_archives' );

/* Antall innlegg som vises på alle sider */
add_filter('pre_get_posts', 'limit_category_posts');
function limit_category_posts($query){
    if ($query->is_category) {
        $query->set('posts_per_page', 30);
    }
    return $query;
}

/* Sortere */
function custom_query_vars_filter($vars) {
    $vars[] = 'v_sortby';
    $vars[] = 'v_orderby';
    return $vars;
}
add_filter( 'query_vars', 'custom_query_vars_filter' );

function alter_query($query){
    $orderby = get_query_var( 'orderby' );
    $order = get_query_var( 'order' );
    $v_sortby = get_query_var ( 'v_sortby' );
    $v_orderby = get_query_var ( 'v_orderby' );

    if(!is_admin() && $query->is_main_query()) {
        if(isset($orderby)) {
            $query->set( 'orderby', $orderby );
        }
        if(isset($order)) {
            $query->set( 'order', $order );
        }
        if(isset($v_sortby)) {
            $query->set( 'v_sortby', $v_sortby );
        }
        if(isset($v_orderby)) {
            $query->set( 'v_orderby', $v_orderby );
        }
    }
};

add_action('pre_get_posts','alter_query');
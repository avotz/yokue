<?php

add_filter( 'rwmb_meta_boxes', 'yokue_register_meta_boxes' );

function yokue_register_meta_boxes( $meta_boxes )
{

    $prefix = 'rw_';

    // 1st meta box
    $meta_boxes[] = array(
        'id'       => 'additional_information',
        'title'    => 'Información Adicional',
        'pages'    => array('hotels' ),
        'context'  => 'normal',
        'priority' => 'high',

        'fields' => array(
            
             array(
                'name'  => 'Logo del Hotel',
                'desc'  => 'Format: Image File',
                'id'    => $prefix . 'hotel_logo',
                'type'  => 'image_advanced',
                'std'   => '',
                'class' => 'custom-class'
                
            ),
      
             array(
                'name'  => 'Canton',
                'id'    => $prefix . 'canton',
                'type'  => 'text',
                'std'   => '',
                'class' => 'canton'
                
                
            ),
             array(
                'name'  => 'Distrito',
                'id'    => $prefix . 'distrito',
                'type'  => 'text',
                'std'   => '',
                'class' => 'distrito'
               
               
                
            ),
             array(
                'name'  => 'Categoria (Estrellas)',
                'id'    => $prefix . 'stars',
                'type'  => 'number',
                'min'   => 1,
                'std'   => '',
                'class' => 'stars'
               
               
                
            ),
             
          
             

        )
    );
    


    return $meta_boxes;
}


//custom post type services
function my_custom_post_hotels() {
  $labels = array(
    'name'               => _x( 'Hotels', 'post type general name' ),
    'singular_name'      => _x( 'Hotel', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'Hotel' ),
    'add_new_item'       => __( 'Add New Hotel' ),
    'edit_item'          => __( 'Edit Hotel' ),
    'new_item'           => __( 'New Hotel' ),
    'all_items'          => __( 'All Hotels' ),
    'view_item'          => __( 'View Hotel' ),
    'search_items'       => __( 'Search Hotels' ),
    'not_found'          => __( 'No Hotels found' ),
    'not_found_in_trash' => __( 'No Hotels found in the Trash' ), 
    'parent_item_colon'  => '',
    'menu_name'          => 'Hotels'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Holds our Hotels and Hotel specific data',
    'public'        => true,
    'menu_position' => 5,
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
    'has_archive'   => true,
    'show_in_rest'  => true,
  );
  register_post_type( 'hotels', $args ); 
}
add_action( 'init', 'my_custom_post_hotels' );

function my_updated_messages( $messages ) {
  global $post, $post_ID;
  $messages['hotels'] = array(
    0 => '', 
    1 => sprintf( __('Hotel updated. <a href="%s">View Hotel</a>'), esc_url( get_permalink($post_ID) ) ),
    2 => __('Custom field updated.'),
    3 => __('Custom field deleted.'),
    4 => __('Hotel updated.'),
    5 => isset($_GET['revision']) ? sprintf( __('Hotel restored to revision from %s'), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
    6 => sprintf( __('Hotel published. <a href="%s">View Hotel</a>'), esc_url( get_permalink($post_ID) ) ),
    7 => __('Hotel saved.'),
    8 => sprintf( __('Hotel submitted. <a target="_blank" href="%s">Preview Hotel</a>'), esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),
    9 => sprintf( __('Hotel scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview Hotel</a>'), date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) ), esc_url( get_permalink($post_ID) ) ),
    10 => sprintf( __('Hotel draft updated. <a target="_blank" href="%s">Preview Hotel</a>'), esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),
  );
  return $messages;
}
add_filter( 'post_updated_messages', 'my_updated_messages' );

//custom post type services
function my_custom_post_tours() {
  $labels = array(
    'name'               => _x( 'Tours', 'post type general name' ),
    'singular_name'      => _x( 'Tour', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'Tour' ),
    'add_new_item'       => __( 'Add New Tour' ),
    'edit_item'          => __( 'Edit Tour' ),
    'new_item'           => __( 'New Tour' ),
    'all_items'          => __( 'All Tours' ),
    'view_item'          => __( 'View Tour' ),
    'search_items'       => __( 'Search Tours' ),
    'not_found'          => __( 'No Tours found' ),
    'not_found_in_trash' => __( 'No Tours found in the Trash' ), 
    'parent_item_colon'  => '',
    'menu_name'          => 'Tours'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Holds our Tours and Tour specific data',
    'public'        => true,
    'menu_position' => 5,
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
    'has_archive'   => true,
    'show_in_rest'  => true,
  );
  register_post_type( 'tours', $args ); 
}
add_action( 'init', 'my_custom_post_tours' );

function tours_messages( $messages ) {
  global $post, $post_ID;
  $messages['tours'] = array(
    0 => '', 
    1 => sprintf( __('Tours updated. <a href="%s">View Tours</a>'), esc_url( get_permalink($post_ID) ) ),
    2 => __('Custom field updated.'),
    3 => __('Custom field deleted.'),
    4 => __('Tours updated.'),
    5 => isset($_GET['revision']) ? sprintf( __('Tours restored to revision from %s'), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
    6 => sprintf( __('Tours published. <a href="%s">View Tours</a>'), esc_url( get_permalink($post_ID) ) ),
    7 => __('Tours saved.'),
    8 => sprintf( __('Tours submitted. <a target="_blank" href="%s">Preview Tours</a>'), esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),
    9 => sprintf( __('Tours scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview Tours</a>'), date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) ), esc_url( get_permalink($post_ID) ) ),
    10 => sprintf( __('Tours draft updated. <a target="_blank" href="%s">Preview Tours</a>'), esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),
  );
  return $messages;
}
add_filter( 'post_updated_messages', 'tours_messages' );




function my_taxonomies_locations() {
  $labels = array(
    'name'              => _x( 'Locations', 'taxonomy general name' ),
    'singular_name'     => _x( 'Location', 'taxonomy singular name' ),
    'search_items'      => __( 'Search Locations' ),
    'all_items'         => __( 'All Locations' ),
    'parent_item'       => __( 'Parent Location' ),
    'parent_item_colon' => __( 'Parent Location:' ),
    'edit_item'         => __( 'Edit Location' ), 
    'update_item'       => __( 'Update Location' ),
    'add_new_item'      => __( 'Add New Location' ),
    'new_item_name'     => __( 'New Location' ),
    'menu_name'         => __( 'Locations' ),
  );
  $args = array(
    'labels' => $labels,
    'hierarchical' => true,
  );
  register_taxonomy( 'location_hotels', 'hotels', $args );
  register_taxonomy( 'location_tours', 'tours', $args );
}
add_action( 'init', 'my_taxonomies_locations', 0 );

function my_taxonomies_types() {
  $labels = array(
    'name'              => _x( 'Types', 'taxonomy general name' ),
    'singular_name'     => _x( 'Type', 'taxonomy singular name' ),
    'search_items'      => __( 'Search Types' ),
    'all_items'         => __( 'All Types' ),
    'parent_item'       => __( 'Parent Type' ),
    'parent_item_colon' => __( 'Parent Type:' ),
    'edit_item'         => __( 'Edit Type' ), 
    'update_item'       => __( 'Update Type' ),
    'add_new_item'      => __( 'Add New Type' ),
    'new_item_name'     => __( 'New Type' ),
    'menu_name'         => __( 'Types' ),
  );
  $args = array(
    'labels' => $labels,
    'hierarchical' => true,
  );
  register_taxonomy( 'type', 'tours', $args );
}
add_action( 'init', 'my_taxonomies_types', 0 );




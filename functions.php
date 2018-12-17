<?php 

/*
=======================================
	CREATE POST TYPE AND TAXONOMIES
=======================================
*/

/* SOLUÇÕES E SERVIÇOS */

add_action('init', 'create_services');

function create_services(){
	$labels = array(
		'name' 				=> 'Soluções e Serviços',
		'singular_name' 	=> 'Soluções e Serviços',
		'menu_name' 		=> 'Soluções e Serviços',
		'name_admin_bar' 	=> 'Soluções e Serviços',
	);
	$args = array(
		'labels' 			=> $labels,
		'show_ui'			=> true,
		'show_in_menu'		=> true,
		'capability_type'	=> 'post',
		'taxonomies'  		=> array( 'categories_servicos' ),
		'hierarchical'		=> false,
		'menu_icon'			=> 'dashicons-awards',
		'supports'			=> array('title', 'editor', 'author', 'thumbnail'),
		'public' 			=> true,
      	'has_archive' 		=> true,
		'rewrite' 			=> true,
		'menu_position'		=> 5
	);

	register_post_type('services', $args);
}

function categories_services(){

	//add new taxonomy hierarchical

	$labels = array(
		'name' => 'Categories (Services)',
		'singular_name' => 'Category',
		'search_item' => 'Search Category',
		'all_items' => 'All Category',
		'parent_item' => 'Parent Category',
		'parent_item_colon' => 'Parent Category:',
		'edit_item' => 'Edit Category',
		'update_item' => 'Update Category',
		'add_new_item' => 'Add Category',
		'new_item_name' => 'New Category',
		'menu_name' => 'Categorias de serviço',
	);

	$args = array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
	);

	register_taxonomy('categories_services', array('services'), $args);

}

add_action('init', 'categories_services');




add_theme_support( 'post-thumbnails' ); 

function widgets_novos_widgets_init() {

	register_sidebar( array(
		'name' => 'Lateral',
		'id' => 'rodape_widgets',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	) );
}
add_action( 'widgets_init', 'widgets_novos_widgets_init' );

/*function excerpt($limit) {
	$excerpt = explode(' ', get_the_content(), $limit);
	if (count($excerpt)>=$limit) {
	array_pop($excerpt);
	$excerpt = implode(" ",$excerpt).'...';
	} else {
	$excerpt = implode(" ",$excerpt);
	}
	$excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
	return $excerpt.'<a style="float: right; width: 100%; text-decoration: underline; font-weight: bolder; text-align: right; color: #000;" class="read-more" href="'. get_permalink( get_the_ID() ) . '">[Leia mais]</a>';
}*/

// We'll be using post thumbnails for custom header images on posts and pages.
	// We want them to be the size of the header image that we just defined
	// Larger images will be auto-cropped to fit, smaller ones will be ignored. See header.php.
	set_post_thumbnail_size( HEADER_IMAGE_WIDTH, HEADER_IMAGE_HEIGHT, true );

	// Add Twenty Eleven's custom image sizes
	add_image_size( 'large-feature', HEADER_IMAGE_WIDTH, HEADER_IMAGE_HEIGHT, true ); // Used for large feature (header) images
	add_image_size( 'small-feature', 500, 300 ); // Used for featured posts if a large-feature doesn't exist
	add_image_size( 'small-capa', 280, 230, true ); 

	add_image_size( 'small', 70, 70, true ); 


function max_excerpt($limit) {
	
	$content = apply_filters('the_content', get_the_content());
	$content = str_replace(']]>', ']]&gt;', $content);
	$excerpt = explode(' ',$content, $limit);
	if (count($excerpt)>=$limit) {
	array_pop($excerpt);
	$excerpt = implode(" ",$excerpt).'...';
	} else {
	$excerpt = implode(" ",$excerpt);
	}	
	
	$excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
	return $excerpt;
}


function new_excerpt_more( $more ) {
	return '...';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );


function new_excerpt_length($length) {
    return 80;
}
add_filter('excerpt_length', 'new_excerpt_length');

/** Pagination */
function pagination_funtion() {
// Get total number of pages
global $wp_query;
$total = $wp_query->max_num_pages;
// Only paginate if we have more than one page                   
if ( $total > 1 )  {
    // Get the current page
    if ( !$current_page = get_query_var('paged') )
        $current_page = 1;
                           
        $big = 999999999;
        // Structure of "format" depends on whether we're using pretty permalinks
        $permalink_structure = get_option('permalink_structure');
        $format = empty( $permalink_structure ) ? '&page=%#%' : 'page/%#%/';
        echo paginate_links(array(
            'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
            'format' => $format,
            'current' => $current_page,
            'total' => $total,
            'mid_size' => 2,
            'type' => 'list'
        ));
    }
}
/** END Pagination */
function catch_that_image() {
  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  $first_img = $matches [1] [0];

  if(empty($first_img)){ //Defines a default image
    $first_img = "";
  }
  return $first_img;
}

?>
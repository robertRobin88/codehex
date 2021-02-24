<?php

// register webpack stylesheet and js with theme
if (!is_admin()) {
    // load scripts
    wp_enqueue_script('site_main_js', get_template_directory_uri() . '/dist/app.js', null, null, true);
    // load stylesheets
    wp_enqueue_style('site_fancy_css', get_template_directory_uri() . '/dist/css/jquery.fancybox.min.css');
    wp_enqueue_style('site_main_css', get_template_directory_uri() . '/dist/main.css');
}


// hide admin bar
add_filter('show_admin_bar', '__return_false');


//navigation
function register_my_menus()
{
    register_nav_menus(
        array(
            'top-menu' => __('Menu nagłówek'),
            'sidebar' => __('Menu boczne'),
            'footer-menu' => __('Menu stopka'),
        )
    );
}

add_action('init', 'register_my_menus');

//images crop
add_theme_support('post-thumbnails');
function add_custom_sizes()
{
    add_image_size('slider', 1920, 1080, array('center', 'center'));
    add_image_size('portfolio', 1400, 1400, array('center', 'center'));
    add_image_size('miniatura', 300, 300, array('center', 'center'));
    add_image_size('default-image', 1024, 768, array('center', 'center'));
	add_image_size('img-gallery', 270, 210, array('center', 'center'));
	add_image_size('custom-gallery', 270, 210, array('center', 'center'));
}

add_action('after_setup_theme', 'add_custom_sizes');

/* Dynamic crop images to different sizes */

class Filosofo_Custom_Image_Sizes
{

    public function __construct()
    {
        add_filter('image_downsize', array(&$this, 'filter_image_downsize'), 99, 3);

    }

    public function filter_image_downsize($ignore = false, $attachment_id = 0, $size_name = 'thumbnail')
    {
        global $_wp_additional_image_sizes;

        $attachment_id = (int)$attachment_id;
        @$size_name = trim($size_name);

        $meta = wp_get_attachment_metadata($attachment_id);

        /* the requested size does not yet exist for this attachment */
        if (
            empty($meta['sizes']) ||
            empty($meta['sizes'][$size_name])
        ) {
            // let's first see if this is a registered size
            if (isset($_wp_additional_image_sizes[$size_name])) {
                $height = (int)$_wp_additional_image_sizes[$size_name]['height'];
                $width = (int)$_wp_additional_image_sizes[$size_name]['width'];
                $crop = (bool)$_wp_additional_image_sizes[$size_name]['crop'];

                // if not, see if name is of form [width]x[height] and use that to crop
            } else if (preg_match('#^(\d+)x(\d+)$#', $size_name, $matches)) {
                $height = (int)$matches[2];
                $width = (int)$matches[1];
                $crop = true;
            }

            if (!empty($height) && !empty($width)) {
                $resized_path = $this->_generate_attachment($attachment_id, $width, $height, $crop);
                $fullsize_url = wp_get_attachment_url($attachment_id);

                $file_name = basename($resized_path);

                $new_url = str_replace(basename($fullsize_url), $file_name, $fullsize_url);

                if (!empty($resized_path)) {
                    $meta['sizes'][$size_name] = array(
                        'file' => $file_name,
                        'width' => $width,
                        'height' => $height,
                    );

                    wp_update_attachment_metadata($attachment_id, $meta);

                    return array(
                        $new_url,
                        $width,
                        $height,
                        true
                    );
                }
            }
        }

        return false;
    }

    private function _generate_attachment($attachment_id = 0, $width = 0, $height = 0, $crop = true)
    {
        $attachment_id = (int)$attachment_id;
        $width = (int)$width;
        $height = (int)$height;
        $crop = (bool)$crop;

        $original_path = get_attached_file($attachment_id);

        // fix a WP bug up to 2.9.2
        if (!function_exists('wp_load_image')) {
            require_once ABSPATH . 'wp-admin/includes/image.php';
        }

        $resized_path = @image_resize($original_path, $width, $height, $crop);

        if (
            !is_wp_error($resized_path) &&
            !is_array($resized_path)
        ) {
            return $resized_path;

            // perhaps this image already exists.  If so, return it.
        } else {
            $orig_info = pathinfo($original_path);
            $suffix = "{$width}x{$height}";
            $dir = $orig_info['dirname'];
            $ext = $orig_info['extension'];
            $name = basename($original_path, ".{$ext}");
            $destfilename = "{$dir}/{$name}-{$suffix}.{$ext}";
            if (file_exists($destfilename)) {
                return $destfilename;
            }
        }

        return '';
    }
}

function initialize_custom_image_sizes()
{
    new Filosofo_Custom_Image_Sizes;
}

add_action('init', 'initialize_custom_image_sizes');


/*
    Function to custom excerpt
    usage: echo custom_excerpt(count_character, post_id);
*/
function custom_excerpt($count, $post_id)
{
    $excerpt = get_post($post_id);
    $excerpt = $excerpt->post_content;
    $excerpt = strip_tags($excerpt);
    $excerpt = substr($excerpt, 0, $count);
    return $excerpt;
}

// Register Custom Post Type Galeria
function create_galeria_cpt() {

	$labels = array(
		'name' => _x( 'Galerie', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'Galeria', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'Galerie', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'Galeria', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'Archiwum galerii', 'textdomain' ),
		'attributes' => __( 'Galeria atrybuty', 'textdomain' ),
		'parent_item_colon' => __( 'Nadrzędna galeria:', 'textdomain' ),
		'all_items' => __( 'Wszystkie galerie', 'textdomain' ),
		'add_new_item' => __( 'Dodaj nową galerię', 'textdomain' ),
		'add_new' => __( 'Dodaj nową', 'textdomain' ),
		'new_item' => __( 'Nowa galeria', 'textdomain' ),
		'edit_item' => __( 'Edytuj galerię', 'textdomain' ),
		'update_item' => __( 'Zaktualizuj galerię', 'textdomain' ),
		'view_item' => __( 'Zobacz galerie', 'textdomain' ),
		'view_items' => __( 'Zobacz galerie', 'textdomain' ),
		'search_items' => __( 'Szukaj galerii', 'textdomain' ),
		'not_found' => __( 'Nie znaleziono', 'textdomain' ),
		'not_found_in_trash' => __( 'Nie znaleziono w koszu', 'textdomain' ),
		'featured_image' => __( 'Wyróżniony obrazek ', 'textdomain' ),
		'set_featured_image' => __( 'Ustaw wyróżniony obrazek', 'textdomain' ),
		'remove_featured_image' => __( 'Usuń wyróżniony obrazek', 'textdomain' ),
		'use_featured_image' => __( 'Użyj jako wyróżniony obrazek', 'textdomain' ),
		'insert_into_item' => __( 'Insert into Galeria', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Galeria', 'textdomain' ),
		'items_list' => __( 'Galerie list', 'textdomain' ),
		'items_list_navigation' => __( 'Galerie list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter Galerie list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'Galeria', 'textdomain' ),
		'description' => __( '', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-format-gallery',
		'supports' => array('title', 'editor', 'thumbnail', 'page-attributes', 'post-formats'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => true,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'galerie', $args );

}
add_action( 'init', 'create_galeria_cpt', 0 );

function editor_full_width_gutenberg()
{
    echo '<style>
    body.gutenberg-editor-page .editor-post-title__block, body.gutenberg-editor-page .editor-default-block-appender, body.gutenberg-editor-page .editor-block-list__block {
		max-width: none !important;
	}
    .block-editor__container .wp-block {
        max-width: none !important;
    }
    .ui-datepicker{
        z-index: 9999 !important;
    }
  </style>';
}

// pagination
function wpbeginner_numeric_posts_nav()
{

    if (is_singular())
        return;

    global $wp_query;

    /** Stop execution if there's only 1 page */
    if ($wp_query->max_num_pages <= 1)
        return;

    $paged = get_query_var('paged') ? absint(get_query_var('paged')) : 1;
    $max = intval($wp_query->max_num_pages);

    /** Add current page to the array */
    if ($paged >= 1)
        $links[] = $paged;

    /** Add the pages around the current page to the array */
    if ($paged >= 3) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }

    if (($paged + 2) <= $max) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }

    echo '<div class="navigation"><ul>' . "\n";

    /** Previous Post Link */
    if (get_previous_posts_link())
        printf('<li>%s</li>' . "\n", get_previous_posts_link());

    /** Link to first page, plus ellipses if necessary */
    if (!in_array(1, $links)) {
        $class = 1 == $paged ? ' class="active"' : '';

        printf('<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link(1)), '1');

        if (!in_array(2, $links))
            echo '<li>…</li>';
    }

    /** Link to current page, plus 2 pages in either direction if necessary */
    sort($links);
    foreach ((array)$links as $link) {
        $class = $paged == $link ? ' class="active"' : '';
        printf('<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link($link)), $link);
    }

    /** Link to last page, plus ellipses if necessary */
    if (!in_array($max, $links)) {
        if (!in_array($max - 1, $links))
            echo '<li>…</li>' . "\n";

        $class = $paged == $max ? ' class="active"' : '';
        printf('<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link($max)), $max);
    }

    /** Next Post Link */
    if (get_next_posts_link())
        printf('<li>%s</li>' . "\n", get_next_posts_link());

    echo '</ul></div>' . "\n";

}

?>
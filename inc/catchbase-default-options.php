<?php
/**
 * Implement Default Theme/Customizer Options
 *
 * @package Catch Themes
 * @subpackage Catch Base
 * @since Catch Base 1.0
 */

if ( ! defined( 'CATCHBASE_THEME_VERSION' ) ) {
	header( 'Status: 403 Forbidden' );
	header( 'HTTP/1.1 403 Forbidden' );
	exit();
}


/**
 * Returns the default options for catchbase.
 *
 * @since Catch Base 1.0
 */
function catchbase_get_default_theme_options() {

	$default_theme_options = array(
		//Site Title an Tagline
		'logo'												=> get_template_directory_uri() . '/images/headers/logo.png',
		'logo_alt_text' 									=> '',
		'logo_disable'										=> 1,
		'move_title_tagline'								=> 0,

		//Layout
		'theme_layout' 										=> 'right-sidebar',
		'content_layout'									=> 'excerpt-featured-image',
		'single_post_image_layout'							=> 'disabled',

		//Header Image
		'enable_featured_header_image'						=> 'disabled',
		'featured_image_size'								=> 'full',
		'featured_header_image_url'							=> '',
		'featured_header_image_alt'							=> '',
		'featured_header_image_base'						=> 0,

		//Breadcrumb Options
		'breadcumb_option'									=> 0,
		'breadcumb_onhomepage'								=> 0,
		'breadcumb_seperator'								=> '&raquo;',

		//Custom CSS
		'custom_css'										=> '',

		//Excerpt Options
		'excerpt_length'									=> '40',
		'excerpt_more_text'									=> __( 'Read More ...', 'itslcatchbase' ),

		//Homepage / Frontpage Settings
		'front_page_category'								=> array(),

		//Pagination Options
		'pagination_type'									=> 'default',

		//Promotion Headline Options
		'promotion_headline_option'							=> 'disabled',
		'promotion_headline'								=> __( 'La plateforme itslearning est axée sur la pédagogie', 'itslcatchbase' ),
		'promotion_subheadline'								=> __( 'Pour changer le lien promotionnel -> Personnaliser -> Options du Thème -> Options du lien promotionnel', 'itslcatchbase' ),
		'promotion_headline_button'							=> __( 'Découvrir', 'itslcatchbase' ),
		'promotion_headline_url'							=> esc_url( 'http://www.itslearning.fr' ),
		'promotion_headline_target'							=> 1,

		//Search Options
		'search_text'										=> __( 'Search...', 'itslcatchbase' ),

		//Basic Color Options
		'color_scheme' 										=> 'light',

		//Featured Content Options
		'featured_content_option'							=> 'disabled',
		'featured_content_layout'							=> 'layout-four',
		//move_posts_home replaced with featured_content_position from version 1.1
		'move_posts_home'									=> 0,
		'featured_content_position'							=> 0,
		'featured_content_headline'							=> '',
		'featured_content_subheadline'						=> '',
		'featured_content_type'								=> 'demo-featured-content',
		'featured_content_number'							=> '4',

		//Featured Slider Options
		'featured_slider_option'							=> 'homepage',
		'featured_slider_image_loader'						=> 'true',
		'featured_slide_transition_effect'					=> 'fadeout',
		'featured_slide_transition_delay'					=> '4',
		'featured_slide_transition_length'					=> '1',
		'featured_slider_type'								=> 'demo-featured-slider',
		'featured_slide_number'								=> '4',

		//disable logo
		'logo_disable'										=> 'true',

		//Reset all settings
		'reset_all_settings'								=> 0,
	);

	return apply_filters( 'catchbase_default_theme_options', $default_theme_options );
}


/**
 * Returns an array of featured slider image loader options
 *
 * @since Catch Base 2.3.1
 */
function catchbase_featured_slider_image_loader() {
	$color_scheme_options = array(
		'true' => array(
			'value' 				=> 'true',
			'label' 				=> __( 'True', 'itslcatchbase' ),
		),
		'wait' => array(
			'value' 				=> 'wait',
			'label' 				=> __( 'Wait', 'itslcatchbase' ),
		),
		'false' => array(
			'value' 				=> 'false',
			'label' 				=> __( 'False', 'itslcatchbase' ),
		),
	);

	return apply_filters( 'catchbase_color_schemes', $color_scheme_options );
}

/**
 * Returns an array of color schemes registered for catchbase.
 *
 * @since Catch Base 1.0
 */
function catchbase_color_schemes() {
	$color_scheme_options = array(
		'light' => array(
			'value' 				=> 'light',
			'label' 				=> __( 'Light', 'itslcatchbase' ),
		),
		'dark' => array(
			'value' 				=> 'dark',
			'label' 				=> __( 'Dark', 'itslcatchbase' ),
		),
	);

	return apply_filters( 'catchbase_color_schemes', $color_scheme_options );
}


/**
 * Returns an array of layout options registered for catchbase.
 *
 * @since Catch Base 1.0
 */
function catchbase_layouts() {
	$layout_options = array(
		'left-sidebar' 	=> array(
			'value' => 'left-sidebar',
			'label' => __( 'Primary Sidebar, Content', 'itslcatchbase' ),
		),
		'right-sidebar' => array(
			'value' => 'right-sidebar',
			'label' => __( 'Content, Primary Sidebar', 'itslcatchbase' ),
		),
		'three-columns'	=> array(
			'value' => 'three-columns',
			'label' => __( 'Three Columns ( Secondary Sidebar, Content, Primary Sidebar )', 'itslcatchbase' ),
		),
		'no-sidebar'	=> array(
			'value' => 'no-sidebar',
			'label' => __( 'No Sidebar ( Content Width )', 'itslcatchbase' ),
		),
	);
	return apply_filters( 'catchbase_layouts', $layout_options );
}


/**
 * Returns an array of content layout options registered for catchbase.
 *
 * @since Catch Base 1.0
 */
function catchbase_get_archive_content_layout() {
	$layout_options = array(
		'excerpt-featured-image' => array(
			'value' => 'excerpt-featured-image',
			'label' => __( 'Show Excerpt', 'itslcatchbase' ),
		),
		'full-content' => array(
			'value' => 'full-content',
			'label' => __( 'Show Full Content (No Featured Image)', 'itslcatchbase' ),
		),
	);

	return apply_filters( 'catchbase_get_archive_content_layout', $layout_options );
}


/**
 * Returns an array of feature header enable options
 *
 * @since Catch Base 1.0
 */
function catchbase_enable_featured_header_image_options() {
	$enable_featured_header_image_options = array(
		'homepage' 		=> array(
			'value'	=> 'homepage',
			'label' => __( 'Homepage / Frontpage', 'itslcatchbase' ),
		),
		'exclude-home' 		=> array(
			'value'	=> 'exclude-home',
			'label' => __( 'Excluding Homepage', 'itslcatchbase' ),
		),
		'exclude-home-page-post' 	=> array(
			'value' => 'exclude-home-page-post',
			'label' => __( 'Excluding Homepage, Page/Post Featured Image', 'itslcatchbase' ),
		),
		'entire-site' 	=> array(
			'value' => 'entire-site',
			'label' => __( 'Entire Site', 'itslcatchbase' ),
		),
		'entire-site-page-post' 	=> array(
			'value' => 'entire-site-page-post',
			'label' => __( 'Entire Site, Page/Post Featured Image', 'itslcatchbase' ),
		),
		'pages-posts' 	=> array(
			'value' => 'pages-posts',
			'label' => __( 'Pages and Posts', 'itslcatchbase' ),
		),
		'disabled'		=> array(
			'value' => 'disabled',
			'label' => __( 'Disabled', 'itslcatchbase' ),
		),
	);

	return apply_filters( 'catchbase_enable_featured_header_image_options', $enable_featured_header_image_options );
}


/**
 * Returns an array of feature image size
 *
 * @since Catch Base 1.0
 */
function catchbase_featured_image_size_options() {
	$featured_image_size_options = array(
		'full' 		=> array(
			'value'	=> 'full',
			'label' => __( 'Full Image', 'itslcatchbase' ),
		),
		'large' 	=> array(
			'value' => 'large',
			'label' => __( 'Large Image', 'itslcatchbase' ),
		),
		'slider'		=> array(
			'value' => 'slider',
			'label' => __( 'Slider Image', 'itslcatchbase' ),
		),
	);

	return apply_filters( 'catchbase_featured_image_size_options', $featured_image_size_options );
}


/**
 * Returns an array of content and slider layout options registered for catchbase.
 *
 * @since Catch Base 1.0
 */
function catchbase_featured_slider_content_options() {
	$featured_slider_content_options = array(
		'homepage' 		=> array(
			'value'	=> 'homepage',
			'label' => __( 'Homepage / Frontpage', 'itslcatchbase' ),
		),
		'entire-site' 	=> array(
			'value' => 'entire-site',
			'label' => __( 'Entire Site', 'itslcatchbase' ),
		),
		'disabled'		=> array(
			'value' => 'disabled',
			'label' => __( 'Disabled', 'itslcatchbase' ),
		),
	);

	return apply_filters( 'catchbase_featured_slider_content_options', $featured_slider_content_options );
}


/**
 * Returns an array of feature content types registered for catchbase.
 *
 * @since Catch Base 1.0
 */
function catchbase_featured_content_types() {
	$featured_content_types = array(
		'demo-featured-content' => array(
			'value' => 'demo-featured-content',
			'label' => __( 'Demo Featured Content', 'itslcatchbase' ),
		),
		'featured-page-content' => array(
			'value' => 'featured-page-content',
			'label' => __( 'Featured Page Content', 'itslcatchbase' ),
		)
	);

	return apply_filters( 'catchbase_featured_content_types', $featured_content_types );
}


/**
 * Returns an array of featured content options registered for catchbase.
 *
 * @since Catch Base 1.0
 */
function catchbase_featured_content_layout_options() {
	$featured_content_layout_option = array(
		'layout-three' 		=> array(
			'value'	=> 'layout-three',
			'label' => __( '3 columns', 'itslcatchbase' ),
		),
		'layout-four' 	=> array(
			'value' => 'layout-four',
			'label' => __( '4 columns', 'itslcatchbase' ),
		),
	);

	return apply_filters( 'catchbase_featured_content_layout_options', $featured_content_layout_option );
}


/**
 * Returns an array of feature slider types registered for catchbase.
 *
 * @since Catch Base 1.0
 */
function catchbase_featured_slider_types() {
	$featured_slider_types = array(
		'demo-featured-slider' => array(
			'value' => 'demo-featured-slider',
			'label' => __( 'Demo Featured Slider', 'itslcatchbase' ),
		),
		'featured-page-slider' => array(
			'value' => 'featured-page-slider',
			'label' => __( 'Featured Page Slider', 'itslcatchbase' ),
		),
	);

	return apply_filters( 'catchbase_featured_slider_types', $featured_slider_types );
}


/**
 * Returns an array of feature slider transition effects
 *
 * @since Catch Base 1.0
 */
function catchbase_featured_slide_transition_effects() {
	$featured_slide_transition_effects = array(
		'fade' 		=> array(
			'value'	=> 'fade',
			'label' => __( 'Fade', 'itslcatchbase' ),
		),
		'fadeout' 	=> array(
			'value'	=> 'fadeout',
			'label' => __( 'Fade Out', 'itslcatchbase' ),
		),
		'none' 		=> array(
			'value' => 'none',
			'label' => __( 'None', 'itslcatchbase' ),
		),
		'scrollHorz'=> array(
			'value' => 'scrollHorz',
			'label' => __( 'Scroll Horizontal', 'itslcatchbase' ),
		),
		'scrollVert'=> array(
			'value' => 'scrollVert',
			'label' => __( 'Scroll Vertical', 'itslcatchbase' ),
		),
		'flipHorz'	=> array(
			'value' => 'flipHorz',
			'label' => __( 'Flip Horizontal', 'itslcatchbase' ),
		),
		'flipVert'	=> array(
			'value' => 'flipVert',
			'label' => __( 'Flip Vertical', 'itslcatchbase' ),
		),
		'tileSlide'	=> array(
			'value' => 'tileSlide',
			'label' => __( 'Tile Slide', 'itslcatchbase' ),
		),
		'tileBlind'	=> array(
			'value' => 'tileBlind',
			'label' => __( 'Tile Blind', 'itslcatchbase' ),
		),
		'shuffle'	=> array(
			'value' => 'shuffle',
			'label' => __( 'Suffle', 'itslcatchbase' ),
		)
	);

	return apply_filters( 'catchbase_featured_slide_transition_effects', $featured_slide_transition_effects );
}


/**
 * Returns an array of color schemes registered for catchbase.
 *
 * @since Catch Base 1.0
 */
function catchbase_get_pagination_types() {
	$pagination_types = array(
		'default' => array(
			'value' => 'default',
			'label' => __( 'Default(Older Posts/Newer Posts)', 'itslcatchbase' ),
		),
		'numeric' => array(
			'value' => 'numeric',
			'label' => __( 'Numeric', 'itslcatchbase' ),
		),
		'infinite-scroll-click' => array(
			'value' => 'infinite-scroll-click',
			'label' => __( 'Infinite Scroll (Click)', 'itslcatchbase' ),
		),
		'infinite-scroll-scroll' => array(
			'value' => 'infinite-scroll-scroll',
			'label' => __( 'Infinite Scroll (Scroll)', 'itslcatchbase' ),
		),
	);

	return apply_filters( 'catchbase_get_pagination_types', $pagination_types );
}


/**
 * Returns an array of content featured image size.
 *
 * @since Catch Base 1.0
 */
function catchbase_single_post_image_layout_options() {
	$single_post_image_layout_options = array(
		'large' => array(
			'value' => 'large',
			'label' => __( 'Large', 'itslcatchbase' ),
		),
		'medium' => array(
			'value' => 'medium',
			'label' => __( 'Medium', 'itslcatchbase' ),
		),
		'full-size' => array(
			'value' => 'full-size',
			'label' => __( 'Full size', 'itslcatchbase' ),
		),
		'slider-image-size' => array(
			'value' => 'slider-image-size',
			'label' => __( 'Slider Image Size', 'itslcatchbase' ),
		),
		'disabled' => array(
			'value' => 'disabled',
			'label' => __( 'Disabled', 'itslcatchbase' ),
		),
	);
	return apply_filters( 'catchbase_single_post_image_layout_options', $single_post_image_layout_options );
}


/**
 * Returns list of social icons currently supported
 *
 * @since Catch Base 1.0
*/
function catchbase_get_social_icons_list() {
	$catchbase_social_icons_list =	array(
											__( 'Facebook', 'itslcatchbase' ),
											__( 'Twitter', 'itslcatchbase' ),
											__( 'Googleplus', 'itslcatchbase' ),
											__( 'Email', 'itslcatchbase' ),
											__( 'Feed', 'itslcatchbase' ),
											__( 'WordPress', 'itslcatchbase' ),
											//__( 'GitHub', 'itslcatchbase' ),
											//__( 'LinkedIn', 'itslcatchbase' ),
											__( 'Pinterest', 'itslcatchbase' ),
											//__( 'Flickr', 'itslcatchbase' ),
											__( 'Vimeo', 'itslcatchbase' ),
											__( 'YouTube', 'itslcatchbase' ),
											__( 'Tumblr', 'itslcatchbase' ),
											__( 'Instagram', 'itslcatchbase' ),
											//__( 'PollDaddy', 'itslcatchbase' ),
											//__( 'CodePen', 'itslcatchbase' ),
											//__( 'Path', 'itslcatchbase' ),
											//__( 'Dribbble', 'itslcatchbase' ),
											//__( 'Skype', 'itslcatchbase' ),
											//__( 'Digg', 'itslcatchbase' ),
											//__( 'Reddit', 'itslcatchbase' ),
											//__( 'StumbleUpon', 'itslcatchbase' ),
											//__( 'Pocket', 'itslcatchbase' ),
											//__( 'DropBox', 'itslcatchbase' ),
											//__( 'Foursquare', 'itslcatchbase' ),
											//__( 'Spotify', 'itslcatchbase' ),
											//__( 'Twitch', 'itslcatchbase' ),
										);

	return apply_filters( 'catchbase_social_icons_list', $catchbase_social_icons_list );
}


/**
 * Returns an array of metabox layout options registered for catchbase.
 *
 * @since Catch Base 1.0
 */
function catchbase_metabox_layouts() {
	$layout_options = array(
		'default' 	=> array(
			'id' 	=> 'catchbase-layout-option',
			'value' => 'default',
			'label' => __( 'Default', 'itslcatchbase' ),
		),
		'left-sidebar' 	=> array(
			'id' 	=> 'catchbase-layout-option',
			'value' => 'left-sidebar',
			'label' => __( 'Primary Sidebar, Content', 'itslcatchbase' ),
		),
		'right-sidebar' => array(
			'id' 	=> 'catchbase-layout-option',
			'value' => 'right-sidebar',
			'label' => __( 'Content, Primary Sidebar', 'itslcatchbase' ),
		),
		'three-columns'	=> array(
			'id' 	=> 'catchbase-layout-option',
			'value' => 'three-columns',
			'label' => __( 'Three Columns ( Secondary Sidebar, Content, Primary Sidebar )', 'itslcatchbase' ),
		),
		'no-sidebar'	=> array(
			'id' 	=> 'catchbase-layout-option',
			'value' => 'no-sidebar',
			'label' => __( 'No Sidebar ( Content Width )', 'itslcatchbase' ),
		),
	);
	return apply_filters( 'catchbase_layouts', $layout_options );
}

/**
 * Returns an array of metabox header featured image options registered for catchbase.
 *
 * @since Catch Base 1.0
 */
function catchbase_metabox_header_featured_image_options() {
	$header_featured_image_options = array(
		'default' => array(
			'id'		=> 'catchbase-header-image',
			'value' 	=> 'default',
			'label' 	=> __( 'Default', 'itslcatchbase' ),
		),
		'enable' => array(
			'id'		=> 'catchbase-header-image',
			'value' 	=> 'enable',
			'label' 	=> __( 'Enable', 'itslcatchbase' ),
		),
		'disable' => array(
			'id'		=> 'catchbase-header-image',
			'value' 	=> 'disable',
			'label' 	=> __( 'Disable', 'itslcatchbase' )
		)
	);
	return apply_filters( 'header_featured_image_options', $header_featured_image_options );
}


/**
 * Returns an array of metabox featured image options registered for catchbase.
 *
 * @since Catch Base 1.0
 */
function catchbase_metabox_featured_image_options() {
	$featured_image_options = array(
		'default' => array(
			'id'		=> 'catchbase-featured-image',
			'value' 	=> 'default',
			'label' 	=> __( 'Default', 'itslcatchbase' ),
		),
		'featured' => array(
			'id'		=> 'catchbase-featured-image',
			'value' 	=> 'featured',
			'label' 	=> __( 'Featured Image', 'itslcatchbase' )
		),
		'full' => array(
			'id' => 'catchbase-featured-image',
			'value' => 'full',
			'label' => __( 'Full Image', 'itslcatchbase' )
		),
		'slider' => array(
			'id' => 'catchbase-featured-image',
			'value' => 'slider',
			'label' => __( 'Slider Image', 'itslcatchbase' )
		),
		'disable' => array(
			'id' => 'catchbase-featured-image',
			'value' => 'disable',
			'label' => __( 'Disable Image', 'itslcatchbase' )
		)
	);
	return apply_filters( 'featured_image_options', $featured_image_options );
}


/**
 * Returns catchbase_contents registered for catchbase.
 *
 * @since Catch Base 1.0
 */
function catchbase_get_content() {
	$theme_data = wp_get_theme();


// this is the content at the top left
	$catchbase_content['top_left'] 	= '<a href="http://www.l-educdenormandie.fr" title="Portail ENT"><img src="'. get_template_directory_uri() . '/images/partenaires/educ.png"></a>';
// this is the content at the bottom right
	// <img src="' . get_template_directory_uri() . '/images/login.jpg" class="wp-post-image" alt="se connecter" title="se connecter">
	$catchbase_content['top_right']	= '<a class="liste-etab" href="http://www.l-educdenormandie.fr/les-etablissements/rechercher-un-etablissement/" title="Les établissements" target="_self">Etablissements</a>&nbsp;&nbsp;<a class="se-connecter" href="https://leducdenormandie.itslearning.com/elogin/autologin.aspx" title="Se connecter" target="_self">Se connecter</a>';
// this is the content at the bottom left
	$catchbase_content['left'] 	= sprintf( _x( 'Copyright &copy; %1$s . All Rights Reserved.', '1: Year', 'itslcatchbase' ), date( 'Y' ), '' );
// this is the content at the bottom right
	//$catchbase_content['right']	= esc_attr( $theme_data->get( 'Name') ) . '&nbsp;' . __( 'by', 'itslcatchbase' ). '&nbsp;<a target="_blank" href="'. esc_url( $theme_data->get( 'AuthorURI' ) ) .'">'. esc_attr( $theme_data->get( 'Author' ) ) .'</a>';
	$catchbase_content['right']	= '&nbsp;<a class="genericon_parent genericon genericon-cog" target="_self" href="'.esc_url( home_url( '/' )  ) .'wp-admin'.'">Administration du portail</a>';
// this is the reférence to the partners of the project
	//<div><a href="http://www.dirm-memn.developpement-durable.gouv.fr/spip.php?page=sommaire"><img src="'. get_template_directory_uri() . '/images/partenaires/dirm.gif" alt="Académie"></a></div>
	//<div><a href="http://draaf.basse-normandie.agriculture.gouv.fr"><img src="'. get_template_directory_uri() . '/images/partenaires/draaf.gif" alt="Académie"></a></div>
	//<div><a href="http://www.region-basse-normandie.fr"><img src="'. get_template_directory_uri() . '/images/partenaires/region_bn.gif" alt="Région Basse-Normandie"></a></div>
	//<div><a href="http://www.calvados.fr/cms"><img src="'. get_template_directory_uri() . '/images/partenaires/calvados.gif" alt="Calvados"></a></div>
	//<div><a href="http://www.manche.fr"><img src="'. get_template_directory_uri() . '/images/partenaires/manche.gif" alt="Manche"></a></div>
	//<div><a href="http://www.orne.fr"><img src="'. get_template_directory_uri() . '/images/partenaires/orne.gif" alt="Orne"></a></div>
	//<div><a href="https://www.ac-caen.fr"><img src="'. get_template_directory_uri() . '/images/partenaires/ac-caen.gif" alt="DRAAF"></a></div>
	//<div><a href="http://www.itslearning.fr/"><img src="'. get_template_directory_uri() . '/images/partenaires/itslearning.png" alt="itslearning"></a></div>
	
	$catchbase_content['partners']	= '<div id="logos_partners">
</div>
<!-- #logos_partenaires -->';


	return apply_filters( 'catchbase_get_content', $catchbase_content );
}

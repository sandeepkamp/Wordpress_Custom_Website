<?php


if ( ! function_exists( 'dominionprep_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which runs
	 * before the init hook. The init hook is too late for some features, such as indicating
	 * support post thumbnails.
	 */
	function dominionprep_setup() {

		/**
		 * Make theme available for translation.
		 * Translations can be placed in the /languages/ directory.
		 */
		load_theme_textdomain( 'dominionprep', get_template_directory() . '/languages' );

		/**
		 * Add default posts and comments RSS feed links to &lt;head>.
		 */
		add_theme_support( 'automatic-feed-links' );

		/**
		 * Enable support for post thumbnails and featured images.
		 */
		add_theme_support( 'post-thumbnails' );

		/**
		 * Add support for two custom navigation menus.
		 */ // register_nav_menus( array(
		// 	'primary'   => __( 'Primary Menu', 'dominionprep' ),
		// 	'secondary' => __('Secondary Menu', 'dominionprep' )
		// ) );

		/**
		 * Enable support for the following post formats:
		 * aside, gallery, quote, image, and video
		 */
		add_theme_support( 'post-formats', array( 'aside', 'gallery', 'quote', 'image', 'video' ) );
	}
endif;
add_action( 'after_setup_theme', 'dominionprep_setup' );


/* Dominion Prep Theme CSS Enqueue  */

// function add_css()
// {
// 	wp_deregister_style('dominion-bootstrap' );
// 	wp_register_style('dominion-bootstrap', get_template_directory_uri() . '/assets/sass/bootstrap.css', false,'1.1','all');
// 	wp_enqueue_style('dominion-bootstrap');
// 	wp_deregister_style('dominion-common' );
// 	wp_register_style('dominion-common', get_template_directory_uri() . '/assets/sass/common.css', false,'1.1','all');
// 	wp_enqueue_style('dominion-common');
// 	wp_deregister_style('dominion-owl');
// 	wp_register_style('dominion-owl', get_template_directory_uri() . '/assets/sass/owl.carousel.css', false,'1.1','all');
// 	wp_enqueue_style('dominion-owl');
// 	wp_deregister_style('dominion-revolution' );
// 	wp_register_style('dominion-revolution', get_template_directory_uri() . '/assets/sass/revolution.style.css', false,'1.1','all');
// 	wp_enqueue_style('dominion-revolution');
// 	wp_deregister_style( 'dominion-sliderstyle' );
// 	wp_register_style('dominion-sliderstyle', get_template_directory_uri() . '/assets/sass/sliderstyle.css', false,'1.1','all');
//     wp_enqueue_style('dominion-sliderstyle');
// 	wp_deregister_style('dominion-stylemap' );
// 	wp_register_style('dominion-stylemap', get_template_directory_uri() . '/assets/sass/style.css.map', false,'1.1','all');
// 	wp_enqueue_style('dominion-stylemap');
// 	wp_deregister_style('dominion-style');
// 	wp_register_style('dominion-style', get_template_directory_uri() . '/assets/sass/style.css', false,'1.1','all');
//     wp_enqueue_style('dominion-style');
// 	wp_deregister_style('dominion-style-dist');
// 	wp_register_style('dominion-style-dist', get_template_directory_uri() . '/assets/sass/style-dist.css', false,'1.1','all');
//     wp_enqueue_style('dominion-style-dist');
// 	wp_deregister_style('dominion-custom-slider' );
// 	wp_register_style('dominion-custom-slider', get_template_directory_uri() . '/assets/sass/custom-slider.css', false,'1.1','all');
// 	wp_enqueue_style('dominion-custom-slider');

// }
// add_action('wp_enqueue_scripts', 'add_css');


/*  Dominion Prep Header And Footer Menus  */

// add_theme_support( 'menus' );

// register_nav_menus( array(
//    'primary' => __('Primary Navigation','Dominion'),
//    'secondary' => __('Secondary Navigation','Dominion'),
// ) );


/* Dominion Prep custom post type creation */

//================  Semester Section =============================//

function dominionprep_semester_post() {
	$labels = array(
		'name'               => _x( 'Semester', 'post type general name' ),
		'singular_name'      => _x( 'Semester', 'post type singular name' ),
		'add_new'            => _x( 'Add New', 'Semester' ),
		'add_new_item'       => __( 'Add New Semester' ),
		'edit_item'          => __( 'Edit Semester' ),
		'new_item'           => __( 'New Semester' ),
		'all_items'          => __( 'All Semester' ),
		'view_item'          => __( 'View Semester' ),
		'search_items'       => __( 'Search Semester' ),
		'not_found'          => __( 'No Team found' ),
		'not_found_in_trash' => __( 'No Team found in the trash' ),
		'parent_item_colon'  => '',
		//'menu_name'			=> 'Offers'
	);
	$args   = array(
		'labels'        => $labels,
		'description'   => 'Holds team specific data',
		'public'        => true,
		'menu_position' => 5,
		//'supports'			=> array( 'title', 'editor', 'thumbnail',),
		'supports'      => array( 'title', 'editor', 'thumbnail' ),
		'has_archive'   => true,
		//'show_in_rest'        => true,
	);
	register_post_type( 'Semester', $args );
}

add_action( 'init', 'dominionprep_semester_post' );
add_theme_support( 'post-thumbnails' );

//================  Our Videos Section =============================//

function dominionprep_video_post() {
	$labels = array(
		'name'               => _x( 'Video', 'post type general name' ),
		'singular_name'      => _x( 'Video', 'post type singular name' ),
		'add_new'            => _x( 'Add New', 'Video' ),
		'add_new_item'       => __( 'Add New Video' ),
		'edit_item'          => __( 'Edit Video' ),
		'new_item'           => __( 'New Video' ),
		'all_items'          => __( 'All Video' ),
		'view_item'          => __( 'View Video' ),
		'search_items'       => __( 'Search Video' ),
		'not_found'          => __( 'No Video found' ),
		'not_found_in_trash' => __( 'No Video found in the trash' ),
		'parent_item_colon'  => '',
		//'menu_name'			=> 'Offers'
	);
	$args   = array(
		'labels'        => $labels,
		'description'   => 'Holds video specific data',
		'public'        => true,
		'menu_position' => 6,
		//'supports'			=> array( 'title', 'editor', 'thumbnail',),
		'supports'      => array( 'title', 'editor', 'custom-fields' ),
		'has_archive'   => true,
		//'show_in_rest'        => true,
	);
	register_post_type( 'Video', $args );
}

add_action( 'init', 'dominionprep_video_post' );
add_theme_support( 'post-thumbnails' );


//================  Faq Section =============================//

function dominionprep_faq_post() {
	$labels = array(
		'name'               => _x( 'faq', 'post type general name' ),
		'singular_name'      => _x( 'faq', 'post type singular name' ),
		'add_new'            => _x( 'Add New', 'faq' ),
		'add_new_item'       => __( 'Add New faq' ),
		'edit_item'          => __( 'Edit faq' ),
		'new_item'           => __( 'New faq' ),
		'all_items'          => __( 'All faq' ),
		'view_item'          => __( 'View faq' ),
		'search_items'       => __( 'Search faq' ),
		'not_found'          => __( 'No faq found' ),
		'not_found_in_trash' => __( 'No faq found in the trash' ),
		'parent_item_colon'  => '',
		//'menu_name'			=> 'Offers'
	);
	$args   = array(
		'labels'        => $labels,
		'description'   => 'Holds faq specific data',
		'public'        => true,
		'menu_position' => 6,
		//'supports'			=> array( 'title', 'editor', 'thumbnail',),
		'supports'      => array( 'title', 'editor' ),
		'has_archive'   => true,
		//'show_in_rest'        => true,
	);
	register_post_type( 'faq', $args );
}

add_action( 'init', 'dominionprep_faq_post' );
add_theme_support( 'post-thumbnails' );

/*=========================== END ================================ */


//================  Curriculum Section =============================//

function dominionprep_curricullum_post() {
	$labels = array(
		'name'               => _x( 'Curriculum', 'post type general name' ),
		'singular_name'      => _x( 'Curriculum', 'post type singular name' ),
		'add_new'            => _x( 'Add New', 'Curriculum' ),
		'add_new_item'       => __( 'Add New Curriculum' ),
		'edit_item'          => __( 'Edit Curriculum' ),
		'new_item'           => __( 'New Curriculum' ),
		'all_items'          => __( 'All Curriculum' ),
		'view_item'          => __( 'View Curriculum' ),
		'search_items'       => __( 'Search Curriculum' ),
		'not_found'          => __( 'No Team found' ),
		'not_found_in_trash' => __( 'No Team found in the trash' ),
		'parent_item_colon'  => '',
		//'menu_name'			=> 'Offers'
	);
	$args   = array(
		'labels'        => $labels,
		'description'   => 'Holds team specific data',
		'public'        => true,
		'menu_position' => 5,
		//'supports'			=> array( 'title', 'editor', 'thumbnail',),
		'supports'      => array( 'title', 'editor', 'thumbnail' ),
		'has_archive'   => true,
		//'show_in_rest'        => true,
	);
	register_post_type( 'Curriculum', $args );
}

add_action( 'init', 'dominionprep_curricullum_post' );
add_theme_support( 'post-thumbnails' );


/* Dominion Prep logo for theme  */

// function dominionprep_custom_logo_setup() {
//    $defaults = array(
//        'height'               => 100,
//        'width'                => 150,
//        'flex-height'          => true,
//        'flex-width'           => true,
//        'header-text'          => array( 'site-title', 'site-description' ),
//        'unlink-homepage-logo' => true, 
//    );

//    add_theme_support( 'custom-logo', $defaults );
// }

// add_action( 'after_setup_theme', 'dominionprep_custom_logo_setup' );


/* Dominion Prep Custom Sidebar */

function my_custom_sidebar() {
	register_sidebar( array(
		'name'          => __( 'Custom Sidebar Area', 'dominion' ),
		'id'            => 'custom-side-bar',
		'description'   => __( 'This is the custom sidebar that you registered using the code snippet. You can change this text by editing this section in the code.', 'dominion' ),
		'before_widget' => '<div class="widget-content">',
		'after_widget'  => "</div>",
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}

add_action( 'widgets_init', 'my_custom_sidebar' );


function override_mce_options( $initArray ) {
	$opts                                 = '*[*]';
	$initArray['valid_elements']          = $opts;
	$initArray['extended_valid_elements'] = $opts;

	return $initArray;
}

add_filter( 'tiny_mce_before_init', 'override_mce_options' );


function tinyMCEoptions( $options ) {
	// $options is the existing array of options for TinyMCE
	// We simply add a new array element where the name is the name
	// of the TinyMCE configuration setting.  The value of the array
	// object is the value to be used in the TinyMCE config.

	$options['extended_valid_elements'] = 'span';

	return $options;
}

add_filter( 'tiny_mce_before_init', 'tinyMCEoptions' );


function themename_custom_logo_setup() {
	add_theme_support( 'custom-logo', array(
		'height'      => 100,
		'width'       => 300,
		'flex-height' => true,
		'flex-width'  => true,
		'header-text' => array( 'site-title', 'site-description' ),
	) );
}

add_action( 'after_setup_theme', 'themename_custom_logo_setup' );


// function my_custom_menu() {
// 	register_nav_menu('my-custom-menu',__( 'Footer Custom Menu' ));
// }
// add_action( 'init', 'my_custom_menu' );


function register_my_general_settings_fields() {

	register_setting( 'general', 'facebook', 'esc_attr' );
	register_setting( 'general', 'instagram', 'esc_attr' );
	register_setting( 'general', 'linkedin', 'esc_attr' );
// register_setting('general', 'phone1_footer', 'esc_attr');
// register_setting('general', 'phone2_footer', 'esc_attr');
	add_settings_field( 'facebook', '<label for="facebook">' . __( 'Facebook url', 'facebook' ) . '</label>', 'general_settings_facebooks_html', 'general' );
	add_settings_field( 'instagram', '<label for="instagram">' . __( 'Instagram url', 'instagram' ) . '</label>', 'general_settings_instagram_html', 'general' );
	add_settings_field( 'linkedin', '<label for="linkedin">' . __( 'Linkedin url', 'linkedin' ) . '</label>', 'general_settings_linkedin_html', 'general' );
}

add_filter( 'admin_init', 'register_my_general_settings_fields' );

function general_settings_facebooks_html() {
	$value = get_option( 'facebook', '' );
	echo '<input type="text"  id="facebook" name="facebook" value="' . $value . '" />';
}

function general_settings_instagram_html() {
	$value = get_option( 'instagram', '' );
	echo '<input type="text" id="instagram" name="instagram" value="' . $value . '" />';
}

function general_settings_linkedin_html() {
	$value = get_option( 'linkedin', '' );
	echo '<input type="text" id="linkedin" name="linkedin" value="' . $value . '" />';
}

///////////  Dominion Custom Footer Menu    /////////////////////


function my_custom_menu() {
	register_nav_menu( 'my-custom-menu', __( 'Footer Custom Menu' ) );
}

add_action( 'init', 'my_custom_menu' );


////////// Custom Shortcodes ////////

add_shortcode( 'newsletter_embed', 'newsletter_embed_sc' );

function newsletter_embed_sc( $atts, $content = null ) {
	$output = '<div class="newslatter newslatter--embed" style="padding: 0; background: none;">';
	$output .= '<div class="container">';
	$output .= '<div class="row">';
	$output .= '<div class="col-lg-12 d-flex align-items-center flex-wrap">';
	$output .= '<h2>Apply Now</h2>';
	$output .= '<form method="post" action="https://dominionprep.org/?na=s" target="_blank">';
	$output .= '<input type="hidden" name="nlang" value="">';
	$output .= '<input class="form-control" type="email" name="ne" id="tnp-1" placeholder="Enter your email address" required>';
	$output .= '<button class="white-button" type="submit">Submit</button>';
	$output .= '<!-- ' . do_shortcode( ' [email-subscribers-form id="1"] ' ) . ' -->';
	$output .= '<!-- ' . do_shortcode( '[acymailing_form_shortcode id="1"] ' ) . ' -->';
	$output .= '<!-- <div class="tnp-field tnp-field-button"><input class="tnp-submit" type="submit" value="Submit" ></div> -->';
	$output .= '</form>';
	$output .= '</div>';
	$output .= '</div>';
	$output .= '</div>';
	$output .= '</div>';

	return $output;
}

function my_action_wpcf7_before_send_mail( $contact_form, $abort ) {
	// to get form id
	$form_id = $contact_form->id();
	// to get submission data $posted_data is asociative array
	$submission  = WPCF7_Submission::get_instance();
	$posted_data = $submission->get_posted_data();
	// It will abort mail function if we assing $abort = true;

}

// add the action 
add_action( 'wpcf7_before_send_mail', 'my_action_wpcf7_before_send_mail', 10, 2 );

// Code for stripe double submission

add_action( 'init', function () {

	if ( isset( $_POST['_wpcf7_stripe_payment_intent'] ) && empty( $_POST['_wpcf7_stripe_payment_intent'] ) ) {

		remove_action( 'wpcf7_before_send_mail', 'cfdb7_before_send_mail' );
	}
} );

add_action( 'admin_menu', 'dominion_register_options_page' );

function dominion_register_options_page() {
	add_menu_page( __( 'Dominion API Setting', 'textdomain' ), 'Dominion API Setting', 'read', 'dominion-api', 'api_manager_html', '', 58 );
}

function video_link_generator() {
	$url          = 'https://dominionprep.magicmindtechnologies.com/api/conversation';
	$current_user = wp_get_current_user();
	$res          = array(
		"teacher"  => array(
			array(
				"userName" => $current_user->user_login,
				"userId"   => $current_user->user_login
			),
		),
		"students" => array()
	);
	$body         = wp_json_encode( $res );
	$options      = [
		'body'         => $body,
		'headers'      => [
			'Content-Type' => 'application/json',
		],
		'timeout'      => 300,
		'redirection'  => 0,
		'blocking'     => true,
		'http-version' => '1.0',
		'data_format'  => 'raw',
	];
	$data         = wp_remote_post( $url, $options );
	if ( is_wp_error( $data ) ) {
		$error_message = $data->get_error_message();
		echo "Something went wrong: $error_message";
	} else {
		$return      = json_decode( $data['body'] );
		$videoLinkId = $return->data->_id;
	}
	$url_fix_portion = 'https://earthdev.magicmindtechnologies.com/dominion-prep/conversation/';
	$video_url       = $url_fix_portion . $videoLinkId;

	return $video_url;
}

function api_manager_html() {
	if ( array_key_exists( 'gen', $_POST ) ) {
		$video_url_link = video_link_generator();
	}
	?>
    <div class="frm-dominion-div">
    <h2>Dominion Video Link Generation </h2>
    <form method="post">
        <button class="btn btn-primary" name="gen" style="margin-top: 30px;color: #fff;
    border: 1px solid #FD4F00;
    border-radius: 50px;
    padding: 14px 30px;
    display: table;
    background-color: #FD4F00;
    text-decoration: none;
    cursor: pointer;
    height: inherit;
    margin-left: 10px;
    outline: none !important;">
            Click to generate video link
        </button>
        <br/><br/><br/>
        <div id="content" class="content">
            <input size="100" class="
                border: 1px solid #E7E7E7 !important;
                color: #707070 !important;
                padding: 10px 4px !important;
                border-radius: 4px !important;
                " type="text" id="apiname" name="apiname" value="<?php echo $video_url_link; ?>">
        </div>
    </form>
    <button onclick="myFunction()" id="copy1" class="btn btn-primary copy" style="margin-top: 30px;color: #fff;
    border: 1px solid #FD4F00;
    border-radius: 50px;
    padding: 14px 30px;
    display: table;
    background-color: #FD4F00;
    text-decoration: none;
    cursor: pointer;
    height: inherit;
    margin-left: 10px;
    outline: none !important;">Copy
    </button>
    <script type="text/javascript">
        /*jQuery(document).ready(function () {
			jQuery("#gen").click(function () {
				jQuery("#content").toggle();
			});
		});*/
        function myFunction() {
            // Get the text field
            var copyText = document.getElementById("apiname");
            // Select the text field
            copyText.select();
            copyText.setSelectionRange(0, 99999); // For mobile devices
            // Copy the text inside the text field
            navigator.clipboard.writeText(copyText.value);
            var elem = document.getElementById("copy1");
            elem.innerHTML = 'Copied';
            //if (elem.value=="Copy") elem.value = "Copied";
            //else elem.value = "Copy";
            // Alert the copied text
            //alert("Copied the text");
        }
    </script>
<?php }

<?php
/**
 * Understrap Child Theme functions and definitions
 *
 * @package UnderstrapChild
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;



/**
 * Removes the parent themes stylesheet and scripts from inc/enqueue.php
 */
function understrap_remove_scripts() {
	wp_dequeue_style( 'understrap-styles' );
	wp_deregister_style( 'understrap-styles' );

	wp_dequeue_script( 'understrap-scripts' );
	wp_deregister_script( 'understrap-scripts' );
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );



/**
 * Enqueue our stylesheet and javascript file
 */
function theme_enqueue_styles() {

	// Get the theme data.
	$the_theme = wp_get_theme();

	$suffix = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';
	// Grab asset urls.
	$theme_styles  = "/css/child-theme{$suffix}.css";
	$theme_scripts = "/js/child-theme{$suffix}.js";

	wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . $theme_styles, array(), $the_theme->get( 'Version' ) );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . $theme_scripts, array(), $the_theme->get( 'Version' ), true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );



/**
 * Load the child theme's text domain
 */
function add_child_theme_textdomain() {
	load_child_theme_textdomain( 'understrap-child', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'add_child_theme_textdomain' );



/**
 * Overrides the theme_mod to default to Bootstrap 5
 *
 * This function uses the `theme_mod_{$name}` hook and
 * can be duplicated to override other theme settings.
 *
 * @param string $current_mod The current value of the theme_mod.
 * @return string
 */
function understrap_default_bootstrap_version( $current_mod ) {
	return 'bootstrap5';
}
add_filter( 'theme_mod_understrap_bootstrap_version', 'understrap_default_bootstrap_version', 20 );



/**
 * Loads javascript for showing customizer warning dialog.
 */
function understrap_child_customize_controls_js() {
	wp_enqueue_script(
		'understrap_child_customizer',
		get_stylesheet_directory_uri() . '/js/customizer-controls.js',
		array( 'customize-preview' ),
		'20130508',
		true
	);
}
add_action( 'customize_controls_enqueue_scripts', 'understrap_child_customize_controls_js' );



function zmExcerpt($whichPostID=false, $limit=156, $stripShortCodes=true, $displayReadMoreLink=false, $readMoreText=false, $beforeMarkup="", $afterMarkup="", $ellipsis = "...") {
	$limit = intval($limit);//in case we get sent a string
	if ($whichPostID) {
		$somePostID = $whichPostID;
		$somePost = get_post($whichPostID);
	} else {
		//if we aren't passed a post id, use global post by default
		global $post;
		$somePost = $post;
		$somePostID = $somePost->ID;
	}
	//$someContent = "#... zmExcerpt ... #somePostID=={$somePostID}";
	$someContent = "";
	//if($post->post_excerpt) {
	if (has_excerpt($somePostID)) {
		//echo("has_excerpt");
		//$content = strip_tags($post->post_excerpt);
		if ($stripShortCodes) {
			$someContent .= strip_shortcodes( strip_tags($somePost->post_excerpt) );
		} else {
			$someContent .= strip_tags($somePost->post_excerpt);
		}
		//$content = strip_tags(strip_shortcodes( get_the_excerpt());
	} else {
		//echo("no has_excerpt");
		if ($stripShortCodes) {
			//echo("get_the_content({$somePostID})==".get_the_content($somePostID) . "...;");//why does this appear to return nothing?
			//echo();
			$someContent .= strip_shortcodes( strip_tags($somePost->post_content));
		} else {
			$someContent .= strip_tags($somePost->post_content);
		}
	}
	// Find the last space (between words we're assuming) after the max length.
	if (strlen($someContent) > $limit) {
		 $last_space = strrpos( substr( strip_tags($someContent), 0, $limit), ' ');
		// Trim
		$trimmed_text = substr(strip_tags($someContent), 0, $last_space);
	} else {
		$trimmed_text = $someContent;
	}
    if (!$readMoreText) {
    	$readMoreText = "Read More &#187;";
    }
    if ($displayReadMoreLink) {
       return $beforeMarkup . $trimmed_text . $ellipsis .  '<a class="sr_readmore readmore" href="'. esc_url(get_permalink($somePost->ID)) . '" title="Read '.get_the_title($somePost->ID).'">'.$readMoreText.'</a>' . $afterMarkup;
    } else {
       return $beforeMarkup . $trimmed_text . $ellipsis . $afterMarkup;
    }
}



//Account section

function mepr_add_some_tabs($user) {
  ?>
    <span class="mepr-nav-item member-area <?php MeprAccountHelper::active_nav('member-area'); ?>">
      <!-- KEEPS THE USER ON THE ACCOUNT PAGE -->
      <a href="<?php echo site_url();?>/account/?action=member-area">Member Area</a>
    </span>
    <span class="mepr-nav-item user-directory <?php MeprAccountHelper::active_nav('user-directory'); ?>">
      <!-- KEEPS THE USER ON THE ACCOUNT PAGE -->
      <a href="<?php echo site_url();?>/account/?action=user-directory">User Directory</a>
    </span>

  <?php
}
add_action('mepr_account_nav', 'mepr_add_some_tabs');


function mepr_add_tabs_content($action) {

  if($action == 'member-area'): //Update this 'premium-support' to match what you put above (?action=premium-support)
  ?>
    <section class="members-area">
        <div class="container chunk">
            <div class="row">
                <div class="col-md-12">
                    <h2>Zoom Links</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                   <p>5AM EASTERN STANDARD TIME</p>
                    <a target="_blank" href="https://us02web.zoom.us/j/89052470508?pwd=V1ZuQjdNTTZXZzlzZkRwRkx0OGRhUT09#success" class="default-btn">Live Zoom Link</a>
                </div>
                <div class="col-md-6">
                   <p>AUSTRALIAN CALL SUSPENDED UNTIL FURTHER NOTICE</p>
                    <a target="_blank" href="https://us02web.zoom.us/j/83653422557?pwd=SHllU1NqOWsxYXR4akx2SmZ5UWRZQT09#success" class="default-btn">Live Zoom Link</a>
                </div>
            </div>
        </div>
        
        <div class="container chunk">
            <div class="row">
                <div class="col-md-12">
                    <h2>Current and Upcoming Books</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <a target="_blank" href="https://docs.google.com/document/d/1trQIdblEMUZl19o_yfV_T6rDK6wiNf0PVoRUG-I-yFo/edit" class="default-btn">View</a>
                </div>
            </div>
        </div>
        
        
        <div class="container chunk">
            <div class="row">
                <div class="col-md-12">
                    <h2>Schedule</h2>
                    <img src="<?php echo get_stylesheet_directory_uri();?>/img/wuc-schedule.png">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <a target="_blank" href="https://docs.google.com/document/d/1UOaPr_jgjBlTnO4O-L4ac6i4M1Vmj-R4NceIZ7cTIMA/edit" class="default-btn">Download Schedule &amp; Rules</a>
                </div>
            </div>
        </div>
    </section>
  <?php
  endif;  
    
if($action == 'user-directory'): //Update this 'premium-support' to match what you put above (?action=premium-support)
  ?>
    <section class="user-directory">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php echo do_shortcode('[DynamicUserDirectory]');?>
                </div>
            </div>
        </div>
    </section>
  <?php
  endif;
}
add_action('mepr_account_nav_content', 'mepr_add_tabs_content');
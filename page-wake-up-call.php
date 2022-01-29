<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();


?>

<section class="wuc-hero">
    <div class="container">
        <div class="row">
            <div class="col-md-5 offset-md-7">
               <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/wake-up-call-logo-blk.png" class="wuc-logo">
               <p class="wuc-tagline">Set your alarm, life is about to change</p>
            </div>
        </div>
    </div>
</section>





<?php get_template_part( 'global-templates/join-wuc-cta' ); ?>

<?php get_template_part( 'global-templates/instagram' ); ?>


<section class="home-get-on-the-list sec-pad">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <?php get_template_part( 'global-templates/mailchimp-sign-up' ); ?>
            </div>
        </div>
    </div>
</section>


<?php
get_footer();

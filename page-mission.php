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

<section class="mission-hero">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
               <h1>Mission/<br>Vision</h1>
            </div>
        </div>
    </div>
</section>


<section class="mission-info sec-pad">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/pi.png" class="pi">
                <h2>Mission</h2>
                <p>To help people all over the world elevate their thinking and vibrate higher so they can create the life they want and unleash their fullest potential. You have a gift… it’s time to unwrap it!</p>
                <h2>Vision</h2>
                <p>I see a world filled with people who have gained the knowledge and understanding necessary to recreate their reality from the frequency of love and human connection, a world where everyone understands their ability to create and live in harmony with the laws that govern everything on this planet and unites us all.</p>
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

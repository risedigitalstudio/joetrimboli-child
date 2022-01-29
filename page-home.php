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

<section class="home-hero">
    <div class="container">
        <div class="row">
            <div class="col-md-5 offset-md-7">
                <p>Hello, I’m</p>
                <h1>Joe Trimboli</h1>
                Mindset coach, Speaker and founder of <strong>The Wake Up Call&trade;</strong> who’s on a mission to wake people up and change how the world thinks.
            </div>
        </div>
    </div>
</section>


<?php
get_footer();

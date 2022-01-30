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


<section class="wuc-intro sec-pad">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <h2>The Wake Up Call&trade; will help you...</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 offset-md-1">
                <ul class="checks">
                    <li>Build self-esteem and greater wellbeing</li>
                    <li>Gain the motivation and confidence you need to thrive</li>
                    <li>Form healthy habits and a routine you love</li>
                    <li>Wake up feeling energized</li>
                    <li>Reduce stress and increase productivity, passion and focus</li>
                </ul>
            </div>
            <div class="col-md-5">
                <ul class="checks">
                    <li>Develop peace of mind and explore personal freedom</li>
                    <li>Set big goals and reach your full potential</li>
                    <li>Discover your value and raise your standards in all your relationships</li>
                    <li>Find and sustain personal and professional success, wealth and happiness</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="wuc-desc sec-pad">
    <div class="container">
        <div class="row">
            <div class="col-md-5 offset-md-1">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/joe-standing.jpeg">
            </div>
            <div class="col-md-5">
                <h3>Who we are</h3>
                <p>The Wake Up Call is a gym for the mind dedicated to waking people up to what’s possible for them.</p>
                <h3>What we do</h3>
                <ul class="checks pl-4">
                    <li>Inspire mindfulness through readings, coaching techniques and accountability measures in an engaging group call every day.</li>
                    <li>A community filled with like-minded individuals from all walks of life and different areas of the world with one shared vision: To become the best version of themselves.</li>
                    <li>Every person who joins our incredible community is welcomed with open arms and can speak without fear, criticism or judgement.</li>
                </ul>
                <p><strong>We’re on this journey together.</strong></p>
                <a href="<?php echo site_url();?>/join-now" class="default-btn">Wake Me Up</a>
            </div>
        </div>
    </div>
</section>


<section class="wuc-testimonials sec-pad">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <p>testimonial slider goes here</p>
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

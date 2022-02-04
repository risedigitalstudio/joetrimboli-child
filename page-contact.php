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

<section class="contact-hero">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
               <h1>Contact</h1>
            </div>
        </div>
    </div>
</section>

<section class="contact-wrap sec-pad">
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-1">
                <div class="flex-height">
                   <p><i class="fa fa-envelope"></i><a href="mailto:info@joetrimboli.com">info@joetrimboli.com</a></p>
                    <ul class="contact-social">
                        <li><a href="https://www.instagram.com/5am_wakeupcall/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="https://www.facebook.com/5amWakeUpCall" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://www.linkedin.com/company/thewakeupcall/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="https://www.youtube.com/channel/UClmIyFYkr77KhHZdEn4Se8A" target="_blank"><i class="fa fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <?php echo do_shortcode('[contact-form-7 id="138" title="Contact Us"]');?>
            </div>
        </div>
    </div>
</section>



<?php
get_footer();

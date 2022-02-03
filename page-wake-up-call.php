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
                <a href="<?php echo site_url();?>/plans/register" class="default-btn">Wake Me Up</a>
            </div>
        </div>
    </div>
</section>



<section class="wuc-testimonials sec-pad">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
               <h2>Testimonials</h2>
               <p>Don’t just listen to us. See what others have to say:</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="wuc-testimonial-slider mt-5">
                    <?php
                        $testimonialArray = get_field('testimonials');

                        foreach($testimonialArray as $testimonial) {
                            ?>
                            <?php setup_postdata($testimonial); ?>
                            <div class="wuc-testimonial">
                                <?php echo get_the_post_thumbnail( $testimonial, 'thumbnail', ['class'=>'wuc-testimonial-img'] ); ?>
                                <div class="testimonial-info">
                                    <?php echo zmExcerpt($testimonial, 156); ?>
                                    <h3><?php echo get_the_title($testimonial);?></h3>
                                    <p><?php echo get_field('title', $testimonial);?></p>
                                </div>
                            </div>
                            <?php
                        }
                    ?>
                </div>
                
            <div class="arrows-wuc-testimonials">
                <div class="arrows-inner">
                    <span class="prev-wuc-testimonial">
                        <svg width="30" height="19" viewBox="0 0 45 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18 1L2.00001 17L18 33" stroke="#ec008c" stroke-width="2.5"/>
                        </svg>
                   </span>
                    <span class="next-wuc-testimonial">
                        <svg width="30" height="19" viewBox="0 0 45 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M27.5303 33.5303L26.4697 32.4696L41.9393 16.9999L26.4697 1.53027L27.5303 0.469609L44.0606 16.9999L27.5303 33.5303Z" stroke="#ec008c"/>
                        </svg>
                    </span>
                </div>
            </div>
           
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-12">
                <p class="wuc-test-btn-wrap"><a href="<?php echo site_url();?>/testimonials" class="default-btn">View all</a></p>
            </div>
        </div>
    </div>
</section>




<section class="wuc-two-lists sec-pad">
    <div class="container">
        <div class="row">
            <div class="col-md-5 offset-md-1">
               <h3 class="mb-3">Our members have experienced:</h3>
                <ul class="checks pl-4">
                    <li>Saved Marriages</li>
                    <li>Ending of abusive relationships</li>
                    <li>Resolving years of therapy</li>
                    <li>Restored passion for life</li>
                    <li>Increased faith and spirituality</li>
                    <li>Major career changes</li>
                    <li>Exponential growth in business and sales volumes</li>
                    <li>New business ventures</li>
                    <li>New friends and community</li>
                    <li>Ending substance abuse</li>
                    <li>A newly discovered sense of self-worth</li>
                </ul>
            </div>
            <div class="col-md-5">
                <h3 class="mb-3">You’ll also get your hands on...</h3>
                <ul class="checks pl-4">
                    <li>A daily Zoom call led by a PGI Certified Consultant, Speaker and Founder of the Wake Up Call</li>
                    <li>Daily reading sessions (we explore the best books ever written for personal and professional development)</li>
                    <li>Exclusive access to our private WhatsApp group chat, the members-only Facebook Group, special events and recordings of previous calls</li>
                    <li>Pep Talk Fridays, our group session with guest speakers, coaching, lessons and discussions A network of high-performing people from different professions and industries</li>
                    <li>Incredible accountability and support from the Wake Up Call community</li>
                    <li>Front-row access to coaching programs and workshops</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="plus">
                    <h4>Plus</h4>
                    <p>FREE masterclasses on meditation, yoga, authorship, <br class="desktop">time-blocking, masterminding, and so much more.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="wake-me-up sec-pad">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p><a href="<?php echo site_url();?>/plans/register" class="default-btn">Wake me up</a></p>
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

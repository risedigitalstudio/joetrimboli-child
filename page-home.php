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
                <div class="flex-height home-hero-inner">
                    <p>Hello, I’m</p>
<!--                    <h1>Joe Trimboli</h1>-->
                   <div class="full">
                       <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/jt-logo-white.png" class="hello">
                   </div>
                    <p>Mindset coach, Speaker and founder of The <strong>Wake&nbsp;Up&nbsp;Call&trade;</strong> who’s on a mission to wake people up and change how the world thinks.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="home-intro sec-pad">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <h3>Thoughts cause your feelings.<br>Feelings cause your actions.<br>Actions cause your results.</h3>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/left-quote.png" class="quote quote-left">
                <h1>Master this,<br>master your life!</h1>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/right-quote.png" class="quote quote-right">
                
                <p>A realistic optimist with a passion for personal development and human potential, I created an empathetic virtual community called the <strong>Wake Up Call&trade;</strong>  that inspires many on their journey to discovering their full potential through healing, understanding and increased awareness of the human mind, body and spirit.</p>

                <p>The <strong>Wake Up Call&trade;</strong> was originally created as a study resource for three of my coaching clients. Despite trying to keep the call exclusive, it quickly exploded into a movement that creates new routines, thought habits and life-changing results for people all over the world. Something this good could not be kept a secret for long.</p>
                
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/black-sep.png" class="blk-sep">
                
                <p>I inspire people to stop reacting to the outside world and begin creating their life from the inside out, an idea that all the great books have told us is the secret to life. When you gain an understanding of how the mind works, the laws that govern this universe and how thoughts become things, you begin to discover what you are truly capable of and become aware of the tools you already possess to make it all happen.</p>
                
                <p><a href="<?php echo site_url();?>/wake-up-call" class="default-btn">Learn More</a></p>
                
                <p><strong>&rdquo;I was just floating through life, ending up wherever chance would take me, <br class="desktop">without ever having set a goal.&ldquo;</strong></p>
                
                <p>I started drifting early on. While still in high school, I went from pumping gas to stocking shelves to selling suits. Eventually, I found myself as a licensed mechanic at my dad’s shop, and shortly thereafter, somehow ended up as a mortgage agent at one of Canada’s largest banks, where I began my career in the mortgage industry. </p>

                <p>I know what you’re thinking: <strong>&#8220;Soooo….. How did you wind up here?&#8221;</strong></p>
                
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/alfa-romeo.jpeg" class="home-img alfa">
                <p class="caption">The 1975 Alfa Romeo Spider that solidified my belief in "Universal Laws"</p>
                
                <p>Well, for almost two decades of my professional life, things were almost always a struggle. I fought cancer in my twenties and after a few bad decisions, was bankrupt in my thirties. I felt hopeless, exhausted and frustrated after being stuck in what seemed like a never-ending, losing battle.</p>

                <p>I always kept it together on the outside, but on the inside, I was falling apart. Deep down, I think I always knew I was capable of so much more, but I had no idea what was holding me back! </p>

                <p>What was the secret to finding genuine happiness and fulfillment? And why do some people repeatedly struggle while others thrive in the most challenging circumstances? What did they have that I didn’t?</p>
                
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/joe-car.jpeg" class="home-img mb-5">
                
                <p>After finally gaining some knowledge and understanding, I used this newfound awareness to completely change my life. I’ve become a dedicated student of human potential and growth, and am completely obsessed with sharing it with the world. I took to studying universal laws, the subconscious mind and success principles taken from the most impactful, relevant books, and applied them to my own personal and professional life. I also invested in myself through coaching and other programs. This period of self-reflection uncovered everything I had done wrong in my life and once I became aware of those things, everything changed.</p>

                <p>With a positive mindset and an understanding of certain laws and principles, every aspect of my life improved and I realized that if I could do it, anyone could do it! I was no longer a skeptic. I no longer believed this was only possible for everyone else, I knew it was possible for me too. I developed an unwavering faith that was based on understanding and knew I wanted to share it with people everywhere.</p>

                <p>While I never knew how I would reach those who needed to hear these lessons, I trusted that if it was meant to be, the Universe would figure it out. All I had to do is keep walking through the doors that seemed to keep opening up for me. And that’s just what I did. Eventually, the “how” showed up as the Wake Up Call™. The more I walked through these doors, the more I uncovered my purpose: To help people all over the world create the life they want and unleash their fullest potential.</p>
                
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/joe-event-home.jpeg" class="home-img">
                <p class="caption">Mortgage Centre Canada and Mortgage Architects National Conference in Cancun, Mexico</p>
                
                <p>I realized I had a gift. By making myself vulnerable, people could relate and learn these lessons easily and effectively. I promised I would continue unwrapping these gifts and sharing them with the world. </p>

                <p>And that’s exactly what I’m doing…</p>
                
                <p><a href="<?php echo site_url();?>/about-joe" class="default-btn">Joe's Story</a></p>
            </div>
        </div>
    </div>
</section>


<?php get_template_part( 'global-templates/join-wuc-cta' ); ?>


<section class="home-speaking sec-pad">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h2>Speaking Engagements</h2>
                <p>Looking for an inspirational speaker at your next conference or event? Arm your team with powerful workshops, professional development tools and breakout sessions to improve work ethic and habits. Book Joe for your next digital or in-person event.</p>
                <div class="btn-wrap">
                    <a href="<?php echo site_url();?>/speaking-engagements" class="default-btn">Learn More</a>
                    <a href="mailto:lori@joetrimboli.com" class="default-btn">Book Now</a>
                </div>
            </div>
        </div>
    </div>
</section>

   
<section class="home-events sec-pad">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-6">
                <div class="home-cta-inner">
                    <h2>Events</h2>
                    <p>Interested in recent or upcoming events?<br class="desktop">Find out if Joe’s coming to a location near you.</p>
                    <div class="btn-wrap">
                        <a href="<?php echo site_url();?>/events" class="default-btn">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

   
<section class="home-get-on-the-list sec-pad">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <?php get_template_part( 'global-templates/mailchimp-sign-up' ); ?>
            </div>
        </div>
    </div>
</section>

<section class="home-videos sec-pad">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
               <h2>Vibrate Higher</h2>
               <p>Mental habits that will help you reach your greatest potential.</p>
            </div>
        </div>
        <div class="row home-video-slider">
            <?php
            if( have_rows('videos') ):

                while( have_rows('videos') ) : the_row();

                    $videoCode = get_sub_field('youtube_embed_code');
                    ?>
                    <div class="video">
                        <div class="videoWrapper">
                            <?php echo $videoCode; ?>
                        </div>
                    </div>
                    <?php

                endwhile;

            else :
            endif;
            ?>
        </div>
        <div class="arrows-home-videos">
           <div class="line"></div>
            <div class="arrows-inner">
                <span class="prev-videos">
                    <svg width="30" height="19" viewBox="0 0 45 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18 1L2.00001 17L18 33" stroke="black" stroke-width="2.5"/>
                    </svg>
               </span>
                <span class="next-videos">
                    <svg width="30" height="19" viewBox="0 0 45 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M27.5303 33.5303L26.4697 32.4696L41.9393 16.9999L26.4697 1.53027L27.5303 0.469609L44.0606 16.9999L27.5303 33.5303Z" stroke="black"/>
                    </svg>
                </span>
            </div>
        </div>
    </div>
</section>


<?php get_template_part( 'global-templates/instagram' ); ?>


<?php
get_footer();

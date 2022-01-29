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
                
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/joe-car.jpeg" class="home-img">
            </div>
        </div>
    </div>
</section>


<?php
get_footer();

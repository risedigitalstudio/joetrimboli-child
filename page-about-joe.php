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

<div class="light-bg">

<section class="about-hero">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <h1>Here's my story.</h1>
            </div>
        </div>
    </div>
</section>


<section class="about-intro sec-pad">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <h2>Hey, I'm Joe. My friends call me pep.</h2>
                <p>I’m a Mortgage Broker, Entrepreneur, Mindset Coach, Speaker and Founder of the Wake Up Call and Pep Talks. I’ve become a realistic optimist who’s passionate about inspiring people to recognize what’s possible for themselves, while equipping them with the confidence and unwavering faith necessary to achieve anything they set their minds to.</p>

                <p>My life went a little something like this…</p>

                <p>I hit rock bottom a few times. I battled cancer in my twenties and was bankrupt in my thirties. Defeated by what seemed like a never-ending streak of bad luck, I blamed circumstance for my misfortunes and like so many, I allowed these circumstances to control my life.</p>

                <p>Until I hit my forties. That’s when I started waking up and my life began to change.</p> 
            </div>
        </div>
        
        <div class="row align-left">
            <div class="col-md-5 offset-md-1">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/joe-about.jpg" class="about-joe-img">
            </div>
            <div class="col-md-5">
                <p>It was only when I traded in resentment for acceptance that I opened my mind and began unlocking my true potential.</p>
                <div class="quote-wrap">
                    <p class="quote-img-side">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/left-quote.png" class="quote quote-left">
                    </p>
                    <p class="quote-side">
                        I was stuck, full of excuses and convinced I was put on earth to struggle.
                    </p>
                </div>
                
                <p>Some say life begins at 40. Well for me, they hit the nail right on the head! Although I wish it began a little sooner, I’m grateful it unfolded the way it did. I drifted through life until I got to a point where I didn’t know what I wanted anymore, like nothing in the world seemed to light my fire. Anyone who knew me could tell you that on the surface, I looked happy, but inside, I was barely holding it together. </p>
                
                <p>But here’s the thing…</p>

                <p>If it wasn’t for sinking to my lowest low, I would have never <strong>woken up.</strong></p>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="quote-wrap center-quote">
                    <p class="quote-img-side">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/left-quote.png" class="quote quote-left">
                    </p>
                    <p class="quote-side">
                        You get motivated by desperation or inspiration.
                    </p>
                </div>
                
                
            <p>After speaking with some incredible people, I learned that by changing my mindset, I could change my world. I finally allowed myself to accept where I was in life, stopped playing the victim and used my experiences as an opportunity to discover my true purpose.  Life has a funny way of working out. Obsessed with the subconscious mind and success principles, I decided to immerse myself in the study of human behaviour and growth. I’ve learned my biggest passion is helping people create the life they want to live and reach their full potential. </p>

            <p>We all have the power to achieve anything we want. We’ve been given these mental faculties—tools, if you will—and although we use them all the time, we do so unintentionally and without purpose. We let the outside world control how we use them and end up with, well…. whatever we end up with. When we learn to use these tools on purpose, we begin to discover what makes us so powerful as human beings. We discover how we can create anything we put our minds to. Unfortunately for most of us, we won’t ever know what these mental faculties are, let alone use them correctly! </p>

            <p>That’s why I love sharing what I’ve learned with anyone ready to stop playing the victim. Even those who have accepted mediocrity, those who claim they’re content, come to realize they’ve been lying to themselves because they’ve been held back by their own limiting beliefs. </p>

            <p>The problem is most of us don’t spend enough time studying…</p>
            
            
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/joe-about-2.png" class="home-img mb-5">
            
            <p>You see, we automatically do certain things without any conscious awareness around our behaviour. If we want to change the disappointing action-result cycle, we must first start with changing our behaviour. And if we want to change our behaviour, we have to change the program in our subconscious mind. You already have everything you’ll ever need.</p>
            
            
            <div class="quote-wrap center-quote">
                <p class="quote-img-side">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/left-quote.png" class="quote quote-left">
                </p>
                <p class="quote-side">
                   You have the power to change your life.
                </p>
            </div>
               
            <p>I’ve applied these learnings to rewire my mindset and turn my life around…and the lives of countless others! I no longer wonder if this stuff works… I know it does! I know what you’re capable of. </p>

            <p>I am on a mission to learn more, understand more and share more so I can continue to inspire you to start living from the inside out.</p>
                
            </div>
        </div>
        
    </div>
</section>

</div>

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

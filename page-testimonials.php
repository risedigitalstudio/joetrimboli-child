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

<section class="testimonials-hero">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>See what others<br class="desktop">have to say</h1>
            </div>
        </div>
    </div>
</section>

<section class="testimonials-intro sec-pad">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Testimonials</h2>
                <p class="mb-5">Don’t just listen to us. See what others have to say:</p>
            </div>
        </div>
        
        <div class="row">
            <?php
            if( have_rows('testimonial_videos') ):

                while( have_rows('testimonial_videos') ) : the_row();

                    $videoCode = get_sub_field('youtube_embed_code');
                    $videMemberName = get_sub_field('member_name');
                    ?>
                    <div class="col-md-4">
                        <div class="video">
                            <div class="videoWrapper">
                                <?php echo $videoCode; ?>
                            </div>
                        </div>
                        <h3 class="video-member-name">
                            <?php echo $videMemberName; ?>
                        </h3>
                    </div>
                    <?php

                endwhile;

            else :
            endif;
            ?>
        </div>
    </div>
</section>

<section class="testimonials-wrap sec-pad">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                    <?php
                    $args = array (
                    'post_type' => array ('member_testimonials'),
                    'orderby' => array( 'menu_order' => 'ASC'),
                    'posts_per_page' => -1
                    );
                    //$args['search_filter_id'] = 84;
                    $testimonials = new WP_Query($args);                           
                    $counter = 0;
                    ?>

                        <?php while ( $testimonials->have_posts() ) : $testimonials->the_post();?>

                           <div class="row rel pb-5 mb-5 one-testimonial">
                                <div class="col-md-2">
                                    <?php echo get_the_post_thumbnail( null, 'thumbnail', ['class'=>'member'] ); ?>
                                </div>
                                <div class="col-md-8">
                                    <?php the_content();?>
                                    <h3><?php the_title();?></h3>
                                    <p><?php echo get_field('title');?></p>
                                </div>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/right-quote.png" class="testimonial-quote">
                            </div>

                        <?php                                      
                        $counter++;        
                        ?>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
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

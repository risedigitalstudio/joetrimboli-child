<?php
/**
 * The template for displaying all single posts
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

?>

<section class="single-speaking-engagement-heading sec-pad-top">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <header>
                    <h1><?php the_title();?></h1>
                    <?php if (get_field('location')) { ?>
                    <p class="location"><i class="fa fa-map-marker"></i><?php echo get_field('location');?></p>
                    <?php } ?>
                </header>
            </div>
        </div>
    </div>
</section>

<section class="single-speaking-engagement sec-pad-bot">
	<div class="container">
		<div class="row">
            
			<div class="col-md-8 offset-md-2">

				<?php
				while ( have_posts() ) {
					the_post();
                    
                    echo get_the_post_thumbnail( $post->ID, 'large', ['class'=>'speaking-featured-img'] );
					the_content();
                    
                    if (get_field('youtube_video_embed_code')) {
                        ?>
                        <div class="video">
                            <div class="videoWrapper">
                                <?php echo get_field('youtube_video_embed_code'); ?>
                            </div>
                        </div>
                        <?php
                    }
                    

                if( have_rows('image_carousel') ):
                    ?>
                    <div class="carousel" data-flickity='{ "imagesLoaded": true, "wrapAround": true }'>
                   <?php
                    while( have_rows('image_carousel') ) : the_row();

                        $imgID = get_sub_field('image');
                        ?>
    
                        <?php 

                            echo wp_get_attachment_image( $imgID, 'large' ); ?>

                    
                       <?php 


                        endwhile;
                    ?></div><?php
                endif;

					?>
					   
					</div>
                </div><!-- end row-->
					<div class="row speaker-pagination">
					    <div class="col-md-12">
					        <?php understrap_post_nav(); ?>
					    </div>
					</div>
					<?php
				}
				?>

			


	</div>
</section>


<?php get_template_part( 'global-templates/speaking-engagements-footer' ); ?>

<?php
get_footer();

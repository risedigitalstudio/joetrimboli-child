<?php
/**
 * The template for displaying archive pages
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

?>

<section class="speaking-engagements-archive sec-pad">
	<div class="container">

				<?php
				if ( have_posts() ) {
					?>
					<header class="page-header">
                        <h1>Speaking Enagements</h1>
                        <p>Looking for an inspirational speaker at your next conference or event? Arm your team with powerful workshops, professional development tools and breakout sessions to improve work ethic and habits. Book Joe for your next digital or in-person event.</p>
					</header><!-- .page-header -->
					<?php
					// Start the loop.
					while ( have_posts() ) {
						the_post();

                        ?>
                        <div class="row single-engagement">
                            <div class="col-md-5 pl-0">
                                <a href="<?php the_permalink();?>">
                                    <?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
                                </a>
                            </div>
                            <div class="col-md-7 pr-0">
                               <h2><?php the_title();?></h2>
                                <?php echo zmExcerpt(); ?>
                                <p class="btn-wrap"><a href="<?php the_permalink();?>" class="default-btn">Read More</a></p>
                            </div>
                        </div>
						
						
						<?php
					}
				} else {
					get_template_part( 'loop-templates/content', 'none' );
				}
				?>


			<?php
			// Display the pagination component.
			understrap_pagination();

			?>
	</div>
</section>

<?php get_template_part( 'global-templates/speaking-engagements-footer' ); ?>

<?php
get_footer();

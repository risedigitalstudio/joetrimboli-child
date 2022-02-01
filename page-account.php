<?php
/* Template Name: Account */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

?>


<section class="account-hero">
    <div class="container">
        <div class="row">
            <div class="col-md-5 offset-md-7">
                <img src="<?php echo get_stylesheet_directory_uri();?>/img/wake-up-call-logo-blk.png" class="account-logo">
                <h2>Member Dashboard</h2>
            </div>
        </div>
    </div>
</section>



<section class="account-wrap sec-pad">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
				<?php
				while ( have_posts() ) {
					the_post();
                    the_content();
//					get_template_part( 'loop-templates/content', 'page' );
				}
				?>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();

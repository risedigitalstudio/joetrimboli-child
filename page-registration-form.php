<?php
/* Template Name: Registration Form */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

?>

<section class="registration-bg sec-pad">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12">
				<?php
				while ( have_posts() ) {
					the_post();
					get_template_part( 'loop-templates/content', 'page' );
				}
				?>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();

<?php
/* Template Name: Plans - Register */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

<section class="plans-register sec-pad-bot">
	<div class="container">
	<div class="row">
	    <div class="col-md-12">
	        <h1>Register</h1>
	    </div>
	</div>
		<div class="row">
			<div class="col-md-12">
				<?php
				while ( have_posts() ) {
					the_post();
                    the_content();
				}
				?>

			</div>
		</div>
		
		<div class="row">
			<div class="col-md-12">
                <p class="mt-5">No obligation, cancel anytime</p>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();

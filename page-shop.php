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

<section class="shop-hero">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
               <h1>Shop The Wake Up Call Merchandise</h1>
            </div>
        </div>
    </div>
</section>


<section class="shop-wrap sec-pad">
    <div class="container">
            <?php
            if( have_rows('shop') ):
            $counter = 0;

                while( have_rows('shop') ) : the_row();

                    $shopCategory = get_sub_field('shop_category');
                    $shopCategoryName = get_sub_field('shop_category_name');
                    ?>
                    <div class="row <?php if ($counter !== 0) {echo 'mt-5';}?>">
                        <div class="col-md-12">
                            <h2><?php echo $shopCategoryName; ?></h2>
                            <?php echo $shopCategory; ?>
                        </div>
                    </div>
                    <?php
        
                $counter++;
                endwhile;

            else :
            endif;
            ?>
    </div>
</section>


<section class="shop-terms sec-pad">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <p>We only exchange goods if they are defective or damaged. Please be sure to check all sizing information before making your selection. In circumstances where you consider that a product is defective, you should promptly contact us at info@joetrimboli.com with details of the product and the defect. You can send the item you consider defective to: </p>
                <p>The Mortgage Centre – C/O Joe Trimboli<br>
                4040 Steeles Ave W, Unit 5<br>
                Woodbridge, ON L4L 4Y5</p>
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

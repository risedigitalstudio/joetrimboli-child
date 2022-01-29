<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

?>


<footer class="main-footer sec-pad">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p><span id="yr"></span> &copy; Joe Trimboli. All rights Reserved.</p>
            </div>
            <div class="col-md-6">
                <ul class="footer-social">
                    <li><a href="https://www.instagram.com/5am_wakeupcall/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="https://www.facebook.com/5amWakeUpCall" target="_blank"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://www.linkedin.com/company/thewakeupcall/" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="https://www.youtube.com/channel/UClmIyFYkr77KhHZdEn4Se8A" target="_blank"><i class="fa fa-youtube"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

<script>
    var d = new Date();
    var y = d.getFullYear();
    
    document.getElementById('yr').innerHTML = y;
</script>

</body>

</html>


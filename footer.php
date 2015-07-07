

<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package darrenpuscas
 */
?>

</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">

    <div class="inner-footer text-content-area">

        <div class="footer-contents row-top-pad">

            <div class="footer-area footer-area1">
                <div class="social-footer">
                    <?php if ( function_exists('cn_social_icon') ) echo cn_social_icon(); ?>
                </div>
                <div class="menu-footer">
                    <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
                </div>


            </div>

            <div class="footer-area footer-area2">
                <div class="about-me">
                    <small>darrenpuscas.com is a space where I discuss the latest trends in design and web communication, lessons learned in running a small web consulting business, relevant social and non-profit issues, and other snippets of web knowledge I have picked up.
                        It's a platform for writing and other forms of communication on issues that matter to me to help you in your organizing, membership building, or sales.</small>
                </div>
                <div class="search-form-footer front-email-optin">
                    <?php get_search_form(); ?>
                </div>




            </div>

        </div>

    </div>

</footer><!-- #colophon -->
</div><!-- #page -->


</body>
</html>

<footer>
    <div class="container-fluid">
        <div class="row copyrightcontainer">
            <div class="copyright clearfix">
                <div class="footer-logo-container">
                    <a href="<?php bloginfo('url'); ?>">
                        <span class="logo-title">JSA <span class="tex-italic">Theme</span></span>  
                    </a>
                </div><!-- .logo-container -->

                <div class="footer-menu">
                    <?php wp_nav_menu(array( 'theme_location' => 'footer_menu' )); ?>
                </div>
            </div><!-- .copyright -->
        </div><!--.row-->
    </div><!--.container-fluid-->
</footer>

<?php wp_footer(); ?>

</body>
</html>
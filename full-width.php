<?php
/*
*    Template Name: Full Width
*/
get_header(); ?>

<?php 
    $hide_title = hide_title_get_meta( 'hide_title_hide_title' );
    if (!empty($hide_title)) {
        echo '<style>.pageheader h1 {display:none !important;}</style>';
    } 
?>
<div class="section-head-wrapper">
    <div class="container-fluid">
            <div class="row pageheader">
              <?php global $post ?>
              <h1><?php echo get_the_title($post->ID); ?></h1>        
            </div><!--.pageheader-->

    </div><!--.container-fluid-->
</div><!--.section-three-wrapper-->

<div class="section-page-wrapper">
    <div class="container-fluid">
        <!-- Start the Loop. -->
        <?php while ( have_posts() ) : the_post(); ?>
            <div class="row pagecontent">
                <div class="col-12">
                    <div class="centered-content">
                        <p><?php the_content(); ?></p>
                    </div>
                </div><!-- .col-12 -->
           </div><!-- .row -->
        <?php endwhile; ?><!-- End of the loop.  -->
    </div><!--.container-fluid-->
</div><!--.section-three-wrapper-->
<?php get_footer(); ?>
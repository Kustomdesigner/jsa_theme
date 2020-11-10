<?php get_header(); ?>

<div class="section-head-wrapper">
    <div class="container-fluid">

            <div class="row pageheader">
              <?php global $post ?>
              <h1><?php echo get_the_title($post->ID); ?></h1>        
            </div><!--.pageheader-->

    </div><!--.container-fluid-->
</div><!--.section-three-wrapper-->

<div class="container-fluid">
   <div class="row blogsingle">
        <!-- Start the Loop. -->
        <?php while ( have_posts() ) : the_post(); ?>
                <div class="col-8">
                    <p><?php the_content(); ?></p>
                </div><!-- .col-8 -->

                <div class="col-4 sidebar-container">
                <?php if ( is_active_sidebar( 'aside-2' ) ) { ?>
                    <div id="sidebar" class="sidebar-page">
                        <?php dynamic_sidebar( 'aside-2' ); ?>
                </div>
                <?php } ?>
                </div><!-- .col-4 -->
        <?php endwhile; ?>
        <!-- End of the loop.  -->
    </div><!--container-fluid-->
</div><!--row blogsingle-->
<?php get_footer(); ?>
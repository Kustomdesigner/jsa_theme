<?php
/*
Template Name: Blog Template
*/
get_header(); ?>

<div class="section-head-wrapper">
    <div class="container-fluid">

            <div class="row pageheader">
              <?php global $post ?>
              <h1><?php echo get_the_title($post->ID); ?></h1>        
            </div><!--.pageheader-->

    </div><!--.container-fluid-->
</div><!--.section-three-wrapper-->

<div class="container-fluid">
<div class="row blogindex">


    <div class="col-8">
        <?php $custom_query = new WP_Query('posts_per_page=10'); 
            while($custom_query->have_posts()) : $custom_query->the_post(); ?>

                <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <?php the_excerpt(); ?>
                </div>

        <?php endwhile; ?>
        <?php wp_reset_postdata(); // reset the query ?>
    </div><!--.col-8-->

    <div class="col-4 sidebar-container">
        <?php if ( is_active_sidebar( 'aside-2' ) ) { ?>
            <div id="sidebar" class="sidebar-page">
                <?php dynamic_sidebar( 'aside-2' ); ?>
            </div>
        <?php } ?>
    </div><!-- .col-4 -->
    
</div><!--.row-->
</div><!--.container-fluid-->
<?php get_footer(); ?>
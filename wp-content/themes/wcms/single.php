<?php get_header(); ?>

<!--
  always have a container and a row,
  around your col classes.
-->
<div class="container">
  <div class="row">

    <!-- 
      sidebar should be full width (12 columns) on xs and sm screens,
      and be next to post on md and lg screens
    -->

    <!-- show left sidebar (if any) -->
    <?php if ( is_active_sidebar( 'left_sidebar_1' ) ) : ?>
      <aside class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
          <div id="primary-sidebar" class="primary-sidebar widget-area">
            <?php dynamic_sidebar( 'left_sidebar_1' ); ?>
          </div><!-- #primary-sidebar -->
      </aside>
   <?php endif; ?>
    <!-- 
      post should be full width (12 columns) on xs and sm screens,
      and leave room for sidebar on md and lg screens
    -->
    <article class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
      <?php

        // do the wordpress loop!
        while (have_posts()) :
          // while we have posts, get them and show them!
          the_post();
      ?>
          <?php if (get_post_format()) : ?>
            <!-- get the post format template file -->
            <?php get_template_part('template-parts/content', get_post_format()); ?>

          <?php else : ?>
            <!-- get the default post format template file -->
            <?php get_template_part('template-parts/content', 'default'); ?>

          <?php endif; ?>

      <?php
        endwhile;
      ?>
    </article>

  </div>
</div>

<?php get_footer(); ?>
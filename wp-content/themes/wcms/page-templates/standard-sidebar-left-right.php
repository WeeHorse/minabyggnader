<?php
  /*
    Template Name: Standard Sidebar Left and Right
  */
?>

<!--
  To show two sidebars we cannot use get_sidebar(); since it
  Only gets the right sidebar (see sidebar.php file)
-->

<?php get_header(); ?>

<!--
  always have a container and a row,
  around your col classes.
-->
<div class="container">
  <div class="row">
    <aside class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
      <!-- show left sidebar (if any) -->
      <?php if ( is_active_sidebar( 'left_sidebar_1' ) ) : ?>
        <div id="primary-sidebar" class="primary-sidebar widget-area">
          <?php dynamic_sidebar( 'left_sidebar_1' ); ?>
        </div><!-- #primary-sidebar -->
      <?php endif; ?>
    </aside>

    <article class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
      <?php

        // do the wordpress loop!
        while (have_posts()) :
          // while we have posts, get them and show them!
          the_post();
      ?>
          <!--
            print the post title,
            wrapped in a link to the post
          -->
          <a href="<?php the_permalink(); ?>">
            <?php the_title('<h1>', '</h1>'); ?>
          </a>
          <!--
            print the post content
          -->
          <?php the_content(); ?>


      <?php
        endwhile;
      ?>
    </article>

    <aside class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
      <!-- show right sidebar (if any) -->
      <?php if ( is_active_sidebar( 'right_sidebar_1' ) ) : ?>
        <div id="primary-sidebar" class="primary-sidebar widget-area">
          <?php dynamic_sidebar( 'right_sidebar_1' ); ?>
        </div><!-- #primary-sidebar -->
      <?php endif; ?>
    </aside>

  </div>
</div>

<?php get_footer(); ?>








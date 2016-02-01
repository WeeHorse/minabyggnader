<?php
  /*
    Template Name: Standard Sidebar Right
  */
?>

<?php get_header(); ?>

<!--
  always have a container and a row,
  around your col classes.
-->
<div class="container">
  <div class="row">

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

    <!-- 
      sidebar should be full width (12 columns) on xs and sm screens,
      and be next to post on md and lg screens
    -->
    <aside class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
      <?php get_sidebar(); ?>
    </aside>

  </div>
</div>

<?php get_footer(); ?>








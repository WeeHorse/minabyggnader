<?php
  /*
    Template Name: Standard No Sidebar
  */
?>

<!-- 
  Template for showing centered page with no sidebar
-->

<?php get_header(); ?>

<!--
  always have a container and a row,
  around your col classes.
-->
<div class="container">
  <div class="row">
    <!-- 
      the col-XX-offset-X class adds empty columns to the left of the element
    -->
    <article class="col-xs-12 col-sm-10 col-md-8 col-lg-8 col-xs-offset-0 col-sm-offset-1 col-md-offset-2 col-lg-offset-2">
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
  </div>
</div>

<?php get_footer(); ?>
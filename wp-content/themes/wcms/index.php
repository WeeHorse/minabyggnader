
<?php get_header(); ?>

<!-- 
  Template for showing "Your latest posts"
-->

<!--
  always have a container and a row,
  around your col classes.
-->
<div class="container">
  <div class="row">
    <?php
      // if we have any posts to show
      if (have_posts()) :
        // here we have content to show

        // do the wordpress loop!
        while (have_posts()) :
          // while we have posts, get them and show them!
          the_post();
        ?>
          <article class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
            <!--
              print the post title,
              wrapped in a link to the post
            -->
            <a href="<?php the_permalink(); ?>">
              <?php the_title('<h3>', '</h3>'); ?>
            </a>
            <!--
              print the post content
            -->
            <?php the_content(); ?>
          </article>
        <?php
        endwhile;
      endif ;
    ?>
  </div>
</div>

<?php get_footer(); ?>

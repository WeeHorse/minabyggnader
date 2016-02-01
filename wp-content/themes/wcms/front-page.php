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
          <!--<article class="col-xs-12 col-sm-12 col-md-3 col-lg-3"><h1>Number 1</h1><p>To the left</p></article>-->

          <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
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
            <?php //echo wp_trim_words(get_the_content(), 50, '<a href="' . the_permalink() . '">(read more)</a>'); ?>
          </article>

          <!--<article class="col-xs-12 col-sm-12 col-md-4 col-lg-3"><h1>Number 3</h1><p>To the right</p></article>-->
        <?php
        endwhile;
      endif ;
    ?>
  </div>
</div>

<?php get_footer();

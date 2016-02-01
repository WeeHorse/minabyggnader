
 <div class="container">

<?php get_header(); ?>

<?php
  // here we have content to show

  // do the wordpress loop!
  while (have_posts()) :
    // while we have posts, get them and show them!
    the_post();
?>
    <div class="panel panel-default">
      <div class="panel-heading">
        <?php the_title('<h3 class="panel-title">', '</h3>'); ?>
      </div>
      <div class="panel-body">
        <?php the_content(); ?>
      </div>
    </div>

    <div class="well">This is my well</div>

<?php
  endwhile;
?>


<?php get_footer(); ?>

</div>
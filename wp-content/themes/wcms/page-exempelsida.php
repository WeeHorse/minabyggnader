
 <div class="container">

<?php get_header(); ?>
<!-- show left sidebar (if any) -->
  <?php if ( is_active_sidebar( 'left_sidebar_1' ) ) : ?>
    <aside class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
        <div id="primary-sidebar" class="primary-sidebar widget-area">
          <?php dynamic_sidebar( 'left_sidebar_1' ); ?>
        </div><!-- #primary-sidebar -->
    </aside>
 <?php endif; ?>

<article class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
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
          <?php echo wp_trim_words(get_the_content(), 50, '<a href="' . the_permalink() . '">(read more)</a>'); ?>
        </div>
      </div>

      <div class="well">This is my well</div>

  <?php
    endwhile;
  ?>
</article>

<!-- show right sidebar (if any) -->
<?php if ( is_active_sidebar( 'right_sidebar_1' ) ) : ?>
  <aside class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
    
      <div id="primary-sidebar" class="primary-sidebar widget-area">
        <?php dynamic_sidebar( 'right_sidebar_1' ); ?>
      </div><!-- #primary-sidebar -->
  </aside>
<?php endif; ?>


<?php get_footer(); ?>

</div>
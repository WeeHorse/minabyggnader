
<!-- show sidebar (if any) -->
<?php if ( is_active_sidebar( 'right_sidebar_1' ) ) : ?>
  <div id="primary-sidebar" class="primary-sidebar widget-area">
    <?php dynamic_sidebar( 'right_sidebar_1' ); ?>
    <?php my_sidebar_image(); ?>
  </div><!-- #primary-sidebar -->
<?php endif; ?>
<header>
  <?php if ( has_nav_menu( 'main_menu' ) ) : ?>
    <nav id="site-navigation" class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/wcms">WCMS</a>
        </div>
        <?php
          wp_nav_menu(array(
            'menu' => 'main_menu',
            'theme_location' => 'main_menu',
            'depth' => 2,
            'container' => 'div',
            'container_class' => 'collapse navbar-collapse',
            'container_id' => 'bs-example-navbar-collapse-1',
            'menu_class' => 'nav navbar-nav',
            'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
            'walker' => new wp_bootstrap_navwalker(),
          ));
        ?>
      </div>
    </nav><!-- .main-navigation -->
  <?php endif; ?>
  <!--<br>
  <button onclick="history.back();"><< Back-shack-a-lack</button>-->

</header>
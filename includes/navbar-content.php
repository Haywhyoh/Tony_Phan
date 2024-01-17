<div class="vg-page page-home" id="home">
  <!-- Navbar -->
  <div class="navbar navbar-expand-lg navbar-dark sticky" data-offset="500">
    <div class="container">
      <a href="" class="navbar-brand">
      <img src="<?php echo esc_url(get_theme_mod('logo')) ?>" class="" alt="Tony Phan Logo" style="width:30px">

      </a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#main-navbar" aria-expanded="true">
        <span class="ti-menu"></span>
      </button>
      <div class="collapse navbar-collapse" id="main-navbar">

      <?php
          function custom_primary_menu_fallback() {
            ?>
             <div class="collapse navbar-collapse" id="main-navbar">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a href="#home" class="nav-link" data-animate="scrolling">Home</a>
                </li>
                <li class="nav-item">
                  <a href="#about" class="nav-link" data-animate="scrolling">About</a>
                </li>
                <li class="nav-item">
                    <a href="#resume" class="nav-link" data-animate="scrolling">Resume</a>
                  </li>
                <li class="nav-item">
                  <a href="#portfolio" class="nav-link" data-animate="scrolling">Portfolio</a>
                </li>
                <li class="nav-item">
                  <a href="#blog" class="nav-link" data-animate="scrolling">Blog</a>
                </li>
                <li class="nav-item">
                  <a href="#contact" class="nav-link" data-animate="scrolling">Contact</a>
                </li>
              </ul>
              <ul class="nav ml-auto">
                <li class="nav-item">
                  <button class="btn btn-fab btn-theme no-shadow">Let's Talk</button>
                </li>
              </ul>
            </div>
           <?php
          }
      ?>

      <?php
      wp_nav_menu(
        array(
          'theme_location' => 'top-menu',
          'container' => '<div>',
          'conatainer_class' => 'collapse navbar-collapse',
          'conatainer_id' => 'main-navbar',
          'menu_class' => 'navbar-nav ml-auto',
          'add_li_class' => 'nav-item',
          'add_a_class' => 'nav-link',
          'fallback_cb' => 'custom_primary_menu_fallback',
        )
      )
      ?>
        <ul class="nav ml-auto">
                <li class="nav-item">
                  <button class="btn btn-fab btn-theme no-shadow"> <a href="" class="link"><i class="ti-facebook"></i></a>
                  <button class="btn btn-fab btn-theme no-shadow"> <a href="" class="link"><i class="ti-linkedin"></i></a>

               </button>
                </li>
              </ul>
      </div>
      <!-- <div class="collapse navbar-collapse" id="main-navbar">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a href="#home" class="nav-link" data-animate="scrolling">Home</a>
                </li>
                <li class="nav-item">
                  <a href="#about" class="nav-link" data-animate="scrolling">About</a>
                </li>
                <li class="nav-item">
                    <a href="#resume" class="nav-link" data-animate="scrolling">Resume</a>
                  </li>
                <li class="nav-item">
                  <a href="#portfolio" class="nav-link" data-animate="scrolling">Portfolio</a>
                </li>
                <li class="nav-item">
                  <a href="#blog" class="nav-link" data-animate="scrolling">Blog</a>
                </li>
                <li class="nav-item">
                  <a href="#contact" class="nav-link" data-animate="scrolling">Contact</a>
                </li>
              </ul>
              <ul class="nav ml-auto">
                <li class="nav-item">
                  <button class="btn btn-fab btn-theme no-shadow">En</button>
                </li>
              </ul>
            </div> -->
    </div>
  </div> <!-- End Navbar -->


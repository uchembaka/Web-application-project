<?php
/*using site root folder in header, so all links in hearder
still works from any page they are required*/
  $siteroot = '/Website-code';

  /*the non_admin_session is used to control display of
  dasboard button on the main site if a user is logged in.
  I am not exactly sure if this is the right approach or if it works propely, given
  limited time this is the best I could come up with.
  In the event there is an error when running the code (that wasn't detected during our test) please comment
  line 12 - 13 and  line 73 - 75. Thank you*/
  include ("../app/src/non_admin_session.php");
  $isLoggedIn = !empty($_SESSION['login_user']);

 ?>
<header class="site_header outer_container bg-white">
  <div class="inner_container header mx-auto">
      <!--logo-->
      <div class="col-12 col-md-2 col-lg-2 align-self-center">
        <!--logo for desktop: this logo is display:hidden on mobile and visible on desktop-->
        <h1 class="logo_desk text-center "><a href="index.php"><img class="logo_desk" src="<?php echo $siteroot; ?>/images/logo_useable.png" alt="friends of the earth"/></a></h1>
        <!--logo for mobile: this logo is display:hidden on desktop and visible on mobile-->
        <h1 class="logo_mob text-center "><a href="index.php"><img class="logo_mob" src="<?php echo $siteroot; ?>/images/logo_mob.png" alt="friends of the earth"/></a></h1>
      </div><!--logo-->

      <!--motto -->
      <div class="col-12 col-md-4 col-lg-3 align-self-center">
        <h1 class="text-center text-dark desc pr-lg-4 pl-md-3">A sustainable Ireland in a just world</h1>
      </div><!--motto -->

      <div class="col-12 col-md-6 col-lg-7 d-flex flex-column align-self-center">
        <div class="d-flex flex-row justify-content-between ">
          <div class="col-md-8 pl-0">
            <!--primary navigation-->
            <nav class="navbar navbar-expand-md navbar-light ">
              <!--hamburger icon and text -->
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
                <span>Menu</span>
              </button>
              <!--collapse navigation-->
              <div  class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class=" navbar-nav">
                  <li class="nav-item pr-lg-4">
                    <a class="nav-link text-dark text-left home" href="<?php echo $siteroot; ?>/public/index.php">Home</a>
                  </li>
                  <li class="nav-item px-lg-4">
                    <a class="nav-link text-dark text-left text-nowrap about dropdown-toggle" data-toggle="dropdown" href="<?php echo $siteroot; ?>/public/about.php">About</a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="<?php echo $siteroot; ?>/public/about.php">About us</a>
                      <a class="dropdown-item" href="<?php echo $siteroot; ?>/public/takeaction.php">Take Action</a>
                    </div>
                  </li>
                  <li class="nav-item px-lg-4">
                    <a class="nav-link text-dark text-left blog" href="<?php echo $siteroot; ?>/public/blog.php">Blog</a>
                  </li>
                  <li class="nav-item px-lg-4">
                    <a class="nav-link text-dark text-left news" href="<?php echo $siteroot; ?>/public/news.php">News</a>
                  </li>
                </ul><!--collapse navigation ul end-->
              </div><!--collapse navigation end-->
            </nav><!--primary navigation nav end-->
          </div><!--primary navigation div end-->

          <!--donation-->
          <div class=" mt-2 pl-1">
            <a  class=" btn btn-danger donate" href="<?php echo $siteroot; ?>/public/donate.php">Donate</a>
          </div><!--donation end-->
        </div>
        <!--search bar-->
        <div class="search">
          <div class="input-group mt-1 mb-1">
		  <!-- displays the dashboard button only if an admin is logged in -->
            <?php if ($isLoggedIn) { ?>
              <a class="btn btn-warning mr-1" href="<?php echo $siteroot; ?>/admin/admin.php">Dashboard</a>
            <?php } ?>
            <input type="text" class="form-control" placeholder="Search..">
            <div class="input-group-append">
              <button class="btn btnGo" type="submit">Search</button>
            </div>
          </div>
        </div><!--search bar div end-->
      </div><!-- third row div: navigation, donate and search end-->
  </div>
  <!--secondary header. This header only displays on desktop and disappears on scroll -->
  <div class="outer_container full_extra_header">
  <div class="extra_header  inner_container mx-auto">
    <nav class="navbar navbar-expand-sm navbar-dark d-flex">
      <!-- subscribe form-->
      <form class="subscribe form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="email" placeholder="Enter email" aria-label="Search">
        <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Subscribe</button>
      </form>
      <!-- social network and contact icons -->
      <ul class="navbar-nav d-flex">
        <li class="nav-item"><a href="https://www.facebook.com/foeireland/" target="_blank" class="fa fa-facebook fa-lg nav-link"></a></li>
        <li class="nav-item"><a href="https://twitter.com/foeireland" target="_blank" class="fa fa-twitter fa-lg nav-link"></a></li>
        <li class="nav-item"><a href="https://www.youtube.com/user/friendsoftheearth" target="_blank" class="fa fa-youtube-play fa-lg nav-link"></a></li>
        <li class="nav-item"><a class="nav-link fa fa-envelope-o fa-lg" href="mailto:info@foe.ie"></a></li>
        <li class="nav-item"><a class="nav-link fa fa-phone pl-0 fa-lg" href="tel:+35316394652"></a></li>
        <!--<li class="nav-item"><a class="contact nav-link" href="#">contact us</a></li>-->
      </ul>
    </nav>
  </div>
</div><!--secondary header div end-->
</header>

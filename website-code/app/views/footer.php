<?php
  $siteroot = '/Website-code';
 ?>
<footer class="footer_container outer_container">
  <div class="row footer inner_container mx-auto">
    <div class="col-md-3">
      <!--contact  -->
      <section class="contact">
        <h2>Contact</h2>
        <nav>
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link fa fa-envelope-o fa-lg pl-0" href="mailto:info@foe.ie"> info@foe.ie</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fa fa-phone fa-lg pl-0" href="tel:+35316394652">+353-1-6394652</a>
            </li>
          </ul>
        </nav>
      </section>
      <!--socialMedia_icon -->
      <section class="socialMedia_icon">
        <h2 class="invisible">this is hidden</h2><!-- this was added to remove html validate warning for not using any h element inside section-->
        <div class="d-inline-flex align-items-center">
          <a href="https://www.facebook.com/foeireland/" class="fa fa-facebook fa-lg mt-3 mr-5"></a>
          <a href="https://twitter.com/foeireland" class="fa fa-twitter fa-lg mt-3 mr-5"></a>
          <a href="https://www.youtube.com/user/friendsoftheearth" class="fa fa-youtube-play fa-lg mt-3"></a>
        </div>
      </section>
      <!--subscribe  -->
      <section class="subscribe">
        <h2 class="invisible">hidden</h2><!-- this was added to remove html validate warning for not using any h element inside section-->
        <form class="form-inline ">
          <input class="form-control mt-3 mb-1" type="email" placeholder="Enter email" aria-label="Search">
          <button class="btn btn-outline-light " type="submit">Subscribe</button>
        </form>
      </section>
    </div>
    <div class="col-md-3">
      <section class="Address">
        <h2>Address</h2>
        <address class="">
          <p>Friends of the Earth<br/>9 Upper Mount Street<br>Dublin 2<br/>Ireland</p>
        </address>
      </section>
    </div>
    <div class="col-md-3">
      <section class="our_friends">
        <h2>Our Friends</h2>
        <nav>
          <ul class="pl-0">
            <li>
              <img src="<?php echo $siteroot; ?>/images/logo_dot.png" alt="logo_dot">
              <a href="https://foe.scot" target="_blank">FOE | Scotland </a>
            </li>
            <li>
              <img src="<?php echo $siteroot; ?>/images/logo_dot.png" alt="logo_dot">
              <a href="https://friendsoftheearth.uk" target="_blank">FOE | UK</a>
            </li>
            <li>
              <img src="<?php echo $siteroot; ?>/images/logo_dot.png" alt="logo_dot">
              <a href="https://www.foei.org" target="_blank">FOE | International</a>
            </li>
            <li>
              <img src="<?php echo $siteroot; ?>/images/logo_dot.png" alt="logo_dot">
              <a href="http://www.foeeurope.org" target="_blank">FOE | Europe</a>
            </li>
          </ul>
        </nav>
      </section>
    </div>
    <div class="col-md-3 d-inline-flex align-items-center justify-content-center">
      <a  class=" btn btn-danger donate" href="donate.php">Donate</a>
    </div>
    <div class="w-100 text-center">
      <p class="mt-4 ml-2 mr-2">Copyright © 2018 • Friends of the Earth Ireland</p>
    </div>

  </div>

</footer>

<!--add connection to database-->
<?php
require("../config/connect.php");
 ?>

<!--specify to web browser that html version 5 used-->
<!DOCTYPE html>
<!-- contents language set to English -->
<html lang="en">
<head>
  <!-- standard UTF-8 character encoding specified-->
  <meta charset="UTF-8" />
  <!--Mobile display-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--page title. Can bee seen on the browser tab-->
  <title>About</title>
  <!--links to bootstrap reboot (reset.css) css files-->
  <link rel="stylesheet" href="../css/bootstrap-reboot.css" />
  <!--link to bootstrap css -->
  <link rel="stylesheet" href="../css/bootstrap.min.css" />
  <!--link to local css file-->
  <link rel="stylesheet" href="../css/style.css" />
  <!--google font-->
  <!--note the pipe in the url cause the html validator to flag href-->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway:300,400" rel="stylesheet">
  <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!--Jquery scripts-->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <!--Bootstrap Script-->
  <script src="../scripts/bootstrap.min.js"></script>
  <!--script used in header-->
  <script src="../scripts/header.js"></script>
  <!--popper scripts-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
</head>
<body id="about">
  <!--add header -->
  <?php require("../app/views/header.php") ?>
  <main class="main header_margin">
    <div class="inner_container mx-auto p-3 pb-0">
      <!--fisrt row -->
      <article class="">
          <div class="row">
              <div class="col-md-7">
                  <div class="embed-responsive embed-responsive-16by9">
                      <iframe class="embed-responsive-item" src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Ffoeireland%2Fvideos%2F10154602770020119%2F&show_text=0&width=560" width="560" height="315" ></iframe>
                  </div>
              </div>
              <div class="col-md-5 align-self-center">
                  <h2 class="text-center">About Friends of the Earth</h2>
                  <p class="text-justify">Friends of the Earth campaigns for environmental justice and sustainability.
                      We believe in sustainable development - meeting the needs of the current generation without compromising the ability of future generations to meet their needs.
                      And we believe in fair shares - too often the poorest communties in the world are denied access to the natural resources essential to life, such as fresh water, while rich countries consume and pollute recklessly.
                  </p>
              </div>
          </div>
      </article>
      <!--second row:introduce -->
      <section class="introduce p-3">
          <h2>FOE Ireland</h2>
          <p class="text-justify">In Ireland, Friends of the Earth was launched in October 2004. We promote education and action for environmental sustainability and environmental justice.
              We focus on Ireland's response to the big environmental challenges of our time such as climate change and energy, the waste crisis and the spread of GM crops and food.
          </p>
          <div id="introduce_collapse" class="collapse">
              <p  class="text-justify">
                  Friends of the Earth Ireland is a company limited by guarantee (a not-for-profit company) sustained by donations, subcriptions and grants.
                  We are registered with the Companies Office in Dublin (No. 383678) and file annual returns and produce audited accounts.
              </p>
          </div>
          <a href="#introduce_collapse" class="btn btn-warning" data-toggle="collapse">Click to expand</a>
      </section>
      <!--third row:our mission -->
      <section class="ourMission p-3">
          <h2>Our Mission</h2>
          <p>To shift the balance of Irish policy and practice in favour of environmental justice and sustainability at home and internationally.</p>
          <div id="demo" class="collapse">
              <h3>Goal</h3>
              <ul>
                  <li>To develop Friends of the Earth's capacity, credibility and legitimacy.</li>
                  <li>To position Friends of the Earth as a leading environmental NGO in Ireland.</li>
                  <li>To win endorsement for Friends of the Earth's environmental justice and sustainability analysis amongst key decisions makers, the media and the public in Ireland, at EU level and internationally.</li>
              </ul>
          </div>
          <a href="#demo" class="btn btn-warning" data-toggle="collapse">Click to expand</a>
      </section>
    </div>
    <!--add footer-->
  <?php require("../app/views/footer.php") ?>
  </main>
</body>
</html>

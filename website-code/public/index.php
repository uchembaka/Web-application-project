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
  <title>Home</title>
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
<body id="home">
  <!--add header-->
  <?php require("../app/views/header.php") ?>
  <main class="main">
    <section class="carousel_outer c_pt_pb">
      <div class="carousel_main mx-auto">
        <div id="indicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators d-none d-md-flex">
            <li data-target="indicators" data-slide-to="0" class="active"></li>
            <li data-target="indicators" data-slide-to="1"></li>
            <li data-target="indicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <?php
            /*Only one carousel item is allowed to have the class active.
            The post recent item on the take_action table was queried separatly
            and assigned the class active*/
            $query_a = "SELECT * FROM take_action ORDER BY ID DESC LIMIT 1";
            $result_a = mysqli_query($connection, $query_a);
            if(!$result_a){
              echo "There was a problem querying the database";
            }else{
              if($row_a = mysqli_fetch_array($result_a)){
                extract($row_a);
                ?>
            <div class="carousel-item active">
              <?php echo "<img class='d-block w-100' src=\"../images/$row_a[thumbnail]\" alt=\"$row_a[alt]\"/>"; ?>
              <div class="carousel-caption">
                <h3><a href="takeaction.php"><?php echo $row_a["title"]; ?></a></h3>
                <p class="d-none d-md-block"><?php echo $row_a["intro"]; ?></p>
              </div>
            </div><?php } ?>
          <?php } ?>
            <?php
            $query = "SELECT * FROM take_action ORDER BY ID DESC LIMIT 1, 2";//offset the first item which has been added already above
            $result = mysqli_query($connection, $query);
            if(!$result){
              echo "There was a problem querying the database";
            }else{
              while($row = mysqli_fetch_array($result)){
                extract($row);
                ?>
            <div class="carousel-item">
              <?php echo "<img class='d-block w-100' src=\"../images/$row[thumbnail]\" alt=\"$row[alt]\"/>"; ?>
              <div class="carousel-caption">
                <h3><a href="takeaction.php"><?php echo $row["title"]; ?></a></h3>
                <p class="d-none d-md-block"><?php echo $row["intro"]; ?></p>
              </div>
            </div> <?php } ?>
          <?php } ?>
        </div><!--carousel inner end-->
          <a class="carousel-control-prev" href="#indicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#indicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div><!-- carousel main container div end-->
  </section><!--carousel section end-->
  <!--what we are working on section -->
    <section class="banner">
      <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h2 class="text-center">What are we working on?</h2>
          <p class="lead text-center">Dublin FoE's current campaign is aimed at supermarkets.
            We want supermarkets to reduce the amount of plastic packaging and whatever packaging they’re insisting on should be easily recyclable or compostable.
          </p>
          <div id="introduce_collapse" class="collapse">
            <p class="text-justify font-weight-light">Dublin Friends of the Earth are a volunteer activist group who meet monthly
              to develop and implement campaigns on the most pressing environmental issues of our time.
            </p>
              <p  class="text-justify font-weight-light">
                We usually meet on the last Tuesday of every month, at 7pm in the Friends of the Earth office (9 Upper Mount Street).
                However this can sometimes change, so please email dublin@foe.ie to RSVP and be kept notified of any changes
              </p>
          </div>
          <div class="text-center">
            <a href="#introduce_collapse" class="btn btn-warning" data-toggle="collapse">Dublin FOE</a>
            <a class="btn btn-warning" href="takeaction.php">Take action</a>
          </div>
        </div>
      </div> <!--jumbotron-->

    </section><!-- banner section end-->
    <!-- second section  -->
    <section class="second_section pb-5">
      <div class="sections_holder inner_container mx-auto d-flex align-items-center">
        <div class="second_section_child blog col-12 col-md-4 p-2">
          <img class="d-block mx-auto" src="../images/icons8-blog-100.png" alt="blog">
          <h2>Blog</h2>
          <p>Read the latest thinking from the Friends of the Earth Ireland team</p>
          <a class="btn btn-lg btn-outline-dark" href="../public/blog.php" role="button">Read more</a>
        </div>
        <div class="second_section_child news col-12 col-md-4 p-2">
          <img class="d-block mx-auto" src="../images/icons8-google-news-100.png" alt="news">
          <h2>News</h2>
          <p >Keep up with our recent stories</p>
          <a class="btn  btn-lg btn-outline-dark" href="../public/news.php" role="button">Learn more</a>
        </div>
        <div class="second_section_child about col-12 col-md-4 p-2">
          <img class="d-block mx-auto" src="../images/icons8-europe-100.png" alt="earth">
          <h2 >About Friend Of Earth</h2>
          <p >Friends of the Earth campaigns for environmental justice and sustainability</p>
          <a class="btn btn-lg btn-outline-dark" href="../public/about.php" role="button">Get to know</a>
        </div>
      </div>
    </section>

  </main>
  <!--add footer -->
  <?php require("../app/views/footer.php"); ?>
</body>
</html>

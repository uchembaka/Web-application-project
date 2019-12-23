<?php
require ("../app/src/session.php");
$pTitle = "Dashboard";
?>

<!--specify to web browser that html version 5 used-->
<!DOCTYPE html>
<!-- contents language set to English -->
<html lang="en">
<?php require("includes/head.php") ?>
<body>
  <?php require("includes/admin_header.php") ?>
  <main class="main">
    <div class="admin_main inner_container d-flex flex-column mx-auto">
      <div class="d-flex flex-column p-3 container">
	  <!-- donation section -->
        <section class="stat p-2">
          <h2>Donation Statistics</h2>
          <div class="row">
            <div class="col-12 col-md-3 d-flex flex-column card-columns">
              <div class="card text-center">
                <div class="card-body">
                  <h5 class="card-title">126</h5>
                  <p class="card-text">Total number of donations made this month</p>
                </div>
              </div>

              <div class="card text-center">
                <div class="card-body">
                  <h5 class="card-title">12356</h5>
                  <p class="card-text">Total amount of donations this month</p>
                </div>
              </div>
            </div>

            <div class="col-12 col-md-3 d-flex flex-column card-columns">
              <div class="card text-center">
                <div class="card-body">
                  <h5 class="card-title">25634</h5>
                  <p class="card-text">Overall total number of donations made</p>
                </div>
              </div>

              <div class="card text-center">
                <div class="card-body">
                  <h5 class="card-title">12,123,456</h5>
                  <p class="card-text">overall total amount of donations</p>
                </div>
              </div>
            </div>

            <div class="col-12 col-md-6">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Donations Charts</h5>
                  <p class="card-text">Some chart will appear here, with small details. To see complete chart details click below</p>
                  <a href="#" class="btn btn-warning disabled">See more charts here</a>
                </div>
              </div>
            </div>
          </div>
          <a class="btn btn-warning m-2" href="mod-donation.php">Modify Donation Records</a>
        </section><!-- end of donation -->
		
		<!-- Take Action statistics -->
        <section class="stat p-2">
          <h2>Take Action Statistics</h2>
          <div class="row">
            <div class="col-12 col-md-3 d-flex flex-column card-columns">
              <div class="card text-center">
                <div class="card-body">
                  <h5 class="card-title">4</h5>
                  <p class="card-text">Total actions taken this month (includes current campaign)</p>
                </div>
              </div>
            </div>

            <div class="col-12 col-md-3 d-flex flex-column card-columns">
              <div class="card text-center">
                <div class="card-body">
                  <h5 class="card-title">10</h5>
                  <p class="card-text">Overall actions taken by friends of the earth Ireland</p>
                </div>
              </div>
            </div>


          <div class="col-12 col-md-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Take action analysis</h5>
                <p class="card-text">Some chart will appear here, with small details. To see complete chart details click below</p>
                <a href="#" class="btn btn-warning disabled">See more stats here</a>
              </div>
            </div>
          </div>
        </div>
        <div class="d-flex flex-column flex-md-row ">
          <a  href="addtakeaction.php" class="btn btn-warning m-2">Add Take action post</a>
          <a  href="deltakeaction.php" class="btn btn-warning m-2">Modify take action posts</a>
        </div>
      </section><!--end of take action stat -->
	  
	  <!-- Blog/News statistics -->
      <section class="stat p-2">
        <h2>Blog/News Statistics</h2>
        <div class="row">
          <div class="col-12 col-md-3 d-flex flex-column card-columns">
            <div class="card text-center">
              <div class="card-body">
                <h5 class="card-title">7</h5>
                <p class="card-text">Total number of blog posts this month (php show current month)</p>
              </div>
            </div>

            <div class="card text-center">
              <div class="card-body">
                <h5 class="card-title">56</h5>
                <p class="card-text">Overall total number of blog post</p>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-3 d-flex flex-column card-columns">
            <div class="card text-center">
              <div class="card-body">
                <h5 class="card-title">10</h5>
                <p class="card-text">Total number of news posts this month (php show current month)</p>
              </div>
            </div>

            <div class="card text-center">
              <div class="card-body">
                <h5 class="card-title">152</h5>
                <p class="card-text">overall number of news posts</p>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-6 d-flex flex-column card-columns">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Page views analysis: Blog</h5>
                <p class="card-text">Some chart will appear here, with small details. To see complete chart details click below</p>
                <a href="#" class="btn btn-warning disabled">See more charts here</a>
              </div>
            </div>
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Page views analysis: News</h5>
                <p class="card-text">Some chart will appear here, with small details. To see complete chart details click below</p>
                <a href="#" class="btn btn-warning disabled">See more charts here</a>
              </div>
            </div>
          </div>
        </div>
        <div class="d-flex flex-column flex-md-row">
          <a href="addblog.php" class="btn btn-warning m-2">Add blog post</a>
          <a  href="delblog.php" class="btn btn-warning m-2">Modify blog posts</a>
          <a href="addnews.php" class="btn btn-warning m-2">Add news post</a>
          <a  href="delnews.php" class="btn btn-warning m-2">Modify news posts</a>
        </div>
      </section><!-- end of Blog/News statistics -->
	 </div><!-- container div end -->
    </div><!-- admin_main div end-->
  </main>
  <?php require("includes/admin_footer.php") ?>
</body>
</html>

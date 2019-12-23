
<?php
$siteroot = '/Website-code';
//php connection to database
require("../config/connect.php");

require("../app/src/db_table.php"); //add db_table
$page = $connection->real_escape_string($_GET['page']);//used in aside
//page name and post Id gotten from url
$q = get_table($connection->real_escape_string($_GET['page']), $connection->real_escape_string($_GET['id']));
$result = mysqli_query($connection, $q);

if(!$result){
  echo "There was a problem querying the database";
}else{
	//on the first project project1 the variable name used is $row
	//this was changed here to avoid conflict with the same variable in the session
  $art = mysqli_fetch_array($result);
}

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
  <title><?php echo $art['title']; ?></title>
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
<body>
  <!--add header-->
  <?php require("../app/views/header.php") ?>
  <main class="article_main pb-3">
    <article class="article inner_container mx-auto p-4">
      <h2 class="text-center pb-4"><?php echo $art['title']; ?></h2>

        <?php echo $art['post']; ?>

      <div class="article_info mt-5">
        <!-- display only date portion of timestamp-->
        <p>Posted on <i><?php echo substr($art['date'], 0,10); ?></i><p>
      </div>
    </article>
    <!-- post comment section-->
    <section class="post_comments inner_container mx-auto">
      <h2 class="pl-5 pt-2 pb-0">Leave a comment</h2>
      <form class="m-5" action="index.html" method="post">
        <div class="form-row">
          <div class="form-group col-12 col-md-5">
            <label for="name">Name: </label>
            <input class="form-control" type="text" name="name" value="" id="name" placeholder="name">
          </div>
          <div class="form-group col-12 col-md-7">
            <label for="email">Email Address: </label>
            <input class="form-control" type="email" name="email" value="" id="email" placeholder="email address">
          </div>
          <div class="form-group col-12 col-md-8">
            <label for="comment">Add comment</label>
            <textarea class="form-control" name="comment" rows="8" id="comment" cols="80"></textarea>
          </div>
        </div>
        <button type="button" name="button" class="btn readmore">Submit</button>
      </form>
    </section><!--end of post comments sections-->

    <!--comment section-->

    <!--<section class="comments">
      this part to hold list of comments
    </section> --><!--end of comments sections-->
  </main>
  <div class="outer_container blog_cat_container">
    <div class="inner_container mx-auto">
      <!--Aside: related post or lastest post
      this part is left for further developement-->
      <aside class="related_articles">
        <h2 class='pt-2 text-center'>Latest <?php echo ucwords($page); ?></h2>
        <div class="card-deck p-2">

          <div class="card">
            <img class="card-img-top" src="../images/default-image.jpg" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">This part is left for further developement. The title of either a related post on latest post would be here</p>
            </div>
            <div class="card-footer">
               <small class="text-muted">posted on "date"</small>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top" src="../images/default-image.jpg" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">This part is left for further developement. The title of either a related post on latest post would be here</p>
            </div>
            <div class="card-footer">
               <small class="text-muted">posted on "date"</small>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top" src="../images/default-image.jpg" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">This part is left for further developement.</p>
            </div>
            <div class="card-footer">
               <small class="text-muted">posted on "date"</small>
            </div>
          </div>
        </div>
      </aside>
    </div>
  </div>
  <!--add footer-->
  <?php require("../app/views/footer.php");?>
</body>

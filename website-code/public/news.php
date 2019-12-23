<!--php connection to database-->
<?php
require("../config/connect.php");
$page = 'news';
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
  <title>News</title>
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
<body id="news">
  <!--add header-->
  <?php require("../app/views/header.php") ?>
  <main class="main">
    <div class="news_cat outer_container p-3 header_margin">
      <?php
      if (isset($_GET['page_no']) && $_GET['page_no']!="") {
          $page_no = $_GET['page_no']; //get current page number and assign to $page_no
      }else{
          $page_no = 1; // if page_no is not set then assign 1.
      }

      $total_records_per_page = 6; //maximum number of post on each page
      $offset = ($page_no-1) * $total_records_per_page;
      $previous_page = $page_no - 1;
      $next_page = $page_no + 1;
      $adjacents = "2"; //used in pagination design

      //the mysqli_num_rows function doesn't work with limit and offset, hence my reason
      //for not using $result as the argument for mysqli_num_rows
      $resultCount = mysqli_num_rows(mysqli_query($connection,"SELECT * FROM news"));
      $total_no_of_pages = ceil($resultCount / $total_records_per_page);
      $second_last = $total_no_of_pages - 1; // total pages minus 1


      $onRow = 0;//track number of post on a row
      //Order by ID DESC was used because the latest news would usually have the highest
      //id since it's the last record entered
      $query_f = "SELECT * FROM news ORDER BY ID DESC LIMIT 1"; //used for the latest news only
      $query = "SELECT * FROM news ORDER BY ID DESC LIMIT $offset, $total_records_per_page";
      $result_f = mysqli_query($connection, $query_f);// used for latest news
      $result = mysqli_query($connection, $query);

      // this is used for the latest news
        if(!$result_f){
          echo "There was a problem querying the database";
        }else{
          if($row_f = mysqli_fetch_array($result_f)){
            extract($row_f);
            ?>
            <div class="inner_container mx-auto d-flex pr-4 pl-4">
                <article class="featured  br row">
                  <figure class="col-12 col-md-6 p-0 mb-0">
                    <?php echo "<img class='img-fluid p-0' src=\"../images/$row_f[thumbnail]\" alt=\"$row_f[alt]\"/>"; ?>
                  </figure>
                  <section class="col-12 col-md-6 align-self-center">
                      <h2 class="text-center pt-0"><strong>LATEST NEWS</strong></h2>
                    <h3 class="text-center"><a class="read" href="<?php echo "singlepost.php?page=$page&id=$row_f[ID]"; ?>"><?php echo $row_f["title"]; ?></a></h3>
                    <p class="text-justify"><?php echo strip_tags(substr($row_f["post"], 0, 300)); ?>... </p>
                    <a class="readmore btn mb-1" href="<?php echo "singlepost.php?page=$page&id=$row_f[ID]"; ?>">Read more</a>
                  </section>
                </article>
            </div>
        <?php  }
        }

      if(!$result){
        echo "There was a problem querying the database";
      }else{
        while($row = mysqli_fetch_array($result)){
          extract($row);
          //for layout
          if($onRow == 3 || $onRow == 0){
            if($onRow == 3) {
              echo "</div>";
              $onRow = 1;
            }else{
              $onRow++;
            }
            echo "<div class=\"row inner_container mx-auto p-0 d-flex\">";
            echo "<article class=\"col-12 col-md-4 p-2 \">";
            echo "<div class=\"post br m-0 h-100\">";
            echo "<img class='img-fluid p-0' src=\"../images/$row[thumbnail]\" alt=\"$row[alt]\"/>";
            echo "<div class=\"p-2\">";
            echo "<h3 class='text-center'><a class=\"read\" href=\"singlepost.php?page=$page&id=$row[ID]\">$row[title]</a></h3>";
            echo "<p class='text-justify'>"; echo strip_tags(substr($row['post'], 0, 200)); echo".... </p>";
            echo "<a class=\"readmore btn\" href=\"singlepost.php?page=$page&id=$row[ID]\">Read more</a>";
            echo "</div></div></article>";
        }else{
          $onRow++;
          echo "<article class=\"col-12 col-md-4 p-2 \">";
          echo "<div class=\"post br m-0 h-100\">";
          echo "<img class='img-fluid p-0' src=\"../images/$row[thumbnail]\" alt=\"$row[alt]\"/>";
          echo "<div class=\"p-2\">";
          echo "<h3 class='text-center'><a class=\"read\" href=\"singlepost.php?page=$page&id=$row[ID]\">$row[title]</a></h3>";
          echo "<p class='text-justify'>"; echo strip_tags(substr($row['post'], 0, 200)); echo".... </p>";
          echo "<a class=\"readmore btn\" href=\"singlepost.php?page=$page&id=$row[ID]\">Read more</a>";
          echo "</div></div></article>";
        }
      }
      /*
      When the last set of post isn't up to three, this doesn't allow
      the closing div tag above (line 79) to echo, hence the reason for this if block
      */
      if($resultCount % 3 != 0){//total number of rows won't will cause last column to be either 1 or 2
        echo"</div>";
      }
    }?>
    </div>
    <!--add pagination-->
    <?php require('../app/views/pagination.php');?>
  </main>
  <!--add header -->
  <?php require("../app/views/footer.php"); ?>
</body>
</html>

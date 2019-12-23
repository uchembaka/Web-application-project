<!--php connection to database-->
<?php
require("../config/connect.php");
$page = 'blog';

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
  <title>Blog</title>
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
<body id="blog">
  <!--add header -->
  <?php require("../app/views/header.php") ?>
  <main class="main  blog_cat_container outer_container">
    <div class="inner_container mx-auto p-2 header_margin">
      <div class="d-flex flex-column">
      <?php
      if (isset($_GET['page_no']) && $_GET['page_no']!="") {
          $page_no = $_GET['page_no']; //get current page number and assign to $page_no
      }else{
              $page_no = 1;// if page_no is not set then assign 1.
      }

      $total_records_per_page = 6; //maximum number of post on each page
      $offset = ($page_no-1) * $total_records_per_page;
      $previous_page = $page_no - 1;
      $next_page = $page_no + 1;
      $adjacents = "2";//used in pagination design

      //the mysqli_num_rows function doesn't work with limit and offset, hence my reason
      //for not using $result as the argument for mysqli_num_rows
      $resultCount = mysqli_num_rows(mysqli_query($connection,"SELECT * FROM blog"));
      $total_no_of_pages = ceil($resultCount / $total_records_per_page);
      $second_last = $total_no_of_pages - 1; // total pages minus 1

      $patt = 0;//use to track post blog arrangment pattern
      $onRow = 0;//track number of post on a row
      //Order blogId DESC was used because the latest blog would usually have the highest
      //id since it's the last record entered
      $query = "SELECT * FROM blog ORDER BY ID DESC LIMIT $offset, $total_records_per_page";
      $result = mysqli_query($connection, $query);


      if(!$result){
        echo "There was a problem querying the database";
      }else{
        while($row = mysqli_fetch_array($result)){
          extract($row);
          if($onRow == 3 || $onRow == 0){
            if($onRow == 3) {
              echo "</div>";//close row div tag after 3 post on row
              $onRow = 1;
            }else{
              $onRow = $onRow+1;
            }
            echo "<div class=\"row p-2\">";//open a row class div when onRow is 0
            /*the pattern used for the blog page 6col 3col 3col and alternate
            on next row 3col 3col 6col. Which is 6col 3col 3col 3col 3col 6col on every 2 rows
            6cols at $patt = 0 and 6cols at $patt = 5*/
            if($patt == 0 || $patt == 5){
              if($patt == 5) {
                $patt = 0;
              }else{
                $patt = $patt + 1;
              }
                echo "<div class=\"col-12 col-md-6 p-1\">";
                echo "<article class=\"post br\">";
                echo "<img class='img-fluid p-0' src=\"../images/$row[thumbnail]\" alt=\"$row[alt]\" />";
                //echo '<img class="img-fluid p-0" src="data:image/jpeg;base64,'.base64_encode( $row['thumbnail'] ).'"/>';
                echo "<div class=\"p-2\">";
                echo "<h4 class='text-center'><a class=\"read\" href=\"singlepost.php?page=$page&id=$row[ID]\">$row[title]</a></h4>";
                echo "<p class='text-justify'>"; echo strip_tags(substr($row['post'], 0, 200)); echo".... </p>";
                echo "<a class=\"readmore btn\" href=\"singlepost.php?page=$page&id=$row[ID]\">Read more</a>";
                echo "</div></article></div>";

            }else{
              $patt = $patt + 1;
              echo "<div class=\"col-12 col-md-3 p-1\">";
              echo "<article class=\"post br\">";
              echo "<img class='img-fluid p-0' src=\"../images/$row[thumbnail]\" alt=\"$row[alt]\" />";
              //echo '<img class="img-fluid p-0" src="data:image/jpeg;base64,'.base64_encode( $row['thumbnail'] ).'"/>';
              echo "<div class=\"p-2\">";
              echo "<h4 class='text-center'><a class=\"read\" href=\"singlepost.php?page=$page&id=$row[ID]\">$row[title]</a></h4>";
              echo "<p class='text-justify'>"; echo strip_tags(substr($row['post'], 0, 200)); echo".... </p>";
              echo "<a class=\"readmore btn\" href=\"singlepost.php?page=$page&id=$row[ID]\">Read more</a>";
              echo "</div></article></div>";

            }
          }else{
            $onRow = $onRow+1;
            if($patt == 0 || $patt == 5){
              if($patt == 5) {
                $patt = 0;
              }else{
                $patt = $patt + 1;
              }
                echo "<div class=\"col-12 col-md-6 p-1\">";
                echo "<article class=\"post br\">";
                echo "<img class='img-fluid p-0' src=\"../images/$row[thumbnail]\" alt=\"$row[alt]\" />";
                //echo '<img class="img-fluid p-0" src="..images/'; echo $row['thumbnail']; echo'" alt= $row[title]';
                echo "<div class=\"p-2\">";
                echo "<h4 class='text-center'><a class=\"read\" href=\"singlepost.php?page=$page&id=$row[ID]\">$row[title]</a></h4>";
                echo "<p class='text-justify'>"; echo strip_tags(substr($row['post'], 0, 200)); echo".... </p>";
                echo "<a class=\"readmore btn\" href=\"singlepost.php?page=$page&id=$row[ID]\">Read more</a>";
                echo "</div></article></div>";

            }else{
              $patt = $patt + 1;
              echo "<div class=\"col-12 col-md-3 p-1\">";
              echo "<article class=\"post br\">";
              echo "<img class='img-fluid p-0' src=\"../images/$row[thumbnail]\" alt=\"$row[alt]\" />";
              //echo '<img class="img-fluid p-0" src="data:image/jpeg;base64,'.base64_encode( $row['thumbnail'] ).'"/>';
              echo "<div class=\"p-2\">";
              echo "<h4 class='text-center'><a class=\"read\" href=\"singlepost.php?page=$page&id=$row[ID]\">$row[title]</a></h4>";
              echo "<p class='text-justify'>"; echo strip_tags(substr($row['post'], 0, 200)); echo".... </p>";
              echo "<a class=\"readmore btn\" href=\"singlepost.php?page=$page&id=$row[ID]\">Read more</a>";
              echo "</div></article></div>";

            }
          }
        }/*
        When the last set of post isn't up to three, this doesn't allow
        the closing div tag above (line 79) to echo, hence the reason for this if block
        */
        if($resultCount % 3 != 0){//total number of rows won't will cause last column to be either 1 or 2
          echo"</div>";
        }
      }
      ?>
    </div></div>
    <!--add pagination-->
    <?php require('../app/views/pagination.php');?>

  </main>
  <!-- add footer-->
  <?php require("../app/views/footer.php") ?>
</body>
</html>

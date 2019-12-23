<!--php connection to database-->
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
  <!--add header-->
  <?php require("../app/views/header.php") ?>
  <main class="main header_margin">

    <div class="ta">
      <article class="container inner_container mx-auto p-2">

            <?php
            if (isset($_GET['page_no']) && $_GET['page_no']!="") {
                $page_no = $_GET['page_no'];
            }else{
                    $page_no = 1;
            }

            $total_records_per_page = 4;//maximum number of post on each page
            $offset = ($page_no-1) * $total_records_per_page;
            $previous_page = $page_no - 1;
            $next_page = $page_no + 1;
            $adjacents = "2";//used in pagination design

            //the mysqli_num_rows function doesn't work with limit and offset, hence my reason
            //for not using $result as the argument for mysqli_num_rows
            $resultCount = mysqli_num_rows(mysqli_query($connection,"SELECT * FROM take_action"));
            $total_no_of_pages = ceil($resultCount / $total_records_per_page);
            $second_last = $total_no_of_pages - 1; // total pages minus 1

            $patt = 0;//use to track post blog arrangment pattern
            $onRow = 0;//track number of post on a row
            //Order blogId DESC was used because the latest blog would usually have the highest
            //id since it's the last record entered
            $query = "SELECT * FROM take_action ORDER BY ID DESC LIMIT $offset, $total_records_per_page";
            $result = mysqli_query($connection, $query);


            if(!$result){
              echo "There was a problem querying the database";
            }else{
              $i = 0;//use to change id name to avoid duplicate id for collapse
              while($row = mysqli_fetch_array($result)){
                extract($row);
               ?>
         <div class="jumbotron jumbotron-fluid">
           <div class="container">
            <h2><?php echo $row["title"]; ?></h2>
            <p class="card-text font-italic"><?php echo $row["intro"]; ?></p>
            <div id="action_collapse_<?php echo $i; ?>" class="collapse">
                <div  class="text-justify">
                  <?php echo ($row["post"]); ?>
                </div>
            </div>
            <div class="text-justify">
              <a href="#action_collapse_<?php echo $i; ?>" class="btn btn-warning" data-toggle="collapse">Show More</a>
              <a class="btn btn-warning" href="#">Take action</a>
            </div>
          </div>
        </div><?php $i++; }//while ?>
        <?php } //else?>
      </article>
    </div>
    <!--add pagination-->
    <?php require('../app/views/pagination.php'); ?>
      <!--add footer-->
    <?php require("../app/views/footer.php"); ?>

  </main>
</body>
</html>

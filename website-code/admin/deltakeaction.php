<?php
require ("../app/src/session.php");

//set page title
$pTitle = "Delete take action post";
?>

<!--specify to web browser that html version 5 used-->
<!DOCTYPE html>
<!-- contents language set to English -->
<html lang="en">
<?php require("includes/head.php") ?>
<body>
<?php require("includes/admin_header.php") ?>

  <main class="main">
    <div class="admin_main d-flex flex-column p-3 container">
      <div class="mod_donation">
        <h3 class="text-center">Take action posts</h3>
        <?php require ("../config/connect.php");

            if (isset($_GET['page_no']) && $_GET['page_no']!="") {
                $page_no = $_GET['page_no']; //get current page number and assign to $page_no
            }else{
                    $page_no = 1;// if page_no is not set then assign 1.
            }

            $total_records_per_page = 10; //maximum number of post on each page
            $offset = ($page_no-1) * $total_records_per_page;
            $previous_page = $page_no - 1;
            $next_page = $page_no + 1;
            $adjacents = "2";//used in pagination design

            //the mysqli_num_rows function doesn't work with limit and offset, hence my reason
            //for not using $result as the argument for mysqli_num_rows
            $resultCount = mysqli_num_rows(mysqli_query($connection,"SELECT * FROM take_action"));
            $total_no_of_pages = ceil($resultCount / $total_records_per_page);
            $second_last = $total_no_of_pages - 1; // total pages minus 1

            //Order blogId DESC was used because the latest blog would usually have the highest
            //id since it's the last record entered
            $q = "SELECT * FROM take_action ORDER BY ID DESC LIMIT $offset, $total_records_per_page";
            $result = mysqli_query($connection, $q);


            $msg='';
            if(isset($_POST['delete'])){
              $record = $_POST['don_rec'];
              if (isset($_POST['don_rec'])) {
                  foreach ($record as $id){
                    $query = "DELETE FROM take_action where ID = $id ";
                    $retval = mysqli_query($connection, $query);
                    if(! $retval ) {
                      $msg = "No record deleted";
                       die('Could not delete data: ' . mysqli_error());
                    }else{
                      $msg = "Record(s) deleted. Refresh to see changes";
                    }
                  }
              } else {

              }
            }

        ?>

        <form class="" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
          <div class="p-2">
            <button class="btn btn-danger" type="submit" name="delete">Delete Selected Records</button>
            <span><?php echo $msg; ?></span>
          </div>

          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Select</th>
                  <th>ID</th>
                  <th>Title</th>
                  <th>Posted by</th>
                  <th>Date</th>
                </tr>
              </thead>
              <tbody>
                <?php
                    if(!$result){
                      echo "There was a problem querying the database";
                    }else{
                      while($rec = mysqli_fetch_array($result)){
                        extract($rec);
                ?>
                <tr>
                  <td><input type="checkbox" class="check" name = "don_rec[]" id="<?php echo $rec['ID']; ?>" value="<?php echo $rec['ID']; ?>">&nbsp;</td>
                  <td><?php echo $rec['ID']; ?></td>
                  <td><?php echo $rec['title']; ?></td>
                  <td><?php echo $row['username']; ?></td>
                  <td><?php echo substr($rec['Date'],0,10); ?></td>
                </tr><?php } ?>
              <?php } ?>
              </tbody>
            </table>
          </div>

        </form>
        <?php require('../app/views/pagination.php');?>
      </div>
    </div>
  </main>
<?php require("includes/admin_footer.php") ?>
</body>
</html>

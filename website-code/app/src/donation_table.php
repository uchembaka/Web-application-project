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
    $resultCount = mysqli_num_rows(mysqli_query($connection,"SELECT * FROM donate_record"));
    $total_no_of_pages = ceil($resultCount / $total_records_per_page);
    $second_last = $total_no_of_pages - 1; // total pages minus 1

    //Order blogId DESC was used because the latest blog would usually have the highest
    //id since it's the last record entered
    $query = "SELECT * FROM donate_record ORDER BY record_id DESC LIMIT $offset, $total_records_per_page";
    $result = mysqli_query($connection, $query);


    $msg='';
    if(isset($_POST['delete'])){
      $record = $_POST['don_rec'];
      if (isset($_POST['don_rec'])) {
          foreach ($record as $id){
            $query = "DELETE FROM donate_record where record_id = $id ";
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

<?php
require ("../app/src/session.php");
//add page title
$pTitle = "Delete donation";
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
        <h3 class="text-center">Donations</h3>
        <?php require ("../app/src/donation_table.php"); ?>

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
                  <th>First name</th>
                  <th>Last name</th>
                  <th>Amount</th>
                  <th>Country</th>
                </tr>
              </thead>
              <tbody>
                <?php
                    if(!$result){
                      echo "There was a problem querying the database";
                    }else{
                      while($row = mysqli_fetch_array($result)){
                        extract($row);
                ?>
                <tr>
                  <td><input type="checkbox" class="check" name = "don_rec[]" id="<?php echo $row['record_id']; ?>" value="<?php echo $row['record_id']; ?>">&nbsp;</td>
                  <td><?php echo $row['record_id']; ?></td>
                  <td><?php echo $row['fName']; ?></td>
                  <td><?php echo $row['lName']; ?></td>
                  <td><?php echo $row['amount']; ?></td>
                  <td><?php echo $row['country']; ?></td>
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

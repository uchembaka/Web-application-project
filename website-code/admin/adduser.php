<?php
require ("../app/src/session.php");
$pTitle = "Add new user";
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$username = $password = $usernameErr = $passwordErr = $succMsg = "";



if($_SERVER['REQUEST_METHOD']==='POST'){


    //validation for title
    if(isset($_POST["username"])){
        //Hey Jimmy help me do the regex thingy here cheers
        if(empty($_POST["username"])){

            $usernameErr = "*username is required";

        }else{

            $username = test_input($_POST["username"]);

        }//end else

    }//end if

    else{

        $usernameErr = "*username is required";

    }//end else

    //validation for title
    if(isset($_POST["password"])){
        //Hey Jimmy help me do the regex thingy here cheers
        if(empty($_POST["password"])){

            $passwordErr = "*password is required";

        }else{

            $password = test_input($_POST["password"]);

        }//end else

    }//end if

    else{

        $passwordErr = "*password is required";

    }//end else

    if(!empty($username)&&!empty($password)){

        $query = "INSERT INTO users (username, password)
                VALUES ('$username', '$password')";

        if ($connection->multi_query($query) === TRUE) {

            $succMsg = "New User added";

            //echo "New records created successfully";

        } else {

            echo "Error: " . $query . "<br>" . $connection->error;

        }

        $connection->close();

    }

    else{

        echo "Validation failed";

    }

}
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
      <section>
        <h2 class="">Add new user</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <div class="form-group">
              <label for="username">username</label>
              <input type="text" class="form-control" name="username" id="username" placeholder="username">
              <span class="error"><?php echo $usernameErr;?></span>
            </div>
            <div class="form-group">
              <label for="password">password</label>
              <input type="text" class="form-control" name="password" id="password" placeholder="password">
              <span class="error"><?php echo $passwordErr;?></span>
            </div>
            <button type="submit" name="button" class="btn readmore mb-3">Add</button>
            <h2 class="success"><?php echo $succMsg;?></h2>
          </form>
      </section>
    </div>
  </main>
  <?php require("includes/admin_footer.php") ?>
</body>
</html>

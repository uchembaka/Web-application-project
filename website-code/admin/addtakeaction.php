<?php
require ("../app/src/session.php");
//set page title
$pTitle = "Add take action post";
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$title = $post = $thumbnail = $titlErr = $postErr = $intro = $introErr = $succMsg = "";



if($_SERVER['REQUEST_METHOD']==='POST'){


    //validation for title
    if(isset($_POST["title"])){

        if(empty($_POST["title"])){

            $titlErr = "*Title is required";

        }else{

            $title = test_input($_POST["title"]);

        }//end else

    }//end if

    else{

        $titlErr = "*Title is required";

    }//end else

    if(empty($_POST["thumbnail"])){
      $thumbnail = "default-ta-image.jpeg";
    }else{
      $thumbnail = test_input($_POST["thumbnail"]);
    }


    if(empty($_POST["intro"])){
      $introErr = "*introduction is required";
    }else{
      $intro = test_input($_POST["intro"]);
    }

    if(empty($_POST["editor"])){
      $postErr = "*Post is required";
    }else{
      $post = $_POST["editor"];
    }

    if(!empty($title)&&!empty($post)&&!empty($intro)){

        $query = "INSERT INTO take_action (title, post,  postBy, thumbnail, alt, intro)
                VALUES ('$title', '$post', '$row[ID]', '$thumbnail' ,'$title', '$intro')";

        if ($connection->multi_query($query) === TRUE) {

            $succMsg  = "Take action post added";

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
        <h2 class="text-center p-2">New Take Action Post</h2>
          <form class="m-5" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

              <div class="form-group">
                <label for="title">Title </label>
                <input class="form-control" type="text" name="title" value="" id="title" placeholder="Blog title">
                <span class="error"><?php echo $titlErr;?></span>
              </div>
              <div class="form-group">
                <label for="intro">Introduction</label>
                <textarea class="form-control" name="intro" rows="8" id="intro" cols="80"></textarea>
                <span class="error"><?php echo $introErr;?></span>
              </div>
              <div class="form-group">
                <label for="editor">Post</label>
                <textarea class="form-control" name="editor" rows="8" id="editor" cols="80"></textarea>
				<!-- Reference: https://ckeditor.com/
				this wysiwyg editor was used to reduced time used in formatting post in html -->
                <script>
                    ClassicEditor
                        .create( document.querySelector( '#editor' ) )
                        .catch( error => {
                            console.error( error );
                        } );
                </script>
                <span class="error"><?php echo $postErr;?></span>
              </div>
              <div class="form-group">
                <label for="thumbnail">Thumbnail</label>
                <input class="form-control" type="text" name="thumbnail" value="" id="thumbnail" placeholder="enter image name">
                <small id="passwordHelpBlock" class="form-text text-muted">
                  Enter image name of image you want to use that corresponds to an image in your image folder, the default image will be used if left blank.
                </small>
              </div>

            <button type="submit" name="button" class="btn readmore">Submit</button>
            <h2 class="success"><?php echo $succMsg;?></h2>
          </form>
      </section>
    </div>
  </main>
  <?php require("includes/admin_footer.php") ?>
</body>
</html>

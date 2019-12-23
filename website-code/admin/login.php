<?php
require '../app/src/loginValidation.php';
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
  <title>Login</title>
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
<div class="container">
	<header class="row">
	  <div class="col-12 col-md-3 d-flex justify-content-center  align-items-center">
		  <img class="" src="../images/Friends_of_the_Earth_(logo).png" alt="logo">
	  </div>
	  <div class="col-12 col-md-9 d-flex align-items-center justify-content-center">
		  <h2 class="text-center">A Sustainable Ireland In A Just World</h2>
	  </div>
  </header>
  <main>
      <h1 class="text-center">Please sign in</h1>
      <section class="row d-flex justify-content-center mt-3">
          <div class="col-md-4">

			<!-- the $_SERVER["PHP_SELF"] is a global variable that returns the current php page
					when the form is submitted it sends it on the same page instead of jumping to another when there is an error-->
              <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="form" >
                  <span class="error"><?php echo $usernameErr;?></span>
                  <div class="form-group">
                      <input type="text" id="username" name="username" class="form-control" placeholder="Username">
                  </div>
                  <span class="error"><?php echo $passwordErr;?></span>
                  <div class="form-group">
                      <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                  </div>
                  <button class="btn btn-lg btn-block signIn" type="submit">Sign in</button>
              </form>
              <span class="error"><?php echo $loginErr;?></span>
              <span class="error"><?php echo $login;?></span>
          </div>
      </section>

  </main>
</div>
</body>
</html>

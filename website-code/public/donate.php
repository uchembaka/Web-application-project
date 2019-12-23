<?php require("../app/src/formValidation.php") ?>

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
  <title>Home</title>
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
<body id="donate">

  <!--add header -->
  <?php require("../app/views/header.php") ?>
  <main class="main">
    <div class="inner_container mx-auto header_margin pr-3, pl-3">
          <div class="row m-0">
              <section class="col-md-5 donate_statement pb-2 d-flex flex-column justify-content-center">
                  <h2 class="success"><?php echo nl2br($thank);?></h2>
                  <h2 class="">Our Campaigning Depends on You</h2>
                  <p class="">Your support makes it possible, your participation makes it powerful.
                      Whatever you can afford will make a big difference to our work.
                  </p>
              </section><!--donate statment section end-->

              <section class="col-md-7 donate_field ">

                  <h2>Make a Donation</h2>
                  <!--Information sent from a form with the POST method is invisible to others -->
                  <!--the $_SERVER["PHP_SELF"] sends the submitted form data to the page itself, instead of jumping to a different page.
                  This way, the user will get error messages on the same page as the form.-->
                  <!--The htmlspecialchars() function converts special characters to HTML entities. This means that it will replace HTML characters like < and > with &lt; and &gt;.
                  This prevents attackers from exploiting the code by injecting HTML or Javascript code (Cross-site Scripting attacks) in forms.-->
                  <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

                      <!--Use the .form-check-inline class if you want the checkboxes to appear on the same line-->
                      <!--Add a wrapper element with .form-group, around each form control, to ensure proper margins-->
                      <!-- Use a wrapper element with class="form-check" to ensure proper margins for labels and checkboxes.
                      Add the .form-check-label class to label elements,
                      and .form-check-input to style checkboxes properly inside the .form-check container.-->
                      <div class="form-check-inline form-group">
                          <!--.form-check-label class to label elements-->
                          <label class="form-check-label">
                              <!-- .form-check-input to style inside the .form-check container-->
                              <input type="radio" class="form-check-input" name="amount" value="5" checked>€5
                          </label>
                      </div> <!-- €5 radio -->
                      <div class="form-check-inline form-group">
                          <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="amount" value="15">€15
                          </label>
                      </div> <!-- €15 radio -->
                      <!--Other payment-->
                      <div class="form-check form-group">
                          <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="amount" value="other">CHOOSE OWN AMOUNT €
                          </label>

                          <div class="row">
                              <div class="col-10 col-sm-4">
                                  <input type="text" class="form-control" name="ownAmount" placeholder="Enter an amount">
                              </div>
                              <!--error message-->
                              <span class="error"><?php echo $amountErr;?></span>
                          </div>
                      </div><!-- choose own amount radio -->

                      <h3>Payment Details</h3>
                      <!--Use the .form-check-inline class if you want the checkboxes to appear on the same line-->
                      <!--Add a wrapper element with .form-group, around each form control, to ensure proper margins-->
                      <!-- Use a wrapper element with class="form-check" to ensure proper margins for labels and checkboxes.
                      Add the .form-check-label class to label elements,
                      and .form-check-input to style checkboxes properly inside the .form-check container.-->
                      <!--name form -->
                      <div class="form-group form-row">
                          <div class="col">
                              <label for="fName">First Name:</label>

                              <input type="text" class="form-control" name="fName" id="fName" placeholder="First name">
                          </div>
                          <div class="col">
                              <label for="lName">Last Name:</label>
                              <input type="text" class="form-control" name="lName" id="lName" placeholder="Last name">

                          </div>
                      </div> <!--name form end-->
                        <!--error message-->
                      <span class="error"><?php echo $nameErr;?></span>

                      <!--email form-->
                      <div class="form-group">
                          <label for="email">Email address:</label>
                          <span class="error"><?php echo $emailErr;?><br></span>
                          <input type="email" class="form-control" name="email" id="email">
                      </div>

                      <!--address 1 form-->
                      <div class="form-group mt-2">
                          <!--<label> element represents a caption for an item in a user interface-->
                          <label for="address1">Address 1:</label>
                          <span class="error"><?php echo $addressErr;?></span>
                          <!--defines a one-line text input field-->
                          <!--The size attribute specifies the visible width-->
                          <input type="text" class="form-control" id="address1" name="address1"/>
                      </div>

                      <!--address 2 form-->
                      <div class="form-group">
                          <!--<label> element represents a caption for an item in a user interface-->
                          <label for="address2">Address 2:(optional)</label>
                          <!--defines a one-line text input field-->
                          <!--The size attribute specifies the visible width-->
                          <input type="text" class="form-control" id="address2" name="address2"/>

                      </div>
                      <!--city, country, postcode form-->
                      <!--responsive column-->
                      <div class="form-row">
                          <div class="col-md-4 mt-2 mb-2">
                              <input type="text" class="form-control" name="city" placeholder="City/Town">
                          </div>
                          <div class="col-md-4 mt-2 mb-2">
                              <input type="text" class="form-control" name="country" placeholder="Country">
                          </div>
                          <div class="col-md-4 mt-2 mb-2">
                              <input type="text" class="form-control" name="postCode" placeholder="Post code/ Eircode">
                          </div>
                      </div>
                      <!--error message for validation-->
                      <span class="error"><?php echo $cityErr;?><br></span>
                      <span class="error"><?php echo $countryErr;?><br></span>
                      <span class="error"><?php echo $postCodeErr;?><br></span>
                      <!--submission button-->
                      <button type="submit" class="btn btn-warning p-3 ml-3 mb-3 ">Submit</button>

                  </form>
              </section><!--make donation section end-->

          </div>
        </div>
  </main>
  <!--add footer -->
  <?php
      require("../app/views/footer.php");
   ?>
</body>

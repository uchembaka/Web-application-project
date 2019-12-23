<?php
/*using site root folder in header, so all links in hearder
still works from any page they are required*/
  $siteroot = '/Website-code';
 ?>
<header class="outer_container">
  <div class="row admin_header mx-auto">
    <!-- justify-content-sm-center allows the logo to be centered on small devices-->
      <div class="col-12 col-md-3 d-flex justify-content-md-start justify-content-center align-items-center">
          <img class="" src="../images/Friends_of_the_Earth_(logo).png" alt="logo">
      </div>
      <div class="col-12 col-md-6 d-flex align-items-center justify-content-center">
          <h2 class="text-center">A Sustainable Ireland In A Just World</h2>
      </div>
      <div class="col-12 col-md-3 d-flex align-items-center justify-content-end pb-2">
          <a class="btn readmore" href="<?php echo $siteroot; ?>/app/src/logout.php" role="button">Log Out</a>
      </div>
  </div>
  <div class="full_admin_header">
    <div class="admin_header inner_container mx-auto row">
      <div class="col-6 col-md-8">
        <!--admin primary navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
           <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item px-lg-4">
                <a class="nav-link" href="<?php echo $siteroot; ?>/public/index.php">Visit site</a>
              </li>
              <li class="nav-item px-lg-4">
                <a class="nav-link" href="<?php echo $siteroot; ?>/admin/admin.php">Dashboard</a>
              </li>
              <li class="nav-item dropdown px-lg-4">
                <a class="nav-link dropdown-toggle" href="#" id="addNewDropDown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  + New
                </a>
                <div class="dropdown-menu" aria-labelledby="addNewDropDown">
                  <a class="dropdown-item" href="<?php echo $siteroot; ?>/admin/addblog.php">Blog post</a>
                  <a class="dropdown-item" href="<?php echo $siteroot; ?>/admin/addnews.php">News post</a>
                  <a class="dropdown-item" href="<?php echo $siteroot; ?>/admin/addtakeaction.php">Take action post</a>
                  <a class="dropdown-item" href="<?php echo $siteroot; ?>/admin/adduser.php">User</a>
                </div>
              </li>
              <li class="nav-item dropdown px-lg-4">
                <a class="nav-link dropdown-toggle" href="#" id="delDropDown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Modify/Delete
                </a>
                <div class="dropdown-menu" aria-labelledby="delDropDown">
                  <a class="dropdown-item" href="<?php echo $siteroot; ?>/admin/delblog.php">Blog post</a>
                  <a class="dropdown-item" href="<?php echo $siteroot; ?>/admin/delnews.php">News post</a>
                  <a class="dropdown-item" href="<?php echo $siteroot; ?>/admin/deluser.php">User</a>
                  <a class="dropdown-item" href="<?php echo $siteroot; ?>/admin/deltakeaction.php">Take action post</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="<?php echo $siteroot; ?>/admin/mod-donation.php">Donation</a>
                </div>
              </li>
            </ul>
          </div>
        </nav><!-- nav link end -->
      </div>
      <div class="col-6 col-md-4 mt-2 d-flex justify-content-end">
          <p class="user mt-2">Current User: <a class="font-italic" href="../index.php"><?php echo $row['username']; ?></a></p>
      </div>
    </div><!--admin_header div end-->
  </div><!--full_admin_header div end-->
</header>

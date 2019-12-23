
<?php
/*using site root folder in header, so all links in hearder
still works from any page they are required*/
  $siteroot = '/Website-code';
 ?>
<head>
  <!-- standard UTF-8 character encoding specified-->
  <meta charset="UTF-8" />
  <!--Mobile display-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--page title. Can bee seen on the browser tab-->
  <title><?php echo $pTitle ?></title>
  <!--links to bootstrap reboot (reset.css) css files-->
  <link rel="stylesheet" href="<?php echo $siteroot; ?>/css/bootstrap-reboot.css" />
  <!--link to bootstrap css -->
  <link rel="stylesheet" href="<?php echo $siteroot; ?>/css/bootstrap.min.css" />
  <!--link to local css file-->
  <link rel="stylesheet" href="<?php echo $siteroot; ?>/css/style.css" />
  <!--google font-->
  <!--note the pipe in the url cause the html validator to flag href-->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway:300,400" rel="stylesheet">
  <!-- Add icon library -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!--wysisyg script-->
	<script src="https://cdn.ckeditor.com/ckeditor5/11.2.0/classic/ckeditor.js"></script>
  <!--Jquery scripts-->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <!--Bootstrap Script-->
  <script src="<?php echo $siteroot; ?>/scripts/bootstrap.min.js"></script>
  <!--script used in header-->
  <script src="<?php echo $siteroot; ?>/scripts/header.js"></script>
  <!--popper scripts-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
</head>

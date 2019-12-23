<?php
session_start(); //Starting Session

require ("../config/connect.php");

if(isset($_SESSION['login_user'])){
  //Storing session
  $user_check = $_SESSION['login_user'];

  //query to fetch complete information of user
  $query = "select * from users where username ='$user_check'";
  $ses_sql = mysqli_query($connection,$query);
  if(mysqli_error($connection)){

      echo "There was a problem querying the database";

  }
  else{

      $row = mysqli_fetch_assoc($ses_sql);
      $login_session = $row['username'];
      if(isset($login_session)){


      }
      else{

		//do nothing: this allow non admin users to still view the site

      }


  }
}else{
	//do nothing: this allow non admin users to still view the site

}



?>

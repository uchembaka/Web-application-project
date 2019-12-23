<?php

session_start(); // Starting Session

function test_input($data){
    $data = trim ($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$username = $password ="";

$usernameErr = $passwordErr = "";

$login = $loginErr="";

if($_SERVER['REQUEST_METHOD'] ==='POST'){

    //username validation

    if(!empty($_POST["username"])){

        if( !preg_match('/^[A-Za-z][A-Za-z0-9]{5,50}$/', $_POST["username"]) ){

            $username = test_input($_POST["username"]);

        }else{

            $usernameErr ="Invalid username ";
        }


    }else{

        $usernameErr = "Username is required";
    }

    //password validation
    if(!empty($_POST["password"])){

        $loginPassword = test_input($_POST["password"]);


    }else{

        $passwordErr = "Password is required";
    }

    require('../config/connect.php');

    if ($connection->connect_error){

        die(mysql_connect_error());

    }

    else{

        if(!empty($username)&&!empty($loginPassword)){

            $query ="SELECT * FROM users WHERE username = '$username' AND password = '$loginPassword'";

            $result = mysqli_query($connection, $query);
            if (mysqli_num_rows($result)==1){

                $login = "Welcome";
				
				//when session is created successfully, direct admin user to admin page
                $_SESSION['login_user']=$username;
                header("Location: admin.php");
                echo $_SESSION['login_user'];
                print_r($_SESSION);
                //The mysqli_close() function closes a previously opened database connection.
                mysqli_close($connection);


            }else{
                //echo "Error: " . $query . "<br>" . $connection->error;
                $loginErr ="Username or password incorrect";

            }

        }else{
            $loginErr ="Field can not be empty ";


        }






    }


}//end if SERVER
?>

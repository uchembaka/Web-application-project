<?php

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$amountErr = $nameErr = $addressErr = $cityErr = $countryErr = $postCodeErr = $emailErr ="";

$amount = $fName = $lName = $address1 = $address2 = $city = $country = $postCode = $email = $thank ="";


if($_SERVER['REQUEST_METHOD']==='POST'){


    //validation for amount
    if(isset($_POST["amount"])){

        if($_POST["amount"] == "other"&&empty($_POST["ownAmount"])){

            $amountErr = "*Amount is required";

        }

        else if($_POST["amount"] == "other"&&preg_match('/^\d+(\.\d{2})?$/',$_POST["ownAmount"])){

            $amount = test_input($_POST["ownAmount"]);


        }// end if

        else if($_POST["amount"] == "other"&&!preg_match('/^\d+(\.\d{2})?$/',$_POST["ownAmount"])){

            $amountErr = "Only enter positive number ";

        }

        else{

            $amount = $_POST["amount"];

        }//end else

    }//end if

    else{

        $amountErr = "*Amount is required";

    }//end else

    //validation for first name
    if (!empty($_POST["fName"])) {

        if(preg_match("/^[a-zA-Z ]*$/",$_POST["fName"])){

            $fName = test_input($_POST["fName"]);

        }

        else{

            $fNameErr = "Only letters and white space allowed";

        }


    }
    else  {

        $fNameErr = "* Name is required";

    }

    //validation for last name
    if (!empty($_POST["lName"])) {

        if(preg_match("/^[a-zA-Z ]*$/",$_POST["lName"])){

            $lName = test_input($_POST["lName"]);

        }

        else{

            $nameErr = "Only letters and white space allowed";

        }


    }
    else  {

        $nameErr = "* Name is required";

    }

    //validation for address
    if (!empty($_POST["address1"])) {


        $address1 = test_input($_POST["address1"]);
        $address2 = test_input($_POST["address2"]);


    }

    else  {

        $addressErr = "* Address is required";

    }

    //validation for city
    if (!empty($_POST["city"])) {


        $city = test_input($_POST["city"]);


    }

    else  {

        $cityErr = "* City field is required";

    }

    //validation for country
    if (!empty($_POST["country"])) {


        $country = test_input($_POST["country"]);


    }

    else  {

        $countryErr = "* Country field is required";

    }

    //validation for postCode
    if (!empty($_POST["postCode"])) {


        $postCode = test_input($_POST["postCode"]);


    }

    else  {

        $postCodeErr = "* Post code field is required";

    }

    //validation for city
    if (!empty($_POST["postCode"])) {


        $postCode = test_input($_POST["postCode"]);


    }

    else  {

        $postCodeErr = "* Post code field is required";

    }

    //validation for email
    if (!empty($_POST["email"])) {


        if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){

            $email = test_input($_POST['email']);

        }

        else{


            $emailErr ="Please enter a valid email address";

        }




    }

    else  {

        $emailErr = "* Email field is required";

    }



//    echo "<p>Amount: $amount</p>";
//    echo "<p>First Name: $fName</p>";
//    echo "<p>Last Name: $lName</p>";
//    echo "<p>Address 1: $address1</p>";
//    echo "<p>Address 2: $address2</p>";
//    echo "<p>City : $city</p>";
//    echo "<p>Country: $country</p>";
//    echo "<p>Post Code: $postCode</p>";
//    echo "<p>Email: $email</p>";

    require("../config/connect.php");
    // Check connection
    if($connection->connect_error){

        die(mysqli_connect_error());

    }

    else {

        //echo "Connected successfully";
        if(!empty($amount)&&!empty($fName)&&!empty($lName)&&!empty($address1)&&!empty($city)&&!empty($country)&&!empty($postCode)&&!empty($email)){

            $query = "INSERT INTO donate_record (amount, fName, lName,  email, address1, address2, city, country, post_code)
                    VALUES ('$amount', '$fName', '$lName', '$email' ,'$address1', '$address2', '$city', '$country', '$postCode')";

            if ($connection->multi_query($query) === TRUE) {

                $thank ="$fName! \n Thank You for donation of € $amount";

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


}

?>

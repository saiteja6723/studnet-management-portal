<?php
    $regno =$_POST['regno'];
    $pass =$_POST['pass'];
    $check_pass =$_POST['check_pass'];

    //Database connection
    $conn = new mysqli('localhost','root','','student');
    if($conn-> connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }
    else{
        $dup = mysqli_query($conn,"select * from registers where regno = '$regno'");

        if(mysqli_num_rows($dup) > 0){
            echo "This user is already registered. Please try Logging in.";
        }
        else if(strlen($pass)<8){
            echo "Password entered is too short. Enter a new password";
        }
        else if($pass!= $check_pass){
            echo "Passwords do not match. Try again";
        }
        else{
            $query = "insert into registers values('$regno','$pass')";

            mysqli_query($conn,$query);

            echo "User has been registered. Go back to Login Page.";
            header("Location: login.html");

            $conn->close();
            exit;
        }
    }



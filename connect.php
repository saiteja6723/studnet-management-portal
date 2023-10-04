<?php
    $regno =$_POST['regno'];
    $f_name =$_POST['f_name'];
    $m_name =$_POST['m_name'];
    $l_name =$_POST['l_name'];
    $dob =$_POST['dob'];
    $contact =$_POST['contact'];
    $email =$_POST['email'];
    $gender =$_POST['gender'];
    $dept = $_POST['dept'];



    //Database connection
    $conn = new mysqli('localhost','root','','student');
    if($conn-> connect_error){
        die('Connection Failed : '.$conn->connect_error);
    } else{
        $dup = mysqli_query($conn,"select * from add_details where regno = '$regno'");
        if(mysqli_num_rows($dup) > 0){
            echo "Register Number already registered. Please try again ";
        }
        else{

        $query = "insert into add_details values ('$regno','$f_name','$m_name','$l_name','$dob', '$contact','$email','$gender','$dept')";
        
        mysqli_query($conn,$query);
        header("Location: add_details.html");
        $stmt->close();
        $conn->close();
        exit;
    }
    }
?>
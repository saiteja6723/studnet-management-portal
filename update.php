<?php
    $regno = $_POST['regno'];
    $col =$_POST['column'];
    $update = $_POST['update'];


    $conn = new mysqli('localhost','root','','student');
    if($conn-> connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }
    else{
        $query = "select * from add_details where regno = '$regno'";
        
        $dup = mysqli_query($conn,$query);
        if(mysqli_num_rows($dup)==0){
             echo "Student detail not found. Please enter the student detail before updating the student list.";
            $conn->close();
            exit;

        }
        else{
                       
             $query1 = "UPDATE `add_details` SET `$col` = '$update' WHERE `add_details`.`regno` = '$regno'";

            mysqli_query($conn , $query1);
            echo "Student detail updated";
             header("Location: modify.html");
            $conn->close();

            exit;}
        
    }
?>
<?php
    $regno =$_POST['regno'];
    $reason = $_POST['reason'];



    //Database connection
    $conn = new mysqli('localhost','root','','student');
    if($conn-> connect_error){
        die('Connection Failed : '.$conn->connect_error);
    } else{
        $query1 = "select * from add_details where regno = '$regno'";
        $check = mysqli_query($conn,$query1);

        if(mysqli_num_rows($check) > 0 ){
            $query2 = "insert into `terminated students`(regno,f_name,m_name,l_name,dob, contact,email,gender,dept) select * from add_details where regno = '$regno'" ;
            mysqli_query($conn,$query2);
            $query3 = "update `terminated students` set reason ='$reason' where regno = '$regno'";
        
            mysqli_query($conn,$query3);

            $query4 = "delete from add_details where regno = '$regno'";

            mysqli_query($conn,$query4);

            echo "Student details deleted";

            header("Location: delete.html");

            $conn->close();
            exit;


            
        }
        else{
            echo "Invalid Student Entry";
        }


    }

?>
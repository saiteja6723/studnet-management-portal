<?php
    $userid = $_POST['userid'];
    $pass =$_POST['pass'];
    


    $conn = new mysqli('localhost','root','','student');
    if($conn-> connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }
    else{
        $query = "select pass from registers where regno = '$userid' ";
        $result = mysqli_query($conn, $query);

        if(mysqli_num_rows($result) > 0 ){
            $row = mysqli_fetch_assoc($result);


            if($row['pass'] == $pass){
               echo " login succesful";

               header("Location: portal.html");

               $conn->close();
               exit;

            }
            else{
                echo "Invalid userid or password. Check again";
                header("Location: login.html");

        
            }
        }
        else{
            echo "Invalid userid or password. Check again";

            header("Location: login.html");
        


        }
    }
<!DOCTYPE html>
<html>
    <head lang="en">
        <title> Student Management System</title>
        <meta charset="UTF-8">

        <!-- googlefonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Arimo&display=swap" rel="stylesheet">
        
<!-- bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    </head>



    <body>
        <nav class="navbar navbar-expand-lg NAV">
            <div class="container-fluid main">
                <a class="navbar-brand heading" href="portal.html">Student Management</a>
                <div class="navbar-nav">
                    
                    <a class="nav-link" href="add_details.html">Add Student Details</a>
                    <a class="nav-link" href="modify.html">Modify Student Details</a>
                    <a class="nav-link" href="view.html">View Student Details</a>

                      <form class="d-flex" role="search"  action="search.php" method="post">
                        <input class="form-control me-2" name = "data" type="search" placeholder="Enter Student Details" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit" >Search</button>
                      </form>

                  </div>
            </div>
            
        </nav>
        <div class="Update-buttons">
        <a href="view.php"> <button class="btn btn-outline-success"  type="submit">Enrolled Students Details</button>   </a>    
        <a href="remove.php"> <button class="btn btn-outline-success"  type="submit">Removed Students Details</button>   </a>    
    </div>




        <div class="container-fluid main1" style="padding:20px; padding:10px 50px;background-color: #fff ; border-radius: 30px;" >
            <h1 class="heading">Student Details</h1>
            <br>
            <table class="table" style="">
                <thead>
                    <tr>
                        <th>Register Number</th>
                        <th >Student First Name</th>
                        <th >Student Middle Name</th>
                        <th >Student Last Name</th>
                        <th>Date of Birth</th>
                        <th>Contact Details </th>
                        <th>Email</th>
                        <th>Gender</th>
                        <th>Department</th>
                        <th>Reason</th>
                </thead>
                <tbody>
                    <?php


                         $conn = new mysqli('localhost','root','','student');
                        if( $conn-> connect_error){
                        die('Connection Failed : '.$conn->connect_error);
                        }
                        else{

                            $sql = "select * from `terminated students`";
                            $s = mysqli_query($conn,$sql);

                            while($row = $s->fetch_assoc()){
                        echo "<tr>
                           <td>" .$row['regno'] ."</td>
                        <td>" .$row['f_name'] ."</td>
                        <td>" .$row['m_name'] ."</td>
                        <td>" .$row['l_name'] ."</td>
                        <td>" .$row['dob'] ."</td>
                        <td>". $row['contact'] ."</td>
                        <td>". $row['email'] ."</td>
                        <td>". $row['gender'] ."</td>
                        <td>". $row['dept'] ."</td>
                        <td>" .$row['reason']. "</td>
                    </tr>";

                }}
                ?>


                </tbody>
            </table>
        </div>
    </body>
</html>

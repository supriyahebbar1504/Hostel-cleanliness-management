<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admindb</title>
    <style type="text/css">
   
  
    table{
        border-collapse:collapse;
        width:80%;
        color:black;
        font-family:cursive;
        font-size:19px;
        text-align:left;
        padding-left:30px;
        margin-left:150px;
        font-family:italic;
    }
    th{
        background-color:black;
        color:white;
        font-size:21px;
    }
    a{
        padding-left:550px;
        color:black;
        font-family:cursive;
        font-size:30px;
        
    }
    .navbar {
  width: 100%;
  background-color:#555 ;
  overflow: auto;
  z-index: -1;
  margin-top: -2px;
  margin-bottom:10px;

}

.navbar a {
  float: left;
  padding: 8px 16px 10px 16px;
  color: white;
  text-decoration: none;
  font-size: 16px;

}

.navbar a:hover {
  background-color: #000;
  
}
    tr:nth-child(even){background-color:white}
    tr:nth-child(odd){background-color:#e4e4d3;}
    </style>
</head>
<body>
<div class="navbar">
	
<a href="homepage.php"><i class="fa fa-fw fa-home"></i>Home</a> 
  
   <a href="myprofile.php"><i class="fa fa-fw fa-user"></i>My Profile</a> 
  <a href="announcementdb.php"><i class="fa fa-fw fa-bullhorn"></i>Announcements</a> 
  <a href="administration.php"><i class="fa fa-fw fa-address-card"></i>Hostel Administration</a>
  <a href="feedback.php"><i class="fa fa-fw fa-comments-o"></i>Feedback</a>
  <a href="leavemanager.php"><i class="fa fa-fw fa-tasks"></i>Leave Manager</a>
  <a href="complaint.php"><i class="fa fa-fw fa-question"></i>Complaints</a>
  
  <a href="first.php"><i class="fa fa-fw fa-sign-out"></i>Logout</a>
  </div>
    <table>
        <tr>
        <th>DATE & TIME&nbsp;&nbsp;&nbsp;&nbsp;</th>
        <th>ANNOUNCEMENTS IN DETAIL&nbsp;&nbsp;&nbsp;&nbsp;</th>
        </tr>
        <?php
            $con=mysqli_connect("localhost","root","","announcement");
            if($con->connect_error){
                die("connection error:".$conn->connect_error);
            }

            $sql="SELECT  dat,announcements  from anno ";
            $result=$con->query($sql);

            if($result->num_rows>0){
                while($row=$result->fetch_assoc()){
                    echo"<tr><td>".$row["dat"]."</td><td>".$row["announcements"]."</td></tr>";
                }
                echo"</table>";

            }
            else{
                echo"0 result";
            }
$con->close();

        ?>
</body>
</html>
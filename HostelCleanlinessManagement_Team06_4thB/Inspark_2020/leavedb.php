<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>leavemanager</title>
    <style type="text/css">
     body  {
  
  background-image: url("https://images.pexels.com/photos/1546901/pexels-photo-1546901.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500");
   
 
  background-size: 1550px 780px;
  background-attachment: fixed;}
    table{
        border-collapse:collapse;
        width:100%;
        color:black;
        font-family:cursive;
        font-size:19px;
        text-align:left;
        padding:20px;
    }
    th{
        background-color:#d96459;
        color:white;
        font-size:19px;
    }
    .navbar {
  width: 100%;
  background-color:#07591b ;
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
  font-size: 21px;

}

.navbar a:hover {
  background-color: #000;
  
}
    tr:nth-child(even){background-color:#f2f2f2}
    tr:nth-child(odd){background-color:#ebe0e2}
    </style>
</head>
<body>
	
<div class="navbar">
  <a href="afteradmin.php"><i class="fa fa-fw fa-home"></i>Home</a> 
  <a href="announcements.php"><i class="fa fa-fw fa-bullhorn"></i>Announcements</a> 
  <a href="administration2.php"><i class="fa fa-fw fa-address-card"></i>Hostel Administration</a>
  <a href="feedbackdb.php"><i class="fa fa-fw fa-comments-o"></i>Feedback</a>
  <a href="leavedb.php"><i class="fa fa-fw fa-tasks"></i>Leave Manager</a>
  <a href="complaintdb.php"><i class="fa fa-fw fa-question"></i>Complaints</a>
  
  <a href="first.php"><i class="fa fa-fw fa-sign-out"></i>Logout</a>
</div>
    <table>
        <tr>
        <th>Student name&nbsp;&nbsp;&nbsp;&nbsp;</th>
        <th>Admission no&nbsp;&nbsp;&nbsp;&nbsp;</th>
        <th>type&nbsp;&nbsp;&nbsp;&nbsp;</th>
        <th>From&nbsp;&nbsp;&nbsp;&nbsp;</th>
        <th>To&nbsp;&nbsp;&nbsp;</th>
        <th>Reason&nbsp;&nbsp;&nbsp;</th>
        <th>parent name&nbsp;&nbsp;&nbsp;</th>
        <th>parents contact&nbsp;&nbsp;&nbsp;</th>
        <th>Address</th>
        </tr>
        <?php
            $con=mysqli_connect("localhost","root","","leave");
            if($con->connect_error){
                die("connection error:".$conn->connect_error);
            }

            $sql="SELECT student,admission,ype,rom,yo,Reason,Parent,contact,ddress from leav ";
            $result=$con->query($sql);

            if($result->num_rows>0){
                while($row=$result->fetch_assoc()){
                    echo"<tr><td>".$row["student"]."</td><td>".$row['admission']."</td><td>".$row["ype"]."</td><td>".$row["rom"]."</td><td>".$row["yo"]."</td><td>".$row["Reason"]."</td><td>".$row["Parent"]."</td><td>".$row["contact"]."</td><td>".$row["ddress"]."</td></tr>";

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
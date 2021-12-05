<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complaints</title>
    <style type="text/css">
    table{
        border-collapse:collapse;
        width:80%;
        color:black;
        font-family:cursive;
        font-size:19px;
        text-align:left;
        padding:20px;
        margin-left:150px;
    }
    th{
        background-color:pink;
        color:black;
        font-size:21px;
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
  font-size: 21px;

}

.navbar a:hover {
  background-color: #000;
  
}
    tr:nth-child(even){background-color:#f2f2f2}
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
  
  <a href="http://localhost/project/first.php"><i class="fa fa-fw fa-sign-out"></i>Logout</a>
</div>
    <table>
        <tr>
        <th>Sno&nbsp;&nbsp;&nbsp;&nbsp;</th>
        <th>Date&nbsp;&nbsp;&nbsp;&nbsp;</th>
        <th>Room&nbsp;&nbsp;&nbsp;&nbsp;</th>
        <th>Complaint&nbsp;&nbsp;&nbsp;&nbsp;</th>
        <th>Complaint in Detail&nbsp;&nbsp;&nbsp;&nbsp;</th>
        </tr>
        <?php
            $con=mysqli_connect("localhost","root","","complaint");
            if($con->connect_error){
                die("connection error:".$conn->connect_error);
            }

            $sql="SELECT sno,dat,num,complaint,detail from comp ";
            $result=$con->query($sql);

            if($result->num_rows>0){
                while($row=$result->fetch_assoc()){
                    echo"<tr><td>".$row["sno"]."</td><td>".$row["dat"]."</td><td>".$row['num']."</td><td>".$row["complaint"]."</td><td>".$row["detail"]."</td></tr>";
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
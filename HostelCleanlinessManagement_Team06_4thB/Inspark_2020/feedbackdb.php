<!DOCTYPE html>
<html lang="en" style="margin:8px">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>feedbackdb</title>
    
    <style type="text/css">

    table{
        border-collapse:collapse;
        width:100%;
        color:black;
        font-family:cursive;
        font-size:17px;
        text-align:left;
        border:0px;
        padding:0px;

    }
    th{
        background-color:#5d68ac;
        color:white;
        font-size:19px;
        border:0px;
        padding:0px;

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
  font-size: 19px;

}

.navbar a:hover {
  background-color: #000;
  
}
 
    tr:nth-child(even){background-color:#ebe0e2}
    tr:nth-child(odd){background-color:white}
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
    <table >
    
        <th>Date and Time&nbsp;&nbsp;&nbsp;</th>
        <th>Room Number&nbsp;&nbsp;&nbsp;</th>
        <th>Maid Name&nbsp;&nbsp;&nbsp;</th>
        <th>Sweep&nbsp;&nbsp;&nbsp;</th>
        <th>Comment on Sweeping</th>
        <th>Mop&nbsp;&nbsp;&nbsp;</th>
        <th>Comment on Mopping</th>
        <th>Cobwebs&nbsp;&nbsp;&nbsp;</th>
        <th>Floor&nbsp;&nbsp;&nbsp;</th>
        <th>Washroom&nbsp;&nbsp;&nbsp;</th>
        <th> Issues&nbsp;&nbsp;&nbsp;</th>
        </tr>
        <?php
            $con=mysqli_connect("localhost","root","","feedback"); if($con->connect_error){
                die("connection error:".$conn->connect_error);
            }
            $sql_get1=mysqli_query($con,"SELECT * from feed where statu=0");
            
            $sql="SELECT dat,roo,maidname,sweep,ifyes,mop,ifyes1,cobwebs,floo,washroom,issues from feed";
            $result=$con->query($sql);
            if($result->num_rows>0){
                while($result1=mysqli_fetch_assoc($sql_get1)){
         ?>
           <tr>
              <td><?php echo $result1['dat']?></td>
            <td><?php echo $result1['roo']?></td>
               <td><?php echo $result1['maidname']?></td>
               <td><?php echo $result1['sweep']?></td>
               <td><?php echo $result1['ifyes']?></td>
               <td><?php echo $result1['mop']?></td>
               <td><?php echo $result1['ifyes1']?></td>
               <td><?php echo $result1['cobwebs']?></td>
               <td><?php echo $result1['floo']?></td>
               <td><?php echo $result1['washroom']?></td>
               <td><?php echo $result1['issues']?></td>
               </tr>
    
    <?php
     }
    }
    
$con->close();

        ?>
</body>
</html>




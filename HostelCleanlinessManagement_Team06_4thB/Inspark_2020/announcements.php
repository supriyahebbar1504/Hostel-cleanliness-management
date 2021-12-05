<!DOCTYPE html>
<html>
<head>
	<title>Announcements</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
	body  {
  
   background-image: url("https://images.unsplash.com/photo-1496678518751-46244eef08c4?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80");
    
  
   background-size: 1550px 880px;
   background-attachment: fixed;
 
  
 }
 *{
			font-family: cursive;
			font-size: 17px;
		}
		form{
			font-size: 30px;
				margin-left: 450px;
			padding: 20px 20px 20px 100px;
		}
 textarea{
	        width: 500px;
	        height:500px;
     		padding: 5px 5px;
    	    margin: 8px 0;
            background-color:#0d0a0a;
  			color:white;
  			border: 3px solid black;
  			-webkit-transition: 0.5s;
  			transition: 0.5s;
  			outline: none;
  			border-radius: 5px;
              opacity:0.8;
  		}
  			



  button{
  	
	padding: 10px 32px 10px 32px;
	background-color:#3F51B5;
	color: white;
    cursor: pointer;
    margin-left: 200px;
}
	
button:hover{
    background-color:white;
    color:black;
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

	
</style>
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
		<div class="box">
   	
   	<form action="#" method="POST">
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:Announcement in Details:<br>
  		<textarea name="text" rows="5" cols="50" required placeholder="You can write here.."></textarea><br>
  		<button  name="submit" id="su" onclick="alert('Succesfully Announced')">Send</button>
  		
  		
  	</form>
	  <?php
$host="localhost";
$user="root";
$password="";
$db="announcement";

$con=mysqli_connect($host,$user,$password,$db);
mysqli_select_db($con,$db);
if($con==false){
	echo"could not connect";

}


if(isset($_POST['submit'])){


$detail=$_POST['text'];


$query="INSERT INTO anno (announcements) values('$detail')";
$result=mysqli_query($con,$query) or die("error in pushing: ".mysqli_error($con));
}
?>
   </div>
</div>
</body>




<!DOCTYPE html>
<html>
<head>
	<title>Leave Manager</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
	 body  {
  
   background-image: url("https://octoclean.com/wp-content/uploads/2019/07/office-plant-cleaning.jpg");
  
   background-size: 1600px 680px;
   background-attachment: fixed;
 
  
 }
		*{
			font-family: cursive;
			font-size: 17px;
		}
		form{
			padding: 20px;
		}
		.container{
			margin-top: 20px;
			border:ridge;
			margin-left: 450px;
			box-shadow: 2px 2px 2px 2px grey;
			width: 600px;
			position: absolute;
        background: rgba(0, 0, 0, 0.5); 
        color: white;
    }
		form{
			padding: 20px 20px 20px 100px;
		}
	   input {
     		width: 330px;
     		padding: 5px 5px;
    	    margin: 8px 0;
  			
  			border: 3px solid #ccc;
  			-webkit-transition: 0.5s;
  			transition: 0.5s;
  			outline: none;
  			border-radius: 5px;
  			
  			
}
select{
	        width: 345px;
     		padding: 5px 5px;
    	    margin: 8px 0;
  			
  			border: 3px solid #ccc;
  			-webkit-transition: 0.5s;
  			transition: 0.5s;
  			outline: none;
  			border-radius: 5px;
  			
  			
}
textarea{
	        width: 340px;
     		padding: 5px 5px;
    	    margin: 8px 0;
  			
  			border: 3px solid #ccc;
  			-webkit-transition: 0.5s;
  			transition: 0.5s;
  			outline: none;
  			border-radius: 5px;
  			
  			
}
input:focus {
  			border: 3px solid black;
}
select:focus {
  			border: 3px solid black;
}
textarea:focus {
  			border: 3px solid black;
}
button{
	
	padding: 10px 32px 10px 32px;
	background-color: black;
	color: white;
    cursor: pointer;
    margin-left: 12px;

}

.navbar {
  width: 100%;
  background-color:#555 ;
  overflow: auto;
  z-index: -1;
  margin-top: 0;
  

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

button:hover{
    color: #ffcc99;}
@media screen and (max-width: 500px) {
  .navbar a {
    float: none;
    display: block;
  }
}
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

	<div class="container">
		<h1 align="center" style="color: black; font-size: 25px;text-shadow: 1px 1px white;">New Leave Request</h1><hr>
		<form method="POST" action='#'>
			
			Name :<br>
			<input type="text" name="stu" placeholder="Enter your name" required><br><br>
			Admission number :<br>
			<input type="text" name="adn" placeholder="Enter your admission number" required><br><br>
			Leave type :<br>
			<select name="type" required><option>Regular</option><option>Outpass</option></select><br><br>
			Select the dates and Out time :<br>
			From :<input type="date" name="frm" style="width: 285px;"><br><pre>    To :<input type="date" name="to" style="width: 285px;"></pre><br>
			Reason :<br>
			<select name="rsn" required><option>Semester end</option><option>Sick Leave</option><option>Emergency</option><option>Local Guardian</option><option>Other</option></select><br><br>
			Parent Name :<br>
			<input type="text" name="prnt" placeholder="Enter your parent name" required><br><br>
			Parent contact info :<br>
			<input type="text" name="phn" placeholder="Enter Parent phone no." required><br><br>
			Visiting address :<br>
			<textarea  name="addr" rows="5" cols="50" required></textarea><br><br>
			Mode of Transportation :<br>
			<input type="text" name="mot" placeholder="Eg:Bus" required><br><br>
			<button type="submit" name="submit">Submit</button><button type="reset" style="background-color: red;margin-left: 15px;">Cancel</button>

		</form>
		<?php
$host="localhost";
$user="root";
$password="";
$db="leave";

$con=mysqli_connect($host,$user,$password);
mysqli_select_db($con,$db);
if($con==false){
	echo"could not connect";

}


if(isset($_POST['submit'])){

$stud=$_POST['stu'];
$admi=$_POST['adn'];
$type=$_POST['type'];
$from=$_POST['frm'];
$to=$_POST['to'];
$rsn=$_POST['rsn'];
$parent=$_POST['prnt'];
$phone=$_POST['phn'];
$address=$_POST['addr'];
$mot=$_POST['mot'];

$query="INSERT INTO leav (student,admission,ype,rom,yo,Reason,Parent,contact,ddress,Through) values('$stud','$admi','$type','$from','$to','$rsn','$parent','$phone','$address','$mot')";
$result=mysqli_query($con,$query) or die("error in pushing: ".mysqli_error($con));
}
?>
	</div>

</body>
</html>

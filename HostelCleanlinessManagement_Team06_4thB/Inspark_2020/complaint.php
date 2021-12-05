<!DOCTYPE html>
<html>
<head>
	<title>My Complaints</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		body  {
  
   background-image: url("https://octoclean.com/wp-content/uploads/2019/07/office-plant-cleaning.jpg");
  
   background-size: 1800px 680px;
   background-attachment: fixed;
 
  
 }
		*{
			font-family: cursive;
			font-size: 17px;
		}
		
		.box{
			margin-top: 20px;
			border-style:ridge;
			margin-left: 450px;
			box-shadow: 2px 2px 2px 2px black;
			width: 600px;
			position: center;
  
        background: rgb(0, 0, 0);
        background: rgba(0, 0, 0, 0.5); 
        color: #f1f1f1;
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
	        width: 345px;
     		padding: 5px 5px;
    	    margin: 8px 0;
  			
  			border: 3px solid #ccc;
  			-webkit-transition: 0.5s;
  			transition: 0.5s;
  			outline: none;
  			border-radius: 5px;
  			

  			
}
input:focus {
  			border: 3px solid #555;
}
select:focus {
  			border: 3px solid #555;
}
textarea:focus {
  			border: 3px solid #555;
}
button{
	
	padding: 10px 32px 10px 32px;
	background-color: black;
	color: white;
    cursor: pointer;
    margin-left: 12px;

}
button[type="reset"]:hover {
  background:#1111;
  color: black;
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

   <div class="box">
   	<h2 align="center" style="color: white; text-shadow: 1px 1px white; font-size: 25px;">Submit your Issue</h2><hr>
   	<form method="POST" action="#">
  		Date of filling:<br>
  		<input type="date" name="dof" required><br><br>
		Room number:<br>
  		<input type="text" name="num" required><br><br>
  		Complaint is regarding:<br>
  		<select name="compp" required><option>Fans and Tubelights</option><option>Electricity</option><option>Drinking water</option><option>Water supply</option><option>Vending machine</option><option>Other Requirements</option></select><br><br>
  		Details of the complaint:<br>
  		<textarea  name="det" rows="5" cols="50" required placeholder="You can write here.."></textarea><br>
  		<button name="submit" id="su" onclick="alert('We will reach you soon with a solution!!')">Send</button><button type="reset" style="background-color:  #e60000;">Reset</button>
  	</form>
	  <?php
$host="localhost";
$user="root";
$password="";
$db="complaint";

$con=mysqli_connect($host,$user,$password,$db);
mysqli_select_db($con,$db);
if($con==false){
	echo"could not connect";

}


if(isset($_POST['submit'])){

$dob=$_POST['dof'];
$num=$_POST['num'];
$com=$_POST['compp'];
$detail=$_POST['det'];


$query="INSERT INTO comp (dat,num,complaint,detail) values('$dob','$num','$com','$detail')";
$result=mysqli_query($con,$query) or die("error in pushing: ".mysqli_error($con));
}
?>
   </div>
</body>
</html>

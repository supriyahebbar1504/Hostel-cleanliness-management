<?php
$host="localhost";
$user="root";
$password="";
$db="signup";

$con=mysqli_connect($host,$user,$password);
mysqli_select_db($con,$db);
if($con==false){
	echo"could not connect";

}


if(isset($_POST['submit'])){

$name=$_POST['frstname'];
$sname=$_POST['lstname'];
$adno=$_POST['adm'];
$usn=$_POST['usn'];
$dob=$_POST['bday'];
$email=$_POST['email'];
$mob=$_POST['mob'];
$hostel=$_POST['hostel'];
$room=$_POST['rm'];
$password=$_POST['pass'];

$query="INSERT INTO sign (firstname,lastname,admissionno,usn,dob,email,mobile,hostel,roomno,pass) values('$name','$sname','$adno','$usn','$dob','$email','$mob','$hostel','$room','$password')";
$result=mysqli_query($con,$query) or die("error in pushing".mysqli_error($con));
header("login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>SignUp Page</title>
	<style type="text/css">
body  {
  
   background-image: url("https://www.cardycareercoaching.com/wp-content/uploads/2017/10/background-table-plants-1024x683.jpeg");
  
   background-size: 1600px 720px;
   background-attachment: fixed;
 
  
 }

form{
			
			
			font-family: cursive;
		  margin-left: 450px;
		  margin-top: 0;
		  padding:200px 20px 20px 20px;
      background: rgb(0, 0, 0);
        background: rgba(0, 0, 0, 0.5); 
        color: #f1f1f1;
        margin-top: 20px;
      border-style: ridge;
    
      box-shadow: 2px 2px 2px 2px grey;
      width: 550px;
      position: absolute;
			
		    	}
input {
     		width: 350px;
     		padding: 10px 20px;
    	    margin: 8px 0;
  			 font-size: 17px;
  			border: 3px solid #ccc;
  			-webkit-transition: 0.5s;
  			transition: 0.5s;
  			outline: none;
  			border-radius: 5px;
  			font-family: cursive;
  			
}
select{
	width: 390px;
     		padding: 10px 20px;
    	    margin: 8px 0;
  			font-size: 17px;
  			border: 3px solid #ccc;
  			-webkit-transition: 0.5s;
  			transition: 0.5s;
  			outline: none;
  			border-radius: 5px;
  			font-family: cursive;
  			
}
input:focus {
  			border: 3px solid black;
}


.logo {
  border-radius: 50%;
    position: absolute;
   
    left: calc(50% - 50px);
  border-style: solid;
    left: 690px;
  top: 70px;
  width: 150px;
  opacity: .9;
}
button{
  background-color: black;
  border: 1px solid white;
  color: white;
  padding: 10px 24px;
  cursor: pointer;
  
  box-shadow: 2px 2px black;
  font-size: 20px;
    
}


button :after {
  content: "";
  clear: both;
  display: table;
}

button:hover {
  background-color: #ffbf80;
  color: black;
}
table {
    margin: 0px;
    border-collapse: collapse;
    padding: 0px;
   
}
.frm{
	margin: 0;
	padding: 0;
}

</style>
</head>
<body>
  <img src="https://image.flaticon.com/icons/png/512/44/44948.png" class="logo">
	<div class="frm">
  	<form method="POST" action='#'><hr>
  		<table>
  			<tbody><tr valign="top"><td colspan="2" style="padding-left: 70px;"><h2 align="center" style="color: #ffbf80; text-shadow: 1px 1px white;">New Users please fill the form!</h2></td><td></td></tr>
  	    <tr><th>First name:</th><td><input type="text" name="frstname" placeholder="Enter your First name" autocomplete="off" required></td></tr>
  		<tr><th>Last name:</th><td><input type="text" name="lstname" placeholder="Enter your Last name" autocomplete="off" required></td></tr>
  		<tr><th>Admission no.:</th><td><input type="text" name="adm" placeholder="Enter your Admission number" autocomplete="off" required></td></tr>
  		<tr><th>USN:</th><td><input type="text" name="usn" placeholder="Enter your usn" autocomplete="off" required></td></tr>
  		<tr><th>Date of Birth:</th><td><input type="date" name="bday" autocomplete="off" required></td></tr>
      	<tr><th>E-mail:</th><td><input type="email" name="email" placeholder="Enter your e-mail id" autocomplete="off" required></td></tr>
  		<tr><th>Mob no.:</th><td><input type="text" name="mob" placeholder="Enter your mobile number" autocomplete="off" required></td></tr>
  		<tr><th>Hostel:</th><td><select name="hostel" required><option>Netravathi</option><option>Kumaradhara</option> <option>Souparnika</option><option>Nandini</option><option>Shambhavi</option><option>Kaveri</option><option>R Cube</option></select></td></tr>
  		<tr><th>Room no.:</th><td><input type="text" name="rm" placeholder="Enter your room number" autocomplete="off" required></td></tr>
		  <tr><th>Password:</th><td><input type="text" name="pass" placeholder="create your password here" autocomplete="off" required></td></tr>
</tbody>
  	</table><br>
  		<button style="margin-left: 200px; font-family: cursive; margin-bottom: 10px;"name="submit" id="su" onclick="alert('Account created successfully')">Sign up</button>
  	</form>
 
 </div>
 
</body>
</html>


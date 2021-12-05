<?php
	$host="localhost";
	$user="root";
	$password="";
	$db="signup";

	$con=mysqli_connect($host,$user,$password);
	mysqli_select_db($con,$db);
	if(isset($_POST['submit'])){
		$uname=$_POST['username'];
		$password=$_POST['password'];

		$sql="select *from sign where admissionno ='".$uname."'AND pass='".$password."'limit 1";
		$result=mysqli_query($con,$sql);

		if(mysqli_num_rows($result)==1){
      header('homepage.php');
			exit();

		}
		else{
	  echo"you have enterd incorrect password";
			exit();
      

		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>LOGIN-PAGE</title>
	<style type="text/css">
body  {
  
   background-image: url("https://www.cardycareercoaching.com/wp-content/uploads/2017/10/background-table-plants-1024x683.jpeg");
  
   background-size: 1600px 720px;
   background-attachment: fixed;
 
  
 }

form{
	    font-family: cursive;
		margin-left: 520px;
        margin-bottom:20px;
		
		padding:200px 20px 20px 20px;
       
        background: rgba(0, 0, 0, 0.5); 
        color: #f1f1f1;
        margin-top: 20px;
        border-style: ridge;
     
      box-shadow: 2px 2px 2px 2px grey;
      width: 450px;
      position: absolute;
		    
			
	}
input[type=text] {
     		width: 100%;
     		padding: 12px 20px;
    	    margin: 8px 0;
  			box-sizing: border-box;
  			border: 3px solid #ccc;
  		
  			transition: 0.5s;
  			outline: none;
  			border-radius: 5px;
  			font-family: cursive;
  			opacity: 1;
}
input[type=password] {
    	    width: 100%;
   		    padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
            border: 3px solid #ccc;
			-webkit-transition: 0.5s;
  			transition: 0.5s;
  			outline: none;
  			border-radius: 5px;
  			font-family: cursive;
  			opacity: 1;
}

input[type=text]:focus {
  			border: 3px solid black;
}
input[type=password]:focus {
  			border: 3px solid black;
}
.form{
	
	top: 40px;
	position: absolute;
	z-index: -1;

	
  

}
.logo {
	border-radius: 50%;
    position: absolute;
   
    left: calc(50% - 50px);
	border-style: solid;
    left: 700px;
	top: 90px;
	width: 150px;
	opacity: .9;
}
 input[type="submit"]
{
    border:ridge;
    outline:none;
    height:40px;
    background:black;
    color:white;
    font-size:18px;
    width:131px;
    padding:0px 0px 0px;
	margin-top:18px;
	font-family:cursive;
	margin-left: 160px;
	margin-bottom: 20px;
}
input[type="submit"]:hover{
cursor: pointer;
background:#ffbf80;
color:black;
}


	</style>

</head>
<body>
	<img src="https://image.flaticon.com/icons/png/512/44/44948.png" class="logo">
  <div class="form">
  	
  <form method="POST" action='#'>
  		<hr>
  		<label>Username</label><br>
  		<input type="text" name="username" placeholder="Enter your admission number" autocomplete="off" id="myin" required><br><br>

  		<label>Password</label><br>
  		<input type="password" name="password" placeholder="Enter Password" id="myinput"  required>
  		<input type="checkbox" onclick="myFunction()">Show Password 
  		<span style="float: right;"><a href="http://localhost/project/forgotpassword.php" style="color: white;" >Forgot Password?</a></span><br><br>
  		<input type="submit" name="submit"value="LOGIN" >
  	</form>
  </div>
  <script type="text/javascript">
  	function myFunction() {
  var x = document.getElementById("myinput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}	 
 </script>
  
</body>
</html>

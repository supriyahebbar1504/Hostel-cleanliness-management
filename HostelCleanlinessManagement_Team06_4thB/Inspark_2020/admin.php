<?php
	$host="localhost";
	$user="root";
	$password="";
	$db="demo";

	$con=mysqli_connect($host,$user,$password);
	mysqli_select_db($con,$db);
	if(isset($_POST['submit'])){
		$uname=$_POST['username'];
		$password=$_POST['password'];

		$sql="select *from login where user ='".$uname."'AND pass='".$password."'limit 1";
		$result=mysqli_query($con,$sql);

		if(mysqli_num_rows($result)==1){
      header('Location: afteradmin.php');
			exit();

		}
		else{
      echo"you have enterd incorrect password";
      exit();
      

		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin login</title>
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript">
        function redirect(){
            window.location="homepage.php";
        }
        </script>

        
</head>
<body>
    
    <div class="frontpage">
     
        <img class="index" src="https://www.cardycareercoaching.com/wp-content/uploads/2017/10/background-table-plants-1024x683.jpeg" alt="background">
    </div>
    <div class="login">
        <img src="avatar.png" alt="oo"class="avtar">
        <h1>ADMIN LOGIN</h1>
        <form method='POST'action="#">
            <p>Username</p>
            <input type="Username" name="username"placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="password" id="myinput" placeholder="Enter Password">
            
            <input type="checkbox" onclick="myFunction()">Show Password<br>
            <input type="submit" name="submit"value="LOGIN" onclick="redirect()" ><br>
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
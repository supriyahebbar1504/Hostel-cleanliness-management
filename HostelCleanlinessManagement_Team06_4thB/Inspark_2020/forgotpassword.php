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

$name=$_POST['username'];
$new_pass=$_POST['password'];
$updatequery="UPDATE  sign SET pass='$new_pass' where admissionno='$name' ";
if (mysqli_query($con,$updatequery)){
}
else{
    echo"error ".mysqli_error($con);
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Forgot Password</title>
	<style type="text/css">
body  {
  
   background-image: url("https://wallpaperaccess.com/full/521148.jpg");
   background-size: 1550px 880px;
   background-attachment: fixed;
 
  
 }

form{
	    font-family: cursive;
		margin-left: 500px;
		
		padding:200px 20px 20px 20px;
       
        background: rgba(0,0,0,0.5); 
        color: #f1f1f1;
        margin-top: 100px;
        border-style: groove;
        border-radius: 15px 50px;

     
      box-shadow: 2px 2px 2px 2px black;
      width: 450px;
      position: absolute;
		    
			
	}
input[type=text] {
     		width: 100%;
     		padding: 12px 20px;
    	    margin: 10px 0;
  			box-sizing: border-box;
  			border: 3px solid #ccc;
  			-webkit-transition: 0.5s;
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
	
    position: absolute;
   
    left: calc(50% - 50px);
	
    left: 688px;
	top: 163px;
	width: 125px;
}
button{
  background-color: black;
  border: 1px solid silver;
  border-radius: 5px;
  color: yellow;
  padding: 10px 30px;
  cursor: pointer;
  box-shadow: 2px 2px grey;
  font-size: 18px;
  margin-left: 160px;
    
}



button :after {
  content: "";
  clear: both;
  display: table;
}

button:hover {
  background-color: #f1f1f1;
  color: black;
}

h1{
  color: black;
  font-family: cursive;
  opacity: 5;
  font-size: 50px;
  margin-top: 1px;
  margin-bottom: 1px;
  margin-left: 470px;
  font-weight: bold;
}




	</style>

</head>
<body>
  <h1>Forgot your password?</h1>
	<img src="https://img.icons8.com/ios-filled/50/000000/forgot-password.png" class="logo">
 
  <div class="form">
  <form method="POST">
      <hr>
  		<label> admission number: </label><br>
  		<input type="text" name="username" placeholder=" enter your admission number" autocomplete="off" required><br><br>
      <label> create new password: </label><br>
      <input type="text" name="password" placeholder="enter new password" autocomplete="off" required><br><br>


  		
      <button name="submit" class="btn" onclick="alert('your password has been updated')">Update</button>
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
    document.getElementById("lgn").onclick = function (){
      location.href = "homepage.html";
    }
    
  </script>
</body>
</html>

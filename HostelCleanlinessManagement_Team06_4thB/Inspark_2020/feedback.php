
<!DOCTYPE html>
<html>
<head>
	<title>Feedback</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		body  {
  
   background-image: url("https://www.cardycareercoaching.com/wp-content/uploads/2017/10/background-table-plants-1024x683.jpeg");
  
   background-size: 1600px 720px;
   background-attachment: fixed;
 
  
 }
		*{
			font-family: cursive;
			font-size: 19px;
		}
		
		.box{
			margin-top: 20px;
			border-style: ridge;
			margin-left: 450px;
			box-shadow: 2px 2px 2px 2px grey;
			width: 600px;
			position: absolute;
  
        background: rgba(0, 0, 0, 0.5); 
        color: #f1f1f1;
    }
		form{
			padding: 20px 20px 20px 100px;

		}
		ol{
			padding-left: 10px;
		}
	
input[type="datetime-local"],select {
     		width: 383px;
     		padding: 5px 5px;
    	    margin: 8px 0;
  			
  			border: 3px solid #ccc;
  			-webkit-transition: 0.5s;
  			transition: 0.5s;
  			outline: none;
			  border-radius: 5px;}

input[type="text"] {
     		width: 383px;
     		padding: 5px 5px;
    	    margin: 8px 0;
  			
  			border: 3px solid #ccc;
  			-webkit-transition: 0.5s;
  			transition: 0.5s;
  			outline: none;
  			border-radius: 5px;
  			
  			
}

textarea{
	        width: 400px;
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
    margin-left: 146px;

}
input[type="radio"],input[type="checkbox"]{
	margin-left: 50px;
}
label{
	color: white;
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


@media screen and (max-width: 500px) {
  .navbar a {
    float: none;
    display: block;
  }
}
button:hover{
    color: #ffcc99;}
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
   	<h2 align="center" style="color: yellow; text-shadow: 1px 1px white; font-size: 25px;">Please fill the Feedback form</h2><hr>
   	<form method="POST" action="#">
	   Admission number:<br>
  		<input type="text" name="num" required><br><br>
		  Room number:<br>
  		<input type="text" name="num" required><br><br>
  		Maid Name:<br>
  		<select name="maid" required><option>Kantha S</option><option>Urmila</option><option>Sita </option><option>Latha</option><option>Uma</option><option>Sheetha</option><option>Durga</option></select><br><br>
		  Did they sweep your room?:<br>
  		<select name="sweep" required><option>YES</option><option>NO</option>></select><br><br>
  		&emsp;&emsp;&emsp;If yes,<br>
  		
		  &emsp;&emsp;&emsp;<select name="yes" required><option>Satisfied</option><option> Can be improved</option><option>Not satisfied </option></select><br><br>
		Did they mop your room?:<br>
  		<select name="mop" required><option>YES</option><option>NO</option>></select><br><br>&emsp;&emsp;&emsp; If Yes,<br>
		  &emsp;&emsp;&emsp;<select name="yes1" required><option>Satisfied</option><option> Can be improved</option><option>Not satisfied </option></select><br><br>
  		
		Is dusting of cobwebs done?:<br>
  		<select name="cobweb" required><option>YES</option><option>NO</option>></select><br><br>
		  Did they clean your floor?:<br>
  		<select name="floor" required><option>YES</option><option>NO</option>></select><br><br>
		  Did they clean the washrooms?:<br>
  		<select name="wroom" required><option>YES</option><option>NO</option>></select><br><br>
  		
        <li>Any issues ? </li><br>
  		<textarea rows="5" cols="50" name="issue" placeholder="You can write here.."></textarea><br></ol>
  		<button name="submit" id="su" onclick="alert('Thank You')">Submit</button>
  	</form>
	  <?php
$host="localhost";
$user="root";
$password="";
$db="feedback";

$con=mysqli_connect($host,$user,$password);
mysqli_select_db($con,$db);
if($con==false){
	echo"could not connect";

}
if(isset($_POST['submit'])){
$numb=$_POST['num'];
$maid=$_POST['maid'];
$swee=$_POST['sweep'];
$che=$_POST['yes'];
$mop=$_POST['mop'];
$che3=$_POST['yes1'];
$cob=$_POST['cobweb'];
$floo=$_POST['floor'];
$room=$_POST['wroom'];
$issue=$_POST['issue'];

$query="INSERT INTO feed (roo,maidname,sweep,ifyes,mop,ifyes1,cobwebs,floo,washroom,issues) values('$numb','$maid','$swee','$che','$mop','$che3','$cob','$floo','$room','$issue')";
$result=mysqli_query($con,$query) or die("error in pushing".mysqli_error($con));
}
?>
  	<script type="text/javascript">
  		function onlyOne(checkbox) {
    var checkboxes = document.getElementsByName('check')
    checkboxes.forEach((item) => {
        if (item !== checkbox) item.checked = false
    })
}
     function onlyOne1(checkbox) {
    var checkboxes = document.getElementsByName('check1')
    checkboxes.forEach((item) => {
        if (item !== checkbox) item.checked = false
    })
}
  	</script>
   </div>

</body>
</html>
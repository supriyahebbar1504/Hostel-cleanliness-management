<!DOCTYPE html>
<html>
<head>
	<title>WELCOME</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style type="text/css">
    .bdy {
  content: "";
   background-image: url("https://images.static-collegedunia.com/public/college_data/images/campusimage/1475214728Nitte-Meenakshi-Institute-of-Technology-Aerial-Shot-Bangalore.jpg");
  background-repeat: no-repeat;
  background-size: 1600px 717px;
  
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  position: absolute;
  z-index: -1;
  

}
.container {
  margin-top: 200px;
  position: relative;
  width: 50%;
  max-width: 300px;
}

.image {
  display:ease;
  width: 80%;
  height: auto;
}

.overlay {
  position: absolute; 
  bottom: 0; 
  background: rgb(0, 0, 0);
  background: rgba(0, 0, 0, .6); 
  color: #1111;
  width: 70%;
  transition: .5s ease;
  opacity:0;
  color: white;
  font-size: 20px;
  padding: 20px;
  text-align: center;
}

.container:hover .overlay {
  opacity: 1;
}
td{
  width: 300px;
  height: 500px;
}
table{
  margin-left: 150px;
  width: 100%;
}

 </style>
</head>
<body>
  
  <marquee ><h1>Welcome to NMIT Hostel Cleanliness Management System</h1></marquee>
  <div class="bdy">
    <table>
  <tr><td> <div class="container">
 <a href="admin.php"> <img src="https://i.ya-webdesign.com/images/suit-icon-png-4.png" class="image" style="opacity: .9 ;width: 200px;">
  <div class="overlay"> Admin?</div></a>
</div></td><td>
<div class="container">
 <a href="login.php"><img src="https://image.flaticon.com/icons/png/512/44/44948.png" class="image" style="opacity: .9; width: 200px;">
  <div class="overlay"> User?</div></a>
</div></td>
<td> <div class="container">
 <a href="signup.php"><img src="https://image.flaticon.com/icons/png/512/50/50041.png" class="image" style="opacity: .9; width:200px;">
  <div class="overlay"> New User?</div></a>
</div></td></table>
  </div>

</body>
</html>

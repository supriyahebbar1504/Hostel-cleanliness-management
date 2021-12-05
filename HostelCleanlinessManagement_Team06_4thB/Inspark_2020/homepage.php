<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {
  font-family: cursive;
}

.sidebar {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidebar a {
  padding: 8px 8px 8px 30px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidebar a:hover {
  color: #f1f1f1;
}

.sidebar .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

.openbtn {
  font-size: 20px;
  cursor: pointer;
  background-color: #111;
  color: white;
  padding: 10px 15px;
  border: none;
}

.openbtn:hover {
  background-color: #444;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

@media screen and (max-height: 
  450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}
.fa {
  padding: 20px;
  font-size: 30px;
  width: 50px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: rgba(59, 89, 152, 1);
  color: white;
}

.fa-twitter {
  background:   rgba(0, 172, 237, 1);
  color: white;
}
.fa-instagram {
  background: rgba(188, 42, 141, 1);
  color: white;
}

body{
  background-image:url("https://www.nmit.ac.in/img/banner_2.jpg"); 
  z-index: -1;
  position: absolute;
  background-attachment: fixed;
  background-size:1600px 780px;
}
.container {
  position: absolute;
  top: 250px;

  background: rgb(0, 0, 0);
  background: rgba(0, 0, 0, 0.5); 
  color: white;
  width: 1200px;
  padding: 1px  200px;
}
ol li {
  counter-increment: list;
  list-style-type: none;
  position: relative;
}

ol li:before {
  color: white;
  content: counter(list) ".";
  left: -32px;
  position: absolute;
  text-align: right;
  width: 26px;
  top: 10px;
}
</style>
</head>
<body>

<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a> 
  <ol>
 <li> <a href="homepage.php">Home</a></li>

 <li> <a href="myprofile.php">My Profile</a></li>
  <li><a href="announcementdb.php">Announcements</a></li>
  <li> <a href="administration.php">Hostel Administration</a></li>
  <li><a href="feedback.php">Feedback</a></li>
  <li><a href="leavemanager.php">Leave Manager</a></li>
  <li><a href="complaint.php">My Complaints</a></li>
  
 <li> <a href="first.php">Logout</a></li></ol>

</div>

<div id="main">
  <button class="openbtn" onclick="openNav()">☰</button>  
 
</div>
<div class="container">
  <img src="https://www.nmit.ac.in/img/nitte_nmit_logo.png">
  <h5>CONTACT NMIT:</h5>
        <address>
        Nitte Meenakshi Institute of Technology,
P.B.No.6429, Yelahanka, Bangalore 560064.  
        </address>
        <p>Ph : +91 80 22167800</p>
<p>E-mail: <a href="mailto:admissions@nmit.ac.in">admissions@nmit.ac.in</a> , <a href="mailto:principal@nmit.ac.in">principal@nmit.ac.in</a></p><p> <a href="https://www.facebook.com/NitteMeenakshiInstituteOfTechnology/" class="fa fa-facebook"></a>
<a href="https://twitter.com/nmitbangalore" class="fa fa-twitter"></a>
<a href="https://www.instagram.com/nmitbangalore/?hl=en" class="fa fa-instagram"></a></p>

</div>

<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "230px";
  document.getElementById("main").style.marginLeft = "230px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}

</script>
   
</body>
</html>

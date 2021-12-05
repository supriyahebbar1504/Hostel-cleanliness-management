<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
   
   <style type="text/css">
   body{
       
    background-image: url("https://trusaic.com/wp-content/uploads/2019/01/AdobeStock_234000479.jpg");
    background-repeat: no-repeat;
    background-position: cover;
    background-size: 1800px 1000px;
   }
        .navbar {
  width: 100%;
  background-color:#7a1f5c ;
  overflow: auto;
  z-index: -1;
  margin-top: 0;
  

}
ul{
    list-style-type:none;
    
}
ul li{
    padding:25px;
    margin:25px;

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
    color: #ffcc99;
}
@media screen and (max-width: 500px) {
  .navbar a {
    float: none;
    display: block;
  }
}
.tablesys{
    text-align: center;
}
table {
    width: 80%;
    margin-top: 100px;
}

table ,th,td{
    border:1px solid #ffcc99;
    height:25px;
    font-size:18px;
    padding:0px;
    border-collapse: collapse;
    margin-left: 100px;
    background-color: #fff;
}
    
th, td {
  border-bottom: 1px solid #ddd;
    }
td {
  height: 50px;
  vertical-align:center;
} 


th {
  height: 50px;
}

form{
     margin-top: 50px;
     text-align: center;
     color: #ccc;
     
}
.plchod{
    color:aliceblue;
    margin:30px;
}
.btnsty{
     
}
input {
             width: 250px;
             padding: 10px 20px;
            margin: 8px 0;
               font-size: 17px;
              border: 3px solid #ccc;
              -webkit-transition: 0.5s;
              transition: 0.5s;
              outline: none;
              border-radius: 5px;
              font-family:'Times Nerfw Roman', Times, serif;

              
}
.btnsty{
  
 
  color: white;
  padding:10px;
  cursor: pointer;
  
  font-size: 20px;
    
}


.btnsty:after {
  content: "";
  clear: both;
  display: table;
}



        </style>
</head>
<body>
<div>
     
     
    </div>

<div class="navbar">
  <a href="http://localhost/project/homepage.php"><i class="fa fa-fw fa-home"></i>Home</a> 
  <a href="http://localhost/project/myprofile.php"><i class="fa fa-fw fa-user"></i>My Profile</a> 
  <a href="http://localhost/project/announcementdb.php"><i class="fa fa-fw fa-bullhorn"></i>Announcements</a> 
 
   <a href="http://localhost/project/administration.php"><i class="fa fa-fw fa-address-card"></i>Hostel Administration</a>
  <a href="http://localhost/project/feedback.php"><i class="fa fa-fw fa-comments-o"></i>Feedback</a>
  <a href="http://localhost/project/leavemanager.php"><i class="fa fa-fw fa-tasks"></i>Leave Manager</a>
  <a href="http://localhost/project/complaint.php"><i class="fa fa-fw fa-question"></i> My Complaints</a>
  
  <a href="http://localhost/project/first.php"><i class="fa fa-fw fa-sign-out"></i>Logout</a>
</div> 
<form action="" method="POST">
   <div class="plchod"> <input type="email" name="email" placeholder="Enter the Email id" ></div>
    <div class="btnsty"> <input type="submit" name="search" value="SUBMIT "></div>
</form>
    <div class="tablesys"> 
<table>
      <tr>
         <th>Fisrt Name</th>
         <th>Last Name</th>
          <th>Admission number</th>
          <th>USN</th>
          <th>Date of Birth</th>
          <th>Mobile Number</th>
          <th>EMAIL</th>
          <th>Hostel</th>
         <th>Room Number</th>
         <th>Operation</th>
        </tr>




   
<?php
 
$connection=mysqli_connect("localhost","root","","signup");
$db=mysqli_select_db($connection,'signup');

if(isset($_POST['search']))
  {
     $email=$_POST['email'];
     $selectquery="SELECT *from `sign` where email='$email' ";
  
     $query_run=mysqli_query($connection,$selectquery);
     while($row=mysqli_fetch_array($query_run))
     {
         ?>
           <tr>
              <td><?php echo $row['firstname']?></td>
            <td><?php echo $row['lastname']?></td>
               <td><?php echo $row['admissionno']?></td>
               <td><?php echo $row['usn']?></td>
               <td><?php echo $row['dob']?></td>
               
               <td><?php echo $row['mobile']?></td>
               <td><?php echo $row['email']?></td>
               <td><?php echo $row['hostel']?></td>
               <td><?php echo $row['roomno']?></td>
               <td><button class="btnstyle"><a href="myprofiledb.php ?firstname=<?php echo $row['firstname']?>">UPDATE</a></button></td>


               

           </tr>
    
    <?php
     }
    }

  ?>  
</table>
</div>
</body>
</html>
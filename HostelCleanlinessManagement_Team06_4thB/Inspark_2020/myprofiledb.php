<?php
$con=mysqli_connect('localhost','root',"","signup");


mysqli_select_db($con,'sign');
if($con){
  echo"connection successful";
}
$firstname=$_GET['firstname'];
$selectquery="SELECT * from sign where firstname='$firstname'  ";
$query_run=mysqli_query($con,$selectquery);

$result=mysqli_fetch_array($query_run);

if(isset($_POST['submit']))
{
    $firstname=$_GET['firstname'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$addmission=$_POST['admissionno'];
$usn=$_POST['usn'];
$date=$_POST['dob'];
$email=$_POST['email'];
$mob=$_POST['mobile'];
$hostel=$_POST['hostel'];
$room=$_POST['roomno'];

$updatequery="UPDATE  sign SET firstname='$firstname',lastname='$lastname',admissionno='$addmission',usn='$usn',dob='$date', email='$email',mobile='$mob',hostel='$hostel',roomno='$room' where firstname='$firstname' ";
   if (mysqli_query($con,$updatequery)){

   }
   else{
       echo"error ".mysqli_error($con);
   }
    header('myprofile.php') ;
   
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>UPDATE Page</title>
    <style type="text/css">
body  {
  
    
    background-image: url("https://isorepublic.com/wp-content/uploads/2018/11/coffee-laptop.jpg");
   background-size: 1550px 780px;
   background-attachment: fixed;
   background-position: cover;
 
  
 }

form{
            
            
            font-family: cursive;
          margin-left: 350px;
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
      margin-left: 387px;
            
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
    left: 570px;
  top: 70px;
  width: 150px;
  opacity: .9;
  color:azure;
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
th{
    color:aliceblue;
}
</style>
</head>
<body>
  <img src="https://image.flaticon.com/icons/png/512/44/44948.png" class="logo">
    <div class="frm">
      <form action=""method="post"><hr>
          <table>
              <tbody><tr valign="top"><td colspan="2" style="padding-left: 70px;"><h2 align="center" style="color: #ffbf80; text-shadow: 1px 1px white;">Update your Profile!</h2></td><td></td></tr>
          <tr><th>First name:</th><td><input type="text" name="firstname" value="<?php echo $firstname ?>" placeholder="Enter your First name" autocomplete="off" required></td></tr>
          <tr><th>Last name:</th><td><input type="text" name="lastname" placeholder="Enter your Last name"value="<?php echo $result['lastname'];?>" autocomplete="off" required></td></tr>
          <tr><th>Admission no.:</th><td><input type="int" name="admissionno" placeholder="Enter your Admission number" value="<?php echo $result['admissionno'] ;?>"autocomplete="off" required></td></tr>
          <tr><th>USN:</th><td><input type="int" name="usn" placeholder="Enter your usn"value="<?php echo $result['usn']; ?>" autocomplete="off" required></td></tr>
          <tr><th>Date of Birth:</th><td><input type="int" name="dob" autocomplete="off" value="<?php echo $result['dob']; ?>"required></td></tr>
      
          <tr><th>E-mail:</th><td><input type="email" name="email" placeholder="Enter your e-mail id"value="<?php echo$result['email'];?>" autocomplete="off" required></td></tr>
          <tr><th>Mob no.:</th><td><input type="int" name="mobile" placeholder="Enter your mobile number"value="<?php echo $result['mobile'] ;?>" autocomplete="off" required></td></tr>
          <tr><th>Hostel:</th><td><select type="text" name="hostel"value="<?php  echo $result['hostel']; ?>"><option>Netravathi</option><option>Kumaradhara</option><option>Souparnika</option><option>Nandini</option><option>Shambhavi</option><option>Kaveri</option><option>R Cube</option></select></td></tr>
          <tr><th>Room no.:</th><td><input type="int" name="roomno" placeholder="Enter your room number" value="<?php echo $result['roomno']; ?>"autocomplete="off" required></td></tr>
</body>
      </table><br>

          <button type="submit"style="margin-left: 200px; font-family: Arial, Helvetica, sans-serif; margin-bottom: 10px;" id="su" value="Update" name="submit"  onclick="alert('Your Profile Page is Updated')">UPDATE</button>
      </form>





     


 
 </div>
 
</body>
</html>
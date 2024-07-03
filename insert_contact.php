<?php
$person_name=$_REQUEST['person_name'];
$person_email=$_REQUEST['person_email'];
$subject=$_REQUEST['subject'];
$message=$_REQUEST['message'];
 
include "Config.php";

$query="INSERT INTO `contact`(`name`,`email`,`subject`,`message`)values('$person_name','$person_email','$subject','$message')";
$result = mysqli_query($con,$query);
if($result>0){
  echo"<script>alert('message sent services')</script>";
}
else{
    echo"there is something wrong";
}


?>
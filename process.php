<?php
if(isset($_POST['email'])){
  
  $admin_email = "olaniyiibrahim2006@gmail.com";
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone =$_POST['phone'];
  $message =$_POST['message'];

  mail($admin-email, "New Form Submission",$message,'-'.$phone,"From:".$email);
  header("success.html")
}
?>
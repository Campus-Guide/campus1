<?php

require_once('db.php');

  $name = mysqli_real_escape_string($con,$_POST['name']);
  $regno=mysqli_real_escape_string($con,$_POST['Regno']);
  $password = mysqli_real_escape_string($con,$_POST['password']);
 
 $Pass = md5($_POST['password']);
 $sql = "insert into students (name,Regno,password)
     values ('".$_POST['name']."','".$_POST['Regno']."','".$Pass."')";
    $result = mysqli_query($con,$sql);

    if($result){
     
      header("location: no-pop-up registration.html");
      exit();
    }

    else{echo"<script>alert('You are not a STUDENT,please exit')";}

?>
    
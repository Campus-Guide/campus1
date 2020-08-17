<?php

require_once('db.php');

  $name = mysqli_real_escape_string($con,$_POST['name']);
  $department=mysqli_real_escape_string($con,$_POST['department']);
  $admincode = mysqli_real_escape_string($con,$_POST['admincode']);
 
 
 $sql = "INSERT into admin (name,department,admincode)
     values ('".$_POST['name']."','".$_POST['department']."','".$_POST['admincode']."')";
    $result = mysqli_query($con,$sql);

    if($result){
     
      header("location: accounts.php");
      exit();
    }

    else{echo"<script>alert('You are not an ADMIN,please exit')";}

?>
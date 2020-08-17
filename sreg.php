
 <?php

require_once('db.php');
 $sql = "insert into seminar (name,Registrationnumber,course,radio,day,seminartime)
     values ('".$_POST['name']."','".$_POST['Registrationnumber']."','".$_POST['course']."',
     '".$_POST['radio']."','".$_POST['day']."','".$_POST['seminartime']."')";
    $result = mysqli_query($con,$sql);

    if($result){
     // echo"congrats <a href=\"no-pop-up registration.html\"> Click here</a>";
      header("location: home page.html");
      exit();
    }

    else{echo"failed";}

?>
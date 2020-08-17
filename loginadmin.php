<?php

require_once('db.php');

  if(isset($_POST['name'])) 
	   {
		 $name=$_POST['name'];
		  $admincode=$_POST['admincode'];
         
		  $sql= " SELECT name,admincode FROM admin WHERE name='$name' AND admincode='$admincode' " ;
		     
		      $result = mysqli_query($con,$sql);
             if($result){
	         $row=mysqli_num_rows($result);
	         if($row == true) {

			    header("location: accounts.php");
			    exit();
	  
	    }
	    else {echo "<h1>OOPS ERROR!</h1>";}
        }
		    else{

		      echo "<script>alert('Please enter correct data!')</script>". mysqli_error($con);
		      exit();
		    }
	  }

	  else{
	  	echo"mysqli_error()";
	  }
 ?>
<?php

include 'db_con.php';

if(isset($_POST['id'])){
 
 $email=$_POST['id'];
  
  $check=mysqli_query($con,"SELECT * FROM `data` WHERE `newsletter` = '$email'");
  $row=mysqli_num_rows($check);
  $res=mysqli_fetch_array($check);
  
 
	if($res['newsletter']!=$email){

 $query="INSERT INTO data values('','$email')";
 $result=mysqli_query($con,$query);

  if($result){
  	echo "Thankyou for subscribe us";
  }
  
}
else{
	echo "User already exit";
    }

}

?>
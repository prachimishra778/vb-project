<?php
  require 'connection.php';

  $users="SELECT ques FROM questions";
  $result=mysqli_query($con,$users);

  if(mysqli_num_rows($result)>0){
    while($row=$result->fetch_assoc()){
      $response['q'][]=$row;
      $response['error']="200";
    }
  }
  else{
        $response['q'][]="";
        $response['error']="400";
  }

  
  echo json_encode($response);
    
?>
<?php

  require 'connection.php';

    $q = $_POST['q'];

    $ans="SELECT right_option from questions WHERE ques ='" . $q . "'";

 
		$result = mysqli_query($con, $ans);
		$followingdata = $result->fetch_assoc();

		if($result !== false)
		{
			$response['ans']=$followingdata['right_option'];		
	    $response['error']="400";
		}
	  else{

	    $response['error']="400";
	    $response['ans']="";


	  }

	echo json_encode($response);
?>
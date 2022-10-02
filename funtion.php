<?php
include_once('config.php');



function authenticate($email,$pass){
	include_once('config.php');
	debug($pass);

	$sql="SELECT * FROM user WHERE username='$email' and password='$pass'";
	$statement = mysqli_prepare($con,$sql);
	if(is_object(statement)){
		mysqli_stmt_bind_param($statement,'s',$sql);
		mysqli_stmt_bind_result($statement,$db_user_id,$db_user_email,$db_user_password);
		mysqli_stmt_execute($statement);
		mysqli_stmt_fetch($statement);
	}
    if(mysqli_stmt_num_rows($statement)){
	  if(password_verify($pass,$db_user_password))
		  return ['loggedin => true, 'email'=db_user_email]
	}
	return false;
		
	}
	
	
}


function debug($arg){
	echo'<pre>';
	print_r($arg);
	
	echo'<pre>';
	exit;
	
}


function base_url(){
	return '';
}
?>


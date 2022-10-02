
<?php
session_start();
include 'config.php';
 echo"fuck";
 //if(isset($_POST['Change Password'])){
	 echo"fuck";
$username = $_POST['e'];
echo"$username";
        $password = $_POST['password'];
        $newpassword = $_POST['newpassword'];
        $confirmnewpassword = $_POST['Confirm Password'];
		//echo"$confirmnewpassword";
		
		
		 $select ="SELECT * FROM user WHERE username='$username' AND password='$password'";
		 

	      $result = mysqli_query($con ,$select);
	     $row= mysqli_fetch_array($result);
		   //echo"$row";
       
        if(!$result)
        {
        echo "The username you entered does not exist";
        }
        else if($password!=$row['password'])
        {
        echo "You entered an incorrect password";
        }
        if($newpassword=$confirmnewpassword)
		$s ="SELECT * FROM user WHERE username='$username' AND password='$newpassword'";
		 
       
        $sql = mysqli_query($con ,$s);
        if($sql)
        {
        echo "Congratulations You have successfully changed your password";
        }
       else
        {
       echo "Passwords do not match";
       }
	   
 //}
 ?>








<?php
include_once('config.php');
session_start();
$email=$_SESSION['e'];
echo"$email";
       if(isset($_POST['verify'])){
           $otp=$_POST['emailotp'];
		   $select ="SELECT * FROM user WHERE username='$email' AND emailOtp='$otp'";
	       $qu = mysqli_query($con ,$select);
	       $row= mysqli_fetch_array($qu);
		   $dbotp=$row['emailOtp'];
		    echo"$dbotp";
               if($otp!=$dbotp){
                echo "<script>alert('Please enter correct OTP');</script>";	
                } else {
                $emailverify=1;
                $Up="update user set isEmailVerify='$emailverify' where email='$email'";
			   
                 session_destroy();
                 echo "<script>alert('OTP verified successfully');</script>";	
              echo "<script>window.location.href='home.php'</script>";
             }
   }
?>





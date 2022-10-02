<?php
include 'config.php';
echo "SUCCESSdd";
$error =Null;
session_start();
if(isset($_POST['submit'])){
  
  $u = $_POST['u'];
  $p = $_POST['p'];
  
  $p2 = $_POST['p2'];
  $e = $_POST['e'];
  $location=$_POST['location'];
  $gender=$_POST['gender'];
  $dob=$_POST['dob'];
  $phone=$_POST['phone'];
  $usertype=$_POST['usertype']; 
  echo "$u";
  echo "$e";
  

 // $select1 ="SELECT * FROM user WHERE username='$email' AND password='$p'";
    
 // $select2="SELECT * FROM user WHERE username='$email' AND name`='$u'";
  
// $qu =mysqli_query($con ,$select1);
// $row=mysqli_fetch_array($qu);
 // if(strlen($select1)<5){
 //    echo "YOUR USER NAME MUST BE AT 5 CHARACTER";
 
  //   }//elseif ($p2 != $p) {
      //  echo "your password do not match";
    // }else
    //  echo  "form is valid";
      
      //connect to the database
     //$mysqli =NEW MySQLi('localhost','root','','careerbuilder');
	 
	 

	
      //sanitize from data SQL Injection
	  $u = $con->real_escape_string($u);
      $p = $con->real_escape_string($p);
      $p2 =$con->real_escape_string($p2);
      $e =$con->real_escape_string($e);
	  $location =$con->real_escape_string($location);
	  $gender=$con->real_escape_string($gender);
	  $dob=$con->real_escape_string($dob);
	  $usertype=$con->real_escape_string($usertype);
	   echo "$usertype";
// ENCRYPT PASSWORD USING OPENSSL

    
	  //Generate Vkey
	  $vkey =md5(time().$u);
	  //Insert careerbuilder into the database
	  //$p =md5($p);
        //Generating 6 Digit Random OTP
      $otp= mt_rand(100000, 999999);
	

	   //insert data
	  if($p2=$p){
	   $hash = password_hash($p,PASSWORD_DEFAULT);
	  
		//echo "<pre>";
		//echo"$hash";
		//echo "<pre>";
	  
		  
	  $emailverifiy=0;
      $sql="INSERT INTO `user`(`Id`, `name`, `password`, `username`, `location`, `gender`, `contact`, `usertype`, `dateofbirth`, `emailOtp`, `vkey`, `isEmailVerify`) VALUES 
      ('','$u','$p','$e','$location','$gender','$phone','$usertype','$dob','$otp','',' $emailverifiy')";
       
       mysqli_query($con ,$sql);
	 
      
      //$update ="UPDATE emailOtp='$otp' WHERE email='$e'";
	 // $ex=mysqli_query($con ,$update);
	 
	    
	  }
	    
	  $select ="SELECT * FROM user WHERE username='$e' AND emailOtp='$otp'";
		  //$select ="SELECT * FROM user WHERE email='$e";
	  $qu = mysqli_query($con ,$select);
	  $row= mysqli_fetch_array($qu);
	  //$dbotp=$row['emailOtp'];
		
		//echo "<pre>";
		//echo"$dbotp";
		//echo "<pre>";
	  
	  if($row){
		     echo "ok";
		        $to =$e;
		       $subject= "Email verification";
		       //$message ="<a href=''>Register account</a>;
			  // $body = "this is mail body";
		 
		     //  $headers= "From: sahanaz.fatima000@gmail.com \r\n";
		      // $headers= "MIME-Version: 1.0" "\r\n";
		     //  $headers= "content-type: text/html; charest=UTF-8" ."\r\n";
		     //  mail($to,$subject,$body,$headers);
		     //  $subject="OTP Verification";
             //  $headers .= "MIME-Version: 1.0"."\r\n";
              // $headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
              // $headers .= 'From:User Signup<sahanaz.fatima000@gmail.com>'."\r\n";                          
              // $ms.="<html></body><div><div>Dear $username,</div></br></br>";
              // $ms.="<div style='padding-top:8px;'>Thank you for registering with us. OTP for for Account Verification is $vericationcode</div><div></div></body></html>";
             // mail($email,$subject,$ms,$headers); 
            // echo "<script>window.location.href='verify-otp.php'</script>";
            $_SESSION['e']=$row['username'];
		    header("location:verify-otp.php");
			 
		   
            
      }else {
		     echo $con->error;echo "<script>alert('Something went wrong.Please try again');</script>";	
             
             echo "<script>alert('Email id already assicated with another account.');</script>";
			 
			 
			 
	  
	  
   }
	
	  
 }
?>
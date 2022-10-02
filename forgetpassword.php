<?
include_once('config.php')
if(isset($_POST['send-reset-link']))
{
	$query="SELECT * FROM user WHERE username='$email';
	$result=mysqli_query($con,$query);
	if($result)
	{
		echo"run";
	}
	else
	{
		echo"
		<script>
		 alert('cannot run query');
		 window.location.herf='login.php';
		</script>
		";
	}
	}
}
?>










</head>
<body>
<form method="post" action="forgetpw-process.php" name="reset"><br /><br />
<label><strong>Enter Your Email Address:</strong></label><br /><br />
<input type="email" name="email" placeholder="username@email.com" />
<br /><br />
<input type="submit" value="Reset Password"/>
</form>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<?php } ?>


<br /><br />
<a href="https://www.allphptricks.com/forgot-password-recovery-reset-using-php-and-mysql/"><strong>Tutorial Link</strong></a> <br /><br />
For More Web Development Tutorials Visit: <a href="https://www.allphptricks.com/"><strong>AllPHPTricks.com</strong></a>
</div>

</body>
</html>
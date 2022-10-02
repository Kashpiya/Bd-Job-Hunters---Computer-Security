<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <title>Register Page</title>
    <style>
        div{
            margin-left: 30%;
            margin-top: 5%;
        }
        h2{
            margin-left: 5%;
            color: green;
            font-size: 32px;
        }
        input[type=submit],#login{
            padding: 15px 35px;
            background: orange;
            color:white;
            
        }
        input[type=submit]:hover,#login:hover{
            padding: 20px 35px;
            background: green;
            color:white;
        }
    </style>
</head>


<body>
    
    <div>
        <form action="registerprocess.php" method="POST">
            <h2 >Register Here</h2>
            <label for="u"> UserName *</label>
            <input type="text" name="u" id="u" required>
            <br><br>
            <label for="e">Email: </label>
            <input type="email" id="e" name="e" placeholder="enter your email here" title="valid email">
            <br><br>
            <label for="p">Password: </label>
            <input type="password" id="p" name="p" placeholder="enter password here!">
            <br><br>
              <label for="p2">Password: </label>
            <input type="password" id="p2" name="p2" placeholder="enter password here!">
            <br><br>

      
            <label for="location"> Location *</label>
            <input type="text" name="location" id="location" required>
            <br><br>
            <label for="gender">Gender: </label>
            <br><br>
            <input type="radio" id="gender" name="gender" value="male" /> Male
            <input type="radio" id="gender" name="gender" value="female" /> Female <br />
            <br><br>

            <label for="dob">Date of Birth</label>
            <input type="date" name="dob" id="dob">
            <br><br>
            <label for="phone">Phone Number</label>
            <input type="text" name="phone" id="phone" placeholder="01*********">
            <br><br>
            <label for="usertype">User type: </label>
            <br><br>
            <input type="radio" id="usertype" name="usertype" value="recruiter" /> Recruiter
            <input type="radio" id="usertypr" name="usertype" value="applicant" /> Applicant <br />
            <br><br>


            <input type="SUBMIT" name="submit" value="Register" required> 
        </form>
<!--        <input id="login" type="button" value="Login" onclick=login() >-->
    </div>
    
   <script>
       function login(){
            location.assign('verify-otp.php'); 
       }
    </script>
    
</body>

</html>
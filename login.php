<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">

</head>
<body>
    <div class="header-links">
        <div class="logo"><h2>Arts and design talents!</h2></div>
        <div class="links"><a href="CULTURE_IMPROVEMENT_WEB_TECH.php">Home</a></div>
        <div class="links"><a href="information.php">Information</a></div>
        <div class="links"><a href="Talent.php">Talent</a></div>
        <div class="links"><a href="about_us.php">About Us</a></div>
            <div class="links"><a href="Login.php">Login</a></div>
    </div>

        <div class="login-container">
            <form action="dashboard/dashboard.html" method="post">
        <div class="login-form" id="login-form">
         <div class="form-title"> Login Form</div>
         <div class="form-details">
         Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="login_email" class="input-size" placeholder="Enter your email" required><br>
         Password: <input type="password" name="login_password" class="input-size" placeholder="Enter password" required><br>
         <a href="">Forgot password?</a><br>
       
         <div class="footer"> 
            <input type="button" name="submit" value="Login" class="button"><br>
            Don't have an account? <a href="#"  id="change-to-signup">Signup!</a>
         </div>
        </div>
        </div>

        <div class="signup-form" id="signup-form""><br>
            <br>
            <div class="form-title"> Signup </div>
            <div class="form-details">
            First name: <input type="text" name="fname" class="input-size" id="user" placeholder="Enter Username" required><br>
            Last name: <input type="text" name="lname" class="input-size" id="user" placeholder="Enter Username" required><br>
            Email address:<input type="text" name="email" class="input-size" id="user-email" placeholder="Enter Email address" required><br>
            Password :<input type="password" name="password" class="input-size" id="user-password" placeholder="Enter password" required><br>
            Confirm Password:<input type="password" name="confirm_password" class="input-size" id="user-comfirm-password"placeholder="confirm password" required><br>
            <div class="footer">
                Age:<select>
                    <option selected>select born year</option>
                    <option>2012</option>
                    <option>2011</option>
                    <option>2010</option>
                    <option>2009</option>
                    <option>2008</option>
                    <option>2007</option>
                    <option>2006</option>
                    <option>2005</option>
                    <option>2004</option>
                    <option>2003</option>
                    <option>2002</option>
                    <option>2001</option>
                    <option>2000</option>
                    <option>1999</option>
                    <option>1998</option>

                </select><br>
           Gender:<br> <input type="radio" name="gender">Male
                        <input type="radio" name="gender">Female<br>

            <input type="button" name="submit" value="Submit" class="button"><br>
            Already have an account?<a href="#" id="change-to-login"> Login Now!</a><br>
           </div>

    </div>
        </div>
        </div>
    </form>
       <h3 id="last"> © 2023 TalentMix Inc. Cookie Policy / Privacy / Terms / Accessibility</h3>

</div>
<script src="project.js"></script>

<?php
$server="localhost";
$user="root";
$password=" ";
$db="artist_information";

$fname=$_POST("fname");
$lname=$_POST("lname");
$email=$_POST("email");
$password=$_POST("password");
$cpassword=$_POST("confirm_password");

$con=mysqli_connect('$server','$user','$password','$db');
$sql="insert into artist(ID,first_name,last_name,email,password) VALUES('1','$fname','$lname','$email','$password');";
$result=mysqli_query($con,$sql);
?>
    

</body>
</html>
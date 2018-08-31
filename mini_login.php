<?php
if(isset($_POST["go"])){  
  
if(!empty($_POST['login']) && !empty($_POST['password'])) {  
    $user=$_POST['login'];  
    $pass=$_POST['password'];  
  
    $con=mysqli_connect('localhost','root','') or die(mysql_error());  
    mysqli_select_db($con,'user_db') or die("cannot select DB");  
  
    $query=mysqli_query($con,"SELECT * FROM user_table WHERE username='".$user."' AND password='".$pass."'");  
    $numrows=mysqli_num_rows($query);  
    if($numrows!=0)  
    {  
    while($row=mysqli_fetch_assoc($query))  
    {  
    $dbusername=$row['username'];  
    $dbpassword=$row['password'];  
    }  
  
    if($user == $dbusername && $pass == $dbpassword)  
    {  
    session_start();  
    $_SESSION['login']=$user;  
  
    /* Redirect browser */  
    header("Location:mini_profile.php");  
    }  
    } else {  
    echo "Invalid username or password!";  
    }  
  
} else {  
    echo "All fields are required!";  
}  
}  
?>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="login.css">
        <title>e-learning Login Page</title>
    </head>
    <body>
        <div class="container">
            <br>
            <br>
            <div class="logo">
                <img src="e-learning.jpg">
            </div>
            <br>
            <div class="border">
                <div class="top"></div>
                <div class="middle"></div>
                <div class="bottom"></div>
                <div class="bottom-line"></div>
            </div>
            <div class="login-form">
                <form method="post">
                    <table align=center>
                        <tr>
                            <td>Username</td>
                            <td><input type="text" name="login" placeholder=Username></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td><input type="password" name="password" placeholder="Password"></td>
                        </tr>
                    </table>
                    <br>
                    
                    <input type="submit" name="go" value="Go" id="go-btn">
                    <a href="#dummy">Forgot Password</a>
                    <br>
                    <br>                    
                    <input type="checkbox">Remember me
                </form>
                <br>
            </div>
        </div>
    </body>
</html>
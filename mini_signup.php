<html>
    <head>
        <title>Confirmation for sign up</title>
    </head>
    <style>
        body {
            background-color: black;
            background-size: cover;
        }
        .container {
            background-color: white;
            margin: auto;
            padding: 25px;
            width: 1000px;
            height: auto;
        }
        .update {
            width: 100%;
            height:100px;
            text-align: center;
            font-family: monospace;
            color: darkorange;
            font-weight: bold;
            font-size: 50px;
        }
        .datalink {
            width: 100%;
            height:100px;
            text-align: center;
            font-family: monospace;
            color: black;
            font-weight: bold;
            font-size: 25px;
        }
        a:link {
            color:black;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
            color: blue;
            background-color: transparent;
        }
    </style>
    <body>
        <div class="container">
            <?php
            $database = mysqli_connect("localhost", "root", "","user_db");
            if($database === false){
                die("ERROR: Could not connect. " . mysqli_connect_error());
            }
            $firstname=mysqli_real_escape_string($database, $_REQUEST['firstname']);
            $lastname=mysqli_real_escape_string($database, $_REQUEST['lastname']);
            $email=mysqli_real_escape_string($database, $_REQUEST['email']);
            $username=mysqli_real_escape_string($database, $_REQUEST['username']);
            $password=mysqli_real_escape_string($database, $_REQUEST['password']);
            
            $sql = "INSERT INTO user_table (firstname,lastname,email,username,password) VALUES ('$firstname','$lastname','$email','$username','$password')";
            
            if(mysqli_query($database, $sql)){
                echo "<div class='update'>You have successfully registered yourself.</div>";
            }  else{
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($database);
            }
            mysqli_close($database);
            ?>
        </div>
        
    </body>
</html>
<html>
    <head>
        <title>KPMG | Logout</title>
        <link rel="stylesheet" type="text/css" href="logout.css">
    </head>
    <body>
        <div class="container">
            <?php
                session_start();
                setcookie(session_name(),"",time()-3600);
                session_destroy();
                session_write_close();
                echo "<div class='update'>You have successfully logged out.</div>"
            ?>
            <div class="datalink"><a href="index.php" target="_blank">Click here to login again.</a></div>
        </div>
    </body>
</html>
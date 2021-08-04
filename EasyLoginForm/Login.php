<?php 
session_start();
?>
<!DOCTYPE html>
<html>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <head>
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="container">
            <header>
                <h1>Login</h1>
            </header>
            <content>
            <form name="regform" method="post" action="check.php"><br>
                <h3>Username:</h3><input type="text" name="name" id="1" required></input><br><br>
                <h3>E-mail:</h3><input type="text" name="email" id="2" required></input><br><br>
                <h3>Password:</h3><input type="password" name="code" id="3" required></input><br><br>
                <h3>Gender:</h3>
                <input type="radio" name="gender" id="4" value="female"></input>Female
                <input type="radio" name="gender" id="4" value="male"></input>Male
                <input type="radio" name="gender" id="4" value="other"></input>Other<br><br>
                <input style="border:solid;border-color:black;background-color: rgb(189, 187, 187);color:#0690c7;font-size: 30px;margin:10px;padding:2px;"type="submit" value="Login"></input>
                <br><br><br><br>
                </form>
            </content>
            <footer>
                <BR>
                <h1>Created by John Papachristos</h1>
            </footer>
        </div>
    </body>
</html>
<?php 
session_start();
?>
<!DOCTYPE html>
<html>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <head>
        <title>Welcome</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="container">
            <header>
				<?php 
                    $name= $_POST["name"];
                    echo "<h1>Welcome $name<h1>";
                ?>
            </header>
            <content>
                <?php
					$email= $_POST["email"];
					$gender= $_POST["gender"];
					echo "<br><br><h2>email:</h2><br><h2>$email</h2><br><br><h2>gender:</h2><br><h2>$gender</h2>"
				?>
            </content>
            <footer>
                <BR>
                <h1>Created by John Papachristos</h1>
            </footer>
        </div>
    </body>
</html>

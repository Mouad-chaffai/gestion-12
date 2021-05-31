<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
    </head>
    <body>
        <div id="container">
            <!-- zone de connexion -->
            
            <form action="verification.php" method="POST">
                <h1>LOGIN</h1>
                
                <label><b>username</b></label>
                <input type="text" placeholder="write username" name="username" required>

                <label><b>password</b></label>
                <input type="password" placeholder="write passxord" name="password" required>

                <input type="submit" id='submit' value='LOGIN' >
                <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Username or password incorrect
                        </p>";
                }
                ?>
            </form>
        </div>
    </body>
</html>
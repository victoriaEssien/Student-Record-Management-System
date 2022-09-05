<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="./css/style.css">


    <p><a href="faculty.php" class="nav-btn">Back</a></p>
    <p><a href="home.php" class="nav-btn">Home</a></p>

    <center class="center-home-page-welcome">
        <h3 class="home-page-welcome">ADMIN LOGIN FORM</h3>
    </center>
</head>

<body class="home-body">
    <?php
    include_once('process/processing2.php')
    ?>
    <center>
    <br><br><br><br><br><br>
        <div class="reg-form">
            <form action="adminLogin.php" method="POST" class="main-reg-form">
                <input type= "text" placeholder="Enter your username" name="uname" size="30" required> <br><br>
                <input type="password" placeholder="Enter your password" name="pword" size="30" required><br><br>
                <button name="signin" type="submit" class="reg-btn">Login</button>
            </form>
        </div>
    </center>
</body>
<br><br><br><br><br><br><br><br><br><br><br><br>
<center>
<?php
    include_once('include/footer.html');
?>
</center>
</html>
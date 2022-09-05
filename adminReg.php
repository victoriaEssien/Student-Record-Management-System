<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registration</title>
    <link rel="stylesheet" href="./css/style.css">
    <!-- <?php
    include_once('include/header.html')
    ?> -->

    <p><a href="faculty.php" class="nav-btn">Back</a></p>
    <p><a href="home.php" class="nav-btn">Home</a></p>

    <center class="center-home-page-welcome">
        <h3 class="home-page-welcome">ADMIN REGISTRATION FORM</h3>
    </center>
</head>

<body class="home-body">
    <?php
    include_once('process/processing2.php')
    ?>
    <center>
    <br><br><br><br><br><br>
        <div class="reg-form">
            <form method="POST" action="adminReg.php" class="main-reg-form">
                <input type="text" name="fname" placeholder="Enter your first name " size="30" required> <br> <br>
                
                <input type="text" name="lname" placeholder="Enter your last name " size="30" required> <br> <br>

                <input type="email" name="email" placeholder="Enter your email address " size="30" required> <br> <br>
                
                <input type="tel" name="phone" placeholder="Enter your phone number " size="30" required> <br> <br>

                <input type="text" name="uname" placeholder="Enter your username " size="30" required> <br> <br>

                <input type="password" name="pword" placeholder="Enter your password " size="30" required> <br> <br>

                <button type="submit" name="create" class="reg-btn">Register</button>
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
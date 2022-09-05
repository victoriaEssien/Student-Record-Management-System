<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Students</title>
    <link rel="stylesheet" href="./css/style.css">


    <p><a href="adminLogin.php" class="nav-btn">Back</a></p>
    <p><a href="home.php" class="nav-btn">Home</a></p>

    <center class="center-home-page-welcome">
        <h3 class="home-page-welcome">View Students</h3>
    </center>
    <center>
    <?php
        include_once('process/processing2.php');
    ?>
    </center>
</head>
<body class="home-body">
<!-- <?php
include('include/header.html');
?> -->
<br><br>

<center>
<br><br><br><br><br><br>
    <div class="reg-form">
        <form method="POST" action="list.php">
            <br><br>
            <button name="view" class="reg-btn">View Students</button>
            <br><br>
        </form>
    </div>
</center>
</body>
</html>
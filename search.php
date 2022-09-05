<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Result</title>
    <link rel="stylesheet" href="./css/style.css">

    <p><a href="login.php" class="nav-btn">Back</a></p>
    <p><a href="home.php" class="nav-btn">Home</a></p>

    <center class="center-home-page-welcome">
    <h3 class="home-page-welcome">View Result<h3>
    </center>
</head>
<body class="home-body">
    <center>
        <br><br><br><br><br><br>
        <div class="reg-form">
        <form method="POST" action="search.php">
            <input type="text" name="search_2" placeholder="Enter your matric number" size="25" required>
            <br><br>
            <button name="search_result" class="reg-btn">Search</button>
        </form>
        </div>
        <br><br>
    <?php
    include_once('process/processing.php');
    ?>
    <br><br><br><br><br><br><br><br><br><br>

</center>
    
</body>

<center>
<?php
include('include/footer.html');
?>
</center>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Records</title>
    <link rel="stylesheet" href="./css/style.css">


    <p><a href="delete.php" class="nav-btn">Back</a></p>
    <p><a href="home.php" class="nav-btn">Home</a></p>

    <center class="center-home-page-welcome">
        <h3 class="home-page-welcome">DELETE RECORDS</h3>
    </center>

    
</head>
<body class="home-body">
<br><br><br>
    <center>
    <?php
        include_once('process/processDelete.php');
    ?>
    </center>
    
</body>
</html>
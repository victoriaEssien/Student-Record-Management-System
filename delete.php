<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Records</title>
    <link rel="stylesheet" href="./css/style.css">

    <p><a href="adminLogin.php" class="nav-btn">Back</a></p>
    <p><a href="home.php" class="nav-btn">Home</a></p>

    <center class="center-home-page-welcome">
    <h3 class="home-page-welcome">Delete Records<h3>
    </center>



</head>
<body class="home-body">
    <center>
        <br><br><br><br><br>
        <?php
        include_once('process/processDelete.php');
    ?>
        <br><br><br><br><br><br>
        <div class="reg-form">
        <form method="POST" action="delete_record.php">
            <input type="text" name="search_1" placeholder="Enter matric number" size="25" required>
            <br><br>
            <button name="search" class="reg-btn">Delete</button>
        </form>
        </div>
        <br><br>
    <br><br><br><br>

</center>
    
</body>

<center>
<?php
include('include/footer.html');
?>
</center>
</html>

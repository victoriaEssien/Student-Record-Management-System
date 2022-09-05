<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Records</title>
    <link rel="stylesheet" href="./css/style.css">

    <!-- <?php
    include('include/header.html');
    ?> -->


    <p><a href="adminLogin.php" class="nav-btn">Back</a></p>
    <p><a href="home.php" class="nav-btn">Home</a></p>

    <center class="center-home-page-welcome">
    <h3 class="home-page-welcome">Update Student Records<h3>
    </center>

</head>
<body class="home-body">
    <center>
        <br><br><br><br>
    <?php
    include_once('process/processing2.php');
    ?>
        <br><br><br><br><br><br>
        <div class="reg-form">
        <form method="post" action="records.php">
            <input type="text" name="search_1" size="25" placeholder="Enter matric number" required>
            <br><br>
            <button name="search" class="reg-btn">Search</button>
        </form>
        </div>
    <br><br>
    </center>

</body>

<center>
    <?php
    include('include/footer.html');
    ?>
</center>
</html>
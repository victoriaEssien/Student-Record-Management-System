<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
    <link rel="stylesheet" href="./css/style.css">



    <p><a href="student.php" class="nav-btn">Back</a></p>
    <p><a href="home.php" class="nav-btn">Home</a></p>

    <center class="center-home-page-welcome">
        <h3 class="home-page-welcome">STUDENT REGISTRATION FORM</h3>
    </center>
</head>

<body class="home-body">
    <?php
    include_once('process/processing.php')
    ?>
    <center>
    <br><br><br><br><br><br>
        <div class="reg-form">
            <form method="POST" action="studentReg.php" class="main-reg-form">

                <input type="text" name="matric" value="<?php echo $matric = "NSU/22/02/03".rand(50,60)?>" size="30" readonly> <br> <br>
                
                <input type="text" name="fname" placeholder="Enter your first name " size="30" required> <br> <br>
    
                <input type="text" name="lname" placeholder="Enter your last name " size="30" required> <br> <br>

                <input type="email" name="email" placeholder="Enter your email address " size="30" required> <br> <br>

                <input type="tel" name="phone" placeholder="Enter your phone number " size="30" required> <br> <br>

                <label>Select subjects:</label> <br> <br>
                <input type="checkbox" name="math"><value>Math</value></input> <br> <br>
                <input type="checkbox" name="physics"><value>Physics</value></input> <br> <br>
                <input type="checkbox" name="chemistry"><value>Chemistry</value></input> <br> <br>
                <input type="checkbox" name="biology"><value>Biology</value></input> <br> <br>
                <input type="checkbox" name="english"><value>English</value></input> <br> <br>

                <input type="text" name="uname" placeholder="Enter your username " size="30" required>      <br> <br>

                <input type="password" name="pword" placeholder="Enter your password " size="30" required> <br> <br>

                <button type="submit" name="register" class="reg-btn">Register</button>
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
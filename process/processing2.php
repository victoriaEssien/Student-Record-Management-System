<?php 

if(isset($_POST['create'])) {
    include_once('connection/connect.php');

    $f_name=$_POST['fname'];
    $l_name=$_POST['lname'];
    $e_mail=$_POST['email'];
    $phone=$_POST['phone'];
    $u_name=$_POST['uname'];
    $p_word=$_POST['pword'];
    
    $new_record = array(
        "fname"=>$f_name,
        "lname"=>$l_name,
        "email"=>$e_mail,
        "phone"=>$phone,
        "uname"=>$u_name,
        "pword"=>$p_word
        
    );

    try{
        $query=sprintf("INSERT INTO %s(%s) values(%s)",
        "adminreg",
        implode(",", array_keys($new_record)),
        ":".implode(", :", array_keys($new_record)));

        $stmt = $conn -> prepare($query);
        $stmt->execute($new_record);
        if($stmt) {
            echo "<br><p class='feedback'> YOUR ACCOUNT HAS BEEN CREATED SUCCESSFULLY </p><br>";
        }
        else{
            echo "<br><p class='feedback'> ERROR, RECORDS NOT INSERTED </p>";
        }

    }catch(PDOException $e){
        echo $e->getMessage();
    }
}

if(isset($_POST['signin'])){
    $uname = $_POST['uname'];
    $pword = $_POST['pword'];

    echo "<p class='signup-feedback'> Thank you for signing in </p>";
    echo "<div class='search-container'><a href='view.php'><button class='search-btn'>View</button></a></div>";
    echo "<div class='search-container'><a href='update.php'><button class='search-btn'>Update</button></a></div>";
    echo "<div class='search-container'><a href='#.php'><button class='search-btn'>Search</button></a></div>";
    echo "<div class='search-container'><a href='delete.php'><button class='search-btn'>Delete</button></a></div>";
}

if(isset($_POST['view'])) {
    include_once('connection/connect.php');
    $sql = "SELECT * FROM registration";

    $stmt = $conn->prepare($sql);
    $stmt->execute();

    $result = $stmt->fetchAll();

    if($result && $stmt->rowCount() > 0) {
        echo"
        <table>
        <tr><th>S/N</th><th>Matric Number</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Phone</th><th>Username</th></tr>";
        foreach($result as $row) {
            echo"<tr>
            <td><input type='text' name='sn' size='5' value='".$row['sn']."'></td>
            <td>".$row['matric']."</td>
            <td>".$row['fname']."</td>
            <td>".$row['lname']."</td>
            <td>".$row['email']."</td>
            <td>".$row['phone']."</td>
            <td>".$row['uname']."</td>
            </tr>";
        }
        echo"</table>";
    }else{
        
    }
}

if(isset($_POST['search'])) {
    include_once('connection/connect.php');
    $search = $_POST['search_1'];
    try{
        $sql = "SELECT * FROM registration WHERE matric = '$search'";
        $stmt  = $conn->prepare($sql);
        $stmt->execute();

        $result = $stmt->fetchAll();

        if ($result && $stmt->rowCount() > 0) {
            echo "<form action='update.php' method='post'>
                    <table class='table'>
                    <tr class='tr'>
                            <th>Matric Number</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Math</th>
                            <th>Physics</th>
                            <th>Chemistry</th>
                            <th>Biology</th>
                            <th>English</th>
                            ";
            foreach ($result as $row) {
                echo "
                <tr>
                <td class='td'><input type='text' name='matric' size='13' readonly value='".$row['matric']."'></td>
                <td>".$row['fname']."</td>
                <td>".$row['lname']."</td> 

                <td><input type='text' name='math' size='10' value='".$row['math']."'></td>
                <td><input type='text' name='physics' size='10' value='".$row['physics']."'></td>
                <td><input type='text' name='chemistry' size='10' value='".$row['chemistry']."'></td>
                <td><input type='text' name='biology' size='10' value='".$row['biology']."'></td>
                <td><input type='text' name='english' size='10' value='".$row['english']."'></td>
                </tr>
                <tr>
                  <td><button name='update' style='padding:10px 20px; background-color:#001D6E; border:none; color:#fff;'>Update</button></td>
                </tr>";
                echo"
                </table>
                </form>";
                exit;
            } 
        
        } else{
            echo "Record Not Found";
        }

    }catch (PDOException $error) {
        echo "<br>".$query."<br>".$error->getMessage();
    }
}

if(isset($_POST['update'])){
    include_once('connection/connect.php');
    $matric = $_POST['matric'];
    $math = $_POST['math'];
    $physics = $_POST['physics'];
    $chemistry= $_POST['chemistry'];
    $biology= $_POST['biology'];
    $english= $_POST['english'];

    $sql = "UPDATE registration SET math= '$math', physics= '$physics', biology= '$biology', chemistry= '$chemistry', english= '$english' WHERE matric = '$matric'";

    $stmt = $conn->prepare($sql);
    $stmt->execute();
    if($stmt){
        echo"<p class='signup-feedback'>Congrats<br>
        YOUR RECORDS HAVE BEEN SUCCESSFULLY UPDATED</p>";
        exit;
    }else{
        echo"OOPS, records not updated";
    }
}

?>

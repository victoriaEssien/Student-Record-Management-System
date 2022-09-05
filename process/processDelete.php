<?php 


if(isset($_POST['search'])) {
    include_once('connection/connect.php');
    $search = $_POST['search_1'];
    try{
        $sql = "SELECT * FROM registration WHERE matric = '$search'";
        $stmt  = $conn->prepare($sql);
        $stmt->execute();

        $result = $stmt->fetchAll();

        if ($result && $stmt->rowCount() > 0) {
            echo "<form action='delete.php' method='post'>
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
                  <td><button name='delete' style='padding:10px 20px; background-color:#001D6E; border:none; color:#fff;'>Delete</button></td>
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


if (isset($_POST['delete'])) {
    include_once('connection/connect.php');

    $math = $_POST['math'];

    $sql = "DELETE FROM registration WHERE math = '$math'";
    $statement = $conn->prepare($sql);
    $statement->execute();
    if ($statement){
        echo "<p class='signup-feedback'>Congrats<br>
        Your records have been successfully deleted</p>";
        exit;
    }else{
        echo "oops records not yet";
    }
}


?>

<?php 

if(isset($_POST['register'])) {
    include_once('connection/connect.php');

    $matric_no = $_POST['matric'];
    $f_name=$_POST['fname'];
    $l_name=$_POST['lname'];
    $e_mail=$_POST['email'];
    $phone=$_POST['phone'];
    $math=$_POST['math'];
    $physics=$_POST['physics'];
    $chemistry=$_POST['chemistry'];
    $biology=$_POST['biology'];
    $english=$_POST['english'];
    $u_name=$_POST['uname'];
    $p_word=$_POST['pword'];


    $new_record = array(
        "matric" => $matric_no,
        "fname"=>$f_name,
        "lname"=>$l_name,
        "email"=>$e_mail,
        "phone"=>$phone,
        "math"=>$math,
        "physics"=>$physics,
        "chemistry"=>$chemistry,
        "biology"=>$biology,
        "english"=>$english,
        "uname"=>$u_name,
        "pword"=>$p_word
        
  
    );

    try{
        $query=sprintf("INSERT INTO %s(%s) values(%s)",
        "registration",
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

if(isset($_POST['login'])){
    $matric_num = $_POST['matric'];
    $pword = $_POST['pword'];

    echo "<p class='signup-feedback'> Thank you for signing in </p>";
    echo "<div class='search-container'><a href='search.php'><button class='search-btn'>Check Result</button></a></div>";
}

if(isset($_POST['search_result'])) {
    include_once('connection/connect.php');
    $search = $_POST['search_2'];
    try{
        $sql = "SELECT * FROM registration WHERE matric = '$search'";
        $stmt  = $conn->prepare($sql);
        $stmt->execute();

        $result = $stmt->fetchAll();

        if ($result && $stmt->rowCount() > 0) {
            echo "<form action='search.php' method='post'>
                    <table>
                    <tr>
                            <th>S/N</th>
                            <th>Matric Number</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Math</th>
                            <th>Physics</th>
                            <th>Chemistry</th>
                            <th>Biology</th>
                            <th>English</th>
                            ";
            foreach ($result as $row) {
                echo "
                <tr>
                <td>".$row['sn']."</td>
                <td>".$row['matric']."</td>
                <td>".$row['fname']."</td>
                <td>".$row['lname']."</td>
                <td>".$row['email']."</td>
                <td>".$row['phone']."</td>
                <td>".$row['math']."</td>
                <td>".$row['physics']."</td>
                <td>".$row['chemistry']."</td>
                <td>".$row['biology']."</td>
                <td>".$row['english']."</td>
                </tr>";
                echo"
                </table>
                </form>";
                exit;
            } 
        
        } else{
            echo "Result Not Found";
        }

    }catch (PDOException $error) {
        echo "<br>".$query."<br>".$error->getMessage();
    }
}

?>

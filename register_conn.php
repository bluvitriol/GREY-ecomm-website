<?php

// $db_user="root";
// $db_pass="";
// $db_name="grey";

// $con = new PDO('mysql:host=localhost;dbname=' . $db_name . ';charset=utf8', $db_user, $db_pass);
// $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "grey";

// Create connection
$connect = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}

// Set character set
$connect->set_charset("utf8");

// Set error mode to throw exceptions
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// You can now use $connect object for your mysqli operation

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['register_password'];
    $conf_password = $_POST['conf_register_password'];

    // Hashing passwords
    // $password = password_hash($pass, PASSWORD_BCRYPT);
    // $conf_password = password_hash($conf_pass, PASSWORD_BCRYPT);

    // Check if email is already registered
    $emailquery = "SELECT * FROM register_user WHERE email=?";
    $stmt = $connect->prepare($emailquery);
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $emailcount = $result->num_rows;

    if($emailcount > 0){
        ?>
        <script>
        alert("Email already registered!");
        </script>
        <?php
    }else{
        if($password === $conf_password){
            // Insert new user into the database
            $sql = "INSERT INTO register_user (name, email, password, conf_password) VALUES(?, ?, ?, ?)";
            $stmtinsert = $connect->prepare($sql);
            $stmtinsert->bind_param('ssss', $name, $email, $password, $conf_password);
            if($stmtinsert->execute()){
                echo 'Successfully saved.';
                header('Location: index.html');
        exit;
            } else {
                echo 'Error saving data.';
            }
        }else{
            echo 'Passwords do not match!';
        }
    }

    // Close connection
    $connect->close();
}

?>
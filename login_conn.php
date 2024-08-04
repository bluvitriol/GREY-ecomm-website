<?php

$connect=mysqli_connect('localhost', 'root');
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

mysqli_select_db($connect, 'grey');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $password = mysqli_real_escape_string($connect, $_POST['password']);

    $query = "SELECT * FROM register_user WHERE email='$email' AND password='$password'";
    $result = mysqli_query($connect, $query);

    if (!$result) {
        die("Query failed: " . mysqli_error($connect));
    }

    if (mysqli_num_rows($result) == 1) {
        // Login successful
        header('Location: index.html');
        exit;
    } else {
        // Login failed
        ?>
        <script>
        alert("Email not registered");
        setTimeout(function() {
            window.location.href = "register.html";
        },0);
        </script>
        <?php
    }
}

mysqli_close($connect);




/*
$connect=mysqli_connect('localhost', 'root');
// if($connect){
//     echo "connected";
// }
// else{
//     echo "not connected";
// }
mysqli_select_db($connect, 'grey');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $password = mysqli_real_escape_string($connect, $_POST['password']);

    $query = "SELECT * FROM register_user WHERE email='$email' AND password='$password'";
    $result = mysqli_query($connect, $query);

    if (mysqli_num_rows($result) == 1) {
        // Login successful
        header('Location: index.html');
        exit;
    } else {
        // Login failed
        ?>
        <script>
        alert("Invalid email or password");
        setTimeout(function() {
            window.location.href = "login.html";
        },0);

        </script>
        <?php
    }
}

mysqli_close($connect);
*/


/*
$email=$_POST['email'];
$password=$_POST['password'];
$pass=password_hash($password, PASSWORD_BCRYPT);

$query="insert into login_info(email,password)
values('$email','$pass')";

mysqli_query($connect,$query);
header('location:index.html');
*/



// $db_user="root";
// $db_pass="";
// $db_name="register";

// $con = new PDO('mysql:host=localhost;dbname=' . $db_name . ';charset=utf8', $db_user, $db_pass);
// $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
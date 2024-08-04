<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "grey";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the email from the form
$email = $_POST['email'];

// Insert the email into the database
$sql = "INSERT INTO submit_newsletter (email) VALUES ('$email')";

if ($conn->query($sql) === TRUE) {
    echo "Thank you for subscribing!";
    ?>
        <script>
        setTimeout(function() {
            window.location.href = "index.html";
        },0);
        </script>
        <?php
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

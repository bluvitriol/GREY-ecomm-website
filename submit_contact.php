<?php
// Database connection parameters
$servername = "localhost"; // Change this if your database is hosted on a different server
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$dbname = "grey"; // Your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Insert data into the database
    $sql = "INSERT INTO submit_contact (name, email, message) VALUES ('$name', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Message submitted successfully";
        ?>
        <script>
        setTimeout(function() {
            window.location.href = "contact.html";
        },0);
        </script>
        <?php
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    //header("Location: " . $_SERVER['PHP_SELF']);
    // exit;
}

// Close the database connection
$conn->close();
?>

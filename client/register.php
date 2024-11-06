<?php
// Replace these values with your actual database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hotelms";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<?php
// Assuming you have a database connection established

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve username and password from the form
    $username = $_POST["username"];
    $password = $_POST["password"];



    // Insert user data into the database (Assuming you have a table named 'client')
    $query = "INSERT INTO client (username, password) VALUES ('$username', '$password')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        // Registration successful, redirect to a success page
        echo "<script>alert('Registration successful!'); window.location.href = 'login.html';</script>";
        exit();
    } else {
        // Registration failed, redirect to an error page
        echo "<script>alert('Registration Failed'); window.location.href = 'register.html';</script>";
        exit();
    }
}
?>

<?php
// Replace these values with your actual database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hotelms";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, 8111);

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

    // Validate user credentials in the database (Assuming you have a table named 'client')
    $query = "SELECT * FROM client WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        // Valid credentials, show JavaScript alert and redirect
        echo "<script>alert('Login successful!'); window.location.href = 'home.php';</script>";
        exit();
    } else {
        // Invalid credentials, redirect to a login error page
        echo "<script>alert('Wrong Login Credentials!'); window.location.href = 'login.html';</script>";
        exit();
    }
}
?>

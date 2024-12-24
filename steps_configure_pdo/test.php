

<?php
// Database credentials
$host = 'host'; // Change this to your database host if needed
$dbname = 'dbname'; // Replace with your database name
$username = 'uname'; // Replace with your database username
$password = 'upassword'; // Replace with your database password

try {
    // Create a new PDO instance
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);

    // Set PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Working";

    // Uncomment to confirm the connection
    // echo "Connected successfully!";
} catch (PDOException $e) {
    // Handle connection error
    die("Connection fd: " . $e->getMessage());

}
?>





<?php
// Database credentials
$host = 'localhost'; // Change this to your database host if needed
$dbname = 'Test'; // Replace with your database name
$username = 'root'; // Replace with your database username
$password = '123456'; // Replace with your database password

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



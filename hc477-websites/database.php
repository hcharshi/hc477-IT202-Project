<?php
$host = 'sql1.njit.edu';
$dbname = 'hc477';
$user = 'hc477';
$pass = 'Tiger$0892356';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connection successful";  // Debugging message (you can remove this later)
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
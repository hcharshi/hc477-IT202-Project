<?php
$host = 'njit.edu'; 
$dbname = 'sql1';
$user = 'hc477';
$pass = 'Tiger$0892356';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>

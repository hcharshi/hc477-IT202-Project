<?php
session_start();
if (!isset($_SESSION['login'])) {
    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome to Massage Ball Set Store Inventory</title>
</head>
<body>
    <h1>Welcome to Massage Ball Set Store Inventory</h1>
    <p>Welcome <?php echo $_SESSION['Harshi'] . " " . $_SESSION['Chalamani'] . " (" . $_SESSION['she/her'] . ")"; ?>!</p>
    <a href="logout.inc.php">Logout</a>
</body>
</html>

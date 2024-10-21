<?php
session_start();

if (!isset($_SESSION['login']) || $_SESSION['login'] !== true) {
    header('Location: index.php');
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome - Massage Ball Set Store</title>
</head>
<body>

    <h1>Welcome to Massage Ball Set Store</h1>
    <p>Hello, <?php echo htmlspecialchars($_SESSION['firstName']) . " " . htmlspecialchars($_SESSION['lastName']); ?>! (<?php echo htmlspecialchars($_SESSION['pronouns']); ?>)</p>
    <p>You are successfully logged in.</p>

    <!-- Logout link -->
    <a href="logout.php">Logout</a>

</body>
</html>

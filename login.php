<?php
// Enable error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

// Custom credentials for validation
$valid_email = 'hc477@njit.edu';
$valid_password = 'Tiger$0892356';

// Check if the user is already logged in
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    header('Location: welcome.php'); // Redirect to welcome page
    exit();
}

// Check if the form was submitted
if (isset($_POST['login'])) {
    echo "Submitted Email: " . htmlspecialchars($_POST['email']) . "<br>";
    echo "Submitted Password: " . htmlspecialchars($_POST['password']) . "<br>";

    if ($_POST['email'] === $valid_email && $_POST['password'] === $valid_password) {
        // Login successful
        $_SESSION['logged_in'] = true;
        $_SESSION['firstName'] = 'Harshi';  // Example: Set user info
        $_SESSION['lastName'] = 'Chalamani';
        $_SESSION['pronouns'] = 'she/her';
        header('Location: welcome.php'); // Redirect after successful login
        exit();
    } else {
        // Login failed
        $_SESSION['error'] = "Invalid email or password!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login to Massage Ball Set Store</title>
</head>
<body>
    <h1>Please Login to the Massage Ball Set Store</h1>
    <form method="post" action="">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" name="login" value="Login">
    </form>

    <?php
    // Display session errors if any
    if (isset($_SESSION['error'])) {
        echo "<p style='color:red;'>".$_SESSION['error']."</p>";
        unset($_SESSION['error']);
    }
    ?>
</body>
</html>

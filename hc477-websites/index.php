<?php
session_start();

include 'database.php';

if ($_SESSION['login'] === true && isset($_SESSION['login'])) {
    header('Location: welcome.php');
    exit();
}


$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM MassageBallSetManagers WHERE emailAddress = :email";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && hash('sha256', $password) === $user['password']) {
        // Set session variables
        $_SESSION['login'] = true;
        $_SESSION['emailAddress'] = $user['emailAddress'];
        $_SESSION['firstName'] = $user['firstName'];
        $_SESSION['lastName'] = $user['lastName'];
        $_SESSION['pronouns'] = $user['pronouns'];

        header('Location: welcome.php');
        exit();
    } else {
        
        $error = "Invalid email or password!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<?php
include 'database.php';

$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM MassageBallSetManagers WHERE emailAddress = :email";
$stmt = $conn->prepare($query);
$stmt->bindParam(':email', $email);
$stmt->execute();

if ($stmt->rowCount() > 0) {
    $manager = $stmt->fetch(PDO::FETCH_ASSOC);
    if (hash('sha256', $password) === $manager['password']) {
        $_SESSION['login'] = true;
        $_SESSION['emailAddress'] = $manager['emailAddress'];
        $_SESSION['firstName'] = $manager['firstName'];
        $_SESSION['lastName'] = $manager['lastName'];
        $_SESSION['pronouns'] = $manager['pronouns'];

        header('Location: main.inc.php');
        exit();
    } else {
        $_SESSION['error'] = "Sorry, login incorrect.";
        header('Location: index.php');
        exit();
    }
} else {
    $_SESSION['error'] = "Sorry, login incorrect.";
    header('Location: index.php');
    exit();
}
?>

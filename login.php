<?php
$un = $_POST["username"];
$pw = $_POST["password"];

$file = 'users.json';
$users = json_decode(file_get_contents($file), true) ?? [];
$userExists = false;

foreach ($users as $user) {
    if ($user['username'] === $un && $user['password'] === $pw) {
        $userExists = true;
        break;
    }
}

if ($userExists) {
    session_start();
    $_SESSION["username"] = ucfirst($un);
    header('Location: main.php');
    exit;
} else {
    $errorMessage = "Incorrect username or password. Please try again.";
    echo "<script>alert('$errorMessage');</script>";
    echo '<script>window.location.href = "index.php";</script>';
    exit;
}
?>

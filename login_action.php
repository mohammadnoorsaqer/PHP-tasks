<?php
session_start();
$users = []; // Normally this would come from a database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Assuming $users is fetched from a database
    foreach ($users as $user) {
        if ($user['email'] == $email && password_verify($password, $user['password'])) {
            $_SESSION['user_email'] = $email;
            header('Location: welcome.php');
            exit();
        }
    }

    echo "Invalid email or password.";
}
?>

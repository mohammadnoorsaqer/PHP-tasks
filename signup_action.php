<?php
session_start();
$users = []; // Normally you would retrieve this from a database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $familyname = $_POST['familyname'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $day = $_POST['day'];
    $month = $_POST['month'];
    $year = $_POST['year'];

    $dob = DateTime::createFromFormat('d-m-Y', "$day-$month-$year");
    $age = $dob->diff(new DateTime())->y;

    if ($age < 16) {
        echo "You must be at least 16 years old.";
        exit();
    }

    if ($password !== $confirm_password) {
        echo "Passwords do not match.";
        exit();
    }

    // Store user data
    $users[] = [
        'email' => $email,
        'mobile' => $mobile,
        'name' => "$fname $mname $lname $familyname",
        'password' => password_hash($password, PASSWORD_DEFAULT),
        'dob' => $dob->format('Y-m-d'),
    ];

    $_SESSION['user_email'] = $email;
    header('Location: welcome.php');
    exit();
}
?>

<?php

$conn = mysqli_connect("localhost", "root", "", "task3back");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";

$email = $_POST['email'];
$password = $_POST['password'];


$sql = "SELECT * FROM users WHERE email = '$email' and password = '$password'";
if (($result = $conn->execute_query($sql))) {
    if (mysqli_num_rows($result) == false) {
        header("Location:login.html?error=کاربر یافت نشد");
        return false;
    } else {
        header("Location:panel.php");
        // $_SESSION['email'] = $email;
        setcookie('logged_in', '112233445566778899', [
            'expires' => time() + (86400 * 30),
            'path' => '/'
        ]);
        exit();
    }
} else {
    return false;
}

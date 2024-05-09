<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>panel</title>
</head>
<style>
    body {
        text-align: center;
    }

    input {
        width: 30%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    button {
        width: 30%;
        background-color: #4caf50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
</style>

<body>
    <h1>panel</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem earum </p>
    <br><br>
    <form action="logout.php" method="get">
        <button>Log Out</button>
    </form><br><br><br>
    <a href="register.html">Register</a><br><br>
    <a href="login.html">Log in</a><br>
</body>
<?php
// session_start();
if (isset($_COOKIE['logged_in'])) {
    // echo ('hi');
} else {
    header('Location: login.html');
    exit();
}

?>

</html>
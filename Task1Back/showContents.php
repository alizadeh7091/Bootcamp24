<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $conn = mysqli_connect("localhost", "root", "", "task1back");
    
    $result = $conn->query("SELECT * FROM content");
    foreach ($result as $item) {
        echo $item['id'] . "   ";
        echo $item['contents'] ."<br>";
    }
    $conn->close();
    ?>
    <br>
    <form action="panel.html">
        <button>home</button>
    </form>
</body>
</html>


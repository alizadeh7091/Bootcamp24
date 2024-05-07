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
    $content = $_POST["content"];
    $id = $_POST["id"];
    $sql = $conn->query("UPDATE content SET contents ='$content' WHERE id = $id");
    echo ($id) ;
    echo ($content) ;
    $conn->close();
    ?>
    <form action="panel.html">
        <button>home</button>
    </form>
</body>
</html>
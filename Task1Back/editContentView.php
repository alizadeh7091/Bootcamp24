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
        // echo $item['id'] . "   ";
        // echo $item['contents'] ."<br>";
        echo "<form action='editContent.php' method='post'>";
        echo $item['id'] . "   ";
        echo "<input type='hidden' name='id' value='".$item['id']."'>";
        echo "<input type='text' name='content' value='".$item['contents']."'>";
        echo "<button type='submit'>Edit</button>";
        echo "</form><br>";
    }
    $conn->close();
    ?>
    <br>
    <form action="panel.html">
        <button>home</button>
    </form>
</body>
</html>


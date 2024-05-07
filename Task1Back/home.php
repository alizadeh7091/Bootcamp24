<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
</head>

<body>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "task1back");

    $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
    $per_page = isset($_GET['per-page']) && $_GET['$per-page'] <= 10 ? (int)$_GET['per-page'] : 5;

    $contents = $conn->query("SELECT * FROM content LIMIT 0,5");
    echo "<pre>";
    print_r($contents->fetch_all());
    ?>
</body>

</html>
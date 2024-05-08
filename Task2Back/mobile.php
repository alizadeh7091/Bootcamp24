<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            text-align: left;
            padding: 2px;
            padding-left: 7px;
        }

        th:nth-child(even),
        td:nth-child(even) {
            background-color: #D6EEEE;
        }

        table {
            width: 100%;
        }
    </style>
</head>

<body>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "task2back");

    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }

    $mobile = $_POST['mobile'];
    $results_per_page = 20;
    $result  =$conn->query ("SELECT * from users where (mobile) = '$mobile'");
    $number_of_result = mysqli_num_rows($result);  

    // echo($number_of_result);
    $number_of_page = ceil ($number_of_result / $results_per_page); 
    // echo($number_of_page);

    if (!isset($_GET['page'])) {
        $page = 1;
    } else {
        $page = $_GET['page'];
    };
    $pagee = settype($page,'integer');
    $page_first_result = ($pagee - 1) * $results_per_page;

    // $result = $conn->query("SELECT * from users where (mobile) = '$mobile'");

    if ($result->num_rows > 0) {
        echo ("<table >
        <tr><th>id</th>
        <th>name</th>
        <th>family</th>
        <th>personalId</th>
        <th>mobile</th></tr>
        ");

        foreach ($result as $item) {
            echo
            "<tr>
        <td>$item[id]</td>
        <td>$item[name]</td>
        <td>$item[family]</td>
        <td>$item[personalId]</td>
        <td>$item[mobile]</td>
        </tr>";
        }
        echo "</table>";
    } 
    else 
    {
        echo ("user not found<br>.");

    };

    $conn->close();
    ?>
    <br>
    <form action="home.html">
        <button>home</button>
    </form>
</body>

</html>
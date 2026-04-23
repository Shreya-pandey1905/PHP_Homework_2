<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">

        Name:
        <input type="text" name="name"><br><br>
        Position:
        <input type="text" name="position"><br><br>
        Salary:
        <input type="text" name="salary"><br><br>

        <input type="submit" value="Submit"><br><br>

    </form>
</body>

</html>

<?php
include "db.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = $_POST['name'];
    $position = $_POST['position'];
    $salary = $_POST['salary'];


    $sql = $conn->prepare('insert into employees(name,position,salary) values(?,?,?)');
    $sql->bind_param('ssd', $name, $position, $salary);
    if ($sql->execute()) {
        echo "data inserted...";
    } else {
        echo "not insertted..";
    }


}
?>
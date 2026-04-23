<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">

        ID:
        <input type="text" name="id"> <br><br>
        Name:
        <input type="text" name="name"><br><br>
        Salary:
        <input type="text" name="sal"><br><br>

        <input type="submit" value="Submit"><br><br>

    </form>
</body>

</html>

<?php
include "db.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $id = $_POST['id'];
    $name = $_POST['name'];
    $sal = $_POST['sal'];


    $sql = $conn->prepare('update em2 set name=?, salary=? where id=?');
    $sql->bind_param('sdi', $name, $sal, $id);
    if ($sql->execute()) {
        echo "data updated...";
    } else {
        echo "not updated..";
    }


}
?>
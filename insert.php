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
        Job Title:
        <input type="text" name="job"><br><br>
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
    $job = $_POST['job'];
    $sal = $_POST['sal'];


    $sql=$conn->prepare('insert into em2 values(?,?,?,?)');
    $sql->bind_param('issd',$id,$name,$job,$sal);
    if($sql->execute()){
        echo"data inserted...";
    }
    else{
        echo"not insertted..";
    }


}
?>
<?php 
include "db.php";
$result=$conn->query("select * from employees");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

    </style>
</head>
<body>

<h1 style="text-align:center">Details</h1>
<table border="1"  style="background: linear-gradient(rgb(244, 170, 74),rgb(181, 242, 116),rgb(231, 109, 211)); text-align: center; margin: auto; border-collapse: collapse;">
    <tr style="padding: 15px;">
        <td style="padding: 15px;">ID</td>
        <td style="padding: 15px;">Name</td>
        <td style="padding: 15px;">Position</td>
        <td style="padding: 15px;">Salary</td>
    </tr>

    <?php while($row=$result->fetch_assoc()){?>

    <tr>
        <td style="padding: 15px;"><?php echo $row['id'] ?></td>
        <td style="padding: 15px;"><?php echo $row['name'] ?></td>
        <td style="padding: 15px;"><?php echo $row['position'] ?></td>
        <td style="padding: 15px;"><?php echo $row['salary'] ?></td>
    </tr>


    <?php } ?>

</table>

    
</body>
</html>
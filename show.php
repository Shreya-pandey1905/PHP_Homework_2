<?php 
include "db.php";
$result=$conn->query("select * from em2");

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
<table border="1"  style="background: linear-gradient(rgb(108, 238, 195),rgb(236, 170, 79),rgb(90, 211, 245)); text-align: center; margin: auto; border-collapse: collapse;">
    <tr style="padding: 15px;">
        <td style="padding: 15px;">ID</td>
        <td style="padding: 15px;">Name</td>
        <td style="padding: 15px;">Job Title</td>
        <td style="padding: 15px;">Salary</td>
    </tr>

    <?php while($row=$result->fetch_assoc()){?>

    <tr>
        <td style="padding: 15px;"><?php echo $row['id'] ?></td>
        <td style="padding: 15px;"><?php echo $row['name'] ?></td>
        <td style="padding: 15px;"><?php echo $row['job_title'] ?></td>
        <td style="padding: 15px;"><?php echo $row['salary'] ?></td>
    </tr>


    <?php } ?>

</table>

    
</body>
</html>
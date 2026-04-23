<?php

$server_name="localhost";
$username="root";
$pass="";
$db_name="sdac";


$conn=new mysqli($server_name,$username,$pass,$db_name);
if(!$conn){
    echo "database not connected";
}

else{
    echo "database connected";
}

?>
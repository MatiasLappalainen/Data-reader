<?php

$con = mysqli_connect('localhost:3030', 'Maziss', 'Masamasa112', 'data');

if(!con){
    die('Could not connect' .mysqli_error($con));
}

mysqli_select_db($con, "data");
$sql = "SELECT * FROM data WHERE Xaxis";
$result = mysqli_query($con,$sql);


mysqli_close($con);

?>



<?php
$con = mysqli_connect("localhost","root","123456","sql") or die("Connect Database error: ".mysqli_error($con));
mysqli_query($con,"SET NAMES 'utf8' ");
?>
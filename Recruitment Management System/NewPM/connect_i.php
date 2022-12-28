<?php
session_start();
$connection = mysqli_connect('localhost', 'root', '', 'rmsolution') or die("Database Connection Failed" . mysqli_connect_error($connection));
?>
<?php
error_reporting(E_ALL ^ E_NOTICE);
$con = mysqli_connect("localhost", "root","", "store") or die($mysqli_error($con));
session_start();
?>
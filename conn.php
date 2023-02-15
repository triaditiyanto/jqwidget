<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$database = "db_jq";

$conn = mysqli_connect($servername, $username, $password, $database);

<?php

$servername = "localhost";
$username = "yuri";
$password = "898522";
$dbname = "infotec";

$conn = new mysqli($servername, $username, $password, $dbname);
$conn->query("set names utf8");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
/*  */
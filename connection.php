<?php
$servername = "127.0.0.1:3307";
$username = "eterchain_admin";
$password = "**eterchain_password";
$database = "eterchain_db";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection Failed : " . mysqli_connect_error());
}

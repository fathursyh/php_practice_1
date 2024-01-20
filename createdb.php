<?php
function OpenCon()
{
$host = "localhost";
$user = "root";
$pass = "12345";
$db = "db_php";
$conn = new mysqli($host, $user, $pass, $db) or die("Connection failed: %s\n". $conn -> error);
return $conn;
}
function CloseCon($conn)
{
$conn -> close();
}

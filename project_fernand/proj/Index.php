<?php 
require_once 'login.php'; 
$conn = new mysqli($hn, $un, $pw, $db); 
if ($conn->connect_error) die($conn->connect_error);

$query = "SELECT * FROM sneakers"; 
$result = $conn->query($query); 
if (!$result) die ($conn-> error);

?>

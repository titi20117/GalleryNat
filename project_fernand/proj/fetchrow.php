	<?php //fetchrow.php
require_once 'login.php';
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);
$query = "SELECT * FROM football_shorts";
$result = $conn->query($query);
if (!$result) die($conn->error);
$rows = $result->num_rows;
for ($j = 0 ; $j < $rows ; ++$j)
	{
	$result->data_seek($j);
	$row = $result->fetch_array(MYSQLI_ASSOC);
	echo 'Id: ' . $row['id'] . '<br>';
	echo 'Цена: ' . $row['price'] . '<br>';
	echo 'Размер: ' . $row['size'] . '<br>';
	echo 'Цвет: ' . $row['color'] . '<br>';
	echo 'Бранд: ' . $row['brand'] . '<br>';
	// echo '<img src="$row['pictures']"/>' . '<br>';
	echo 'Description: ' . $row['description'] . '<br><br>';
}
$result->close();
$conn->close();
?>
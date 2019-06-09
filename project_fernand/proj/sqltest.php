<?PHP 
	header("Content-Type: text/html; charset=utf-8");
?>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="sqltest.css">
<?php // sqltest.php
	//проверка соединение к базам
	require_once 'login.php';
	$conn = new mysqli($hn, $un, $pw, $db);
	if ($conn->connect_error) die($conn->connect_error);
	mysqli_set_charset($conn,"utf8");
	
	//удаление продукт в базе
	if (isset($_POST['delete']) && isset($_POST['id']))
	{
		$id = get_post($conn, 'id');
		$query = "DELETE FROM sneakers WHERE id='$id'";
		$result = $conn->query($query);
		if (!$result) echo "Сбой при удалении данных: $query<br>" .
		$conn->error . "<br><br>";
	}

	//(isset($_POST['id']) &&
	//добавление продукт в базе
	if (
		isset($_POST['brand']) &&
		isset($_POST['price']) &&
		isset($_POST['size']) &&
		isset($_POST['color']) &&
		isset($_POST['src']) &&
		isset($_POST['description'])
	)
	{
		$id = get_post($conn, 'id');
		$sex = get_post($conn, 'sex');
		$size = get_post($conn, 'size');
		$price = get_post($conn, 'price');
		$brand = get_post($conn, 'brand');
		$color = get_post($conn, 'color');
		$pictures = get_post($conn, 'src');
		$description = get_post($conn, 'description');
		$query = "INSERT INTO sneakers VALUES" .
		"('$id', '$sex', '$size', '$price', '$color', '$brand', '$description', '$pictures')";
		$result = $conn->query($query);
		if (!$result) echo "Сбой при вставке данных: $query<br>" .
		$conn->error . "<br><br>";
	}

	echo <<<_END
	<form action="sqltest.php" method="post">
		<div class="products">
			<div class="products__feild">
				<span>Id</span> <input type="text" name="id">
			</div>
			<div class="products__feild">
				<span>Бренд</span> <input type="text" name="brand">	
			</div>
			<div class="products__feild">
				<span>Пол</span> <input type="text" name="sex">	
			</div>
			<div class="products__feild">
			<span>Цена</span> <input type="text" name="price">
			</div>
			<div class="products__feild">
			<span>Размер</span> <input type="text" name="size">
			</div>
			<div class="products__feild">
			<span>Цвет</span> <input type="text" name="color">
			</div>
			<div class="products__feild">
				<span>Фото</span> <input type="text" name="src">
			</div>
			<div class="products__feild">
				
				<span>Комментарии</span> <input type="text" name="description">
			</div>
			<input type="submit" value="Добавить запись" class="products__submit btn btn-success">
		</div>
	</form>
	_END;
	$query = "SELECT * FROM sneakers";
	$result = $conn->query($query);
	if (!$result) die ("Сбой при доступе к базе данных: " . $conn->error);
	$rows = $result->num_rows;
	for ($j = 0 ; $j < $rows ; ++$j)
	{
		$result->data_seek($j);
		$row = $result->fetch_array(MYSQLI_NUM);
		echo <<<_END
		<pre>
		Id $row[0]
		Кеды $row[6]
		Размер $row[2]
		Цена $row[3]
		Бранд $row[5]
		</pre>
		<form action='sqltest.php' method='post'>
		<input type='hidden' name='delete' value='yes'>
		<input type='hidden' name='id' value='$row[0]'>
		<input type='submit' value='Удалить запись'></form> 
		_END;
	}
	$result->close();
	$conn->close();

	function get_post($conn, $var)
	{
		return $conn->real_escape_string($_POST[$var]);
	}
?>
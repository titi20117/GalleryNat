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
		$query = "DELETE FROM pictures WHERE id='$id'";
		$result = $conn->query($query);
		if (!$result) echo "Сбой при удалении данных: $query<br>" .
		$conn->error . "<br><br>";
	}

	//(isset($_POST['id']) &&
	//добавление продукт в базе
	if (
		isset($_POST['name']) &&
		isset($_POST['size']) &&
		isset($_POST['price']) &&
		isset($_POST['src']) &&
		isset($_POST['description']) &&
		isset($_POST['category'])
	)
	{
		$id = get_post($conn, 'id');
		$name = get_post($conn, 'name');
		$size = get_post($conn, 'size');
		$price = get_post($conn, 'price');
		$src = get_post($conn, 'src');
		$description = get_post($conn, 'description');
		$category = get_post($conn, 'category');
		$query = "INSERT INTO pictures VALUES" .
		"('$id', '$name', '$size', '$price', '$src', '$description', '$category')";
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
				<span>Название</span> <input type="text" name="name">	
			</div>
			<div class="products__feild">
				<span>Размер</span> <input type="text" name="size">	
			</div>
			<div class="products__feild">
				<span>Цена</span> <input type="text" name="price">
			</div>
			<div class="products__feild">
				<span>Фотография</span> <input type="text" name="src">
			</div>
			<div class="products__feild">
				<span>Комментарий</span> <input type="text" name="description">
			</div>
			<div class="products__feild">
				<span>Категория</span> <input type="text" name="category">
			</div>
			
			<input type="submit" value="Добавить Картину" class="products__submit btn btn-success">
		</div>
	</form>
	_END;
	$query = "SELECT * FROM pictures";
	$result = $conn->query($query);
	if (!$result) die ("Сбой при доступе к базе данных: " . $conn->error);
	$rows = $result->num_rows;
	for ($j = 0 ; $j < $rows ; ++$j)
	{
		$result->data_seek($j);
		$row = $result->fetch_array(MYSQLI_NUM);
		echo <<<_END
		<pre class="show-result">
				Id : $row[0]
				Название : $row[1]
				Размер : $row[2]
				Цена : $row[3]
				Категории : $row[6]
		</pre>
		<form action='sqltest.php' method='post'>
		<input type='hidden' name='delete' value='yes'>
		<input type='hidden' name='id' value='$row[0]'>
		<input type='submit' value='Удалить запись' class="btn btn-danger deleteItem" style="position: relative; left: 120px"></form> 
		_END;
	}
	$result->close();
	$conn->close();

	function get_post($conn, $var)
	{
		return $conn->real_escape_string($_POST[$var]);
	}
?>
// query.php
<?php header("Content-Type: text/html; charset=utf-8");?>
<!-- <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"> -->
<?php
    require_once 'login.php'; 
    $conn = new mysqli ($hn, $un, $pw, $db); 
    if ($conn->connect_error) die($conn->connect_error); 
    $query = "SELECT * FROM pictures"; 
    $result = $conn->query($query); 
    if (!$result) die ($conn->error); 
    $rows = $result->num_rows; 
    for ($j = 0 ; $j < $rows ; ++$j) 
    { 
    $result->data_seek($j); 
    echo 'Id: ' . $result->fetch_assoc()['id'] . '<br>';
    $result->data_seek($j); 
    echo 'Название: ' . $result->fetch_assoc()['name'] . '<br>'; 
    $result->data_seek($j); 
    echo 'Размер: ' . $result->fetch_assoc()['size'] . '<br>';
    $result->data_seek($j); 
    echo 'Цена: ' . $result->fetch_assoc()['price'] . '<br>';
    $result->data_seek($j); 
    echo 'src: ' . $result->fetch_assoc()['src'] . '<br>'; 
    $result->data_seek($j);
    echo 'Категории: ' . $result->fetch_assoc()['category'] . '<br>'; 
    $result->data_seek($j); 
    echo 'Комментарии: ' . $result->fetch_assoc()['description'] . '<br><br>'; 
    } 
    $result->close(); 
    $conn->close();  
// require_once 'login.php'; 
// $conn = new mysqli ($hn, $un, $pw, $db); 
// if ($conn->connect_error) die($conn->connect_error); 
// $query = "SELECT * FROM sneakers"; 
// $result = $conn->query($query); 
// if (!$result) die ($conn->error); 
// $rows = $result->num_rows; 
// for ($j = 0 ; $j < $rows ; ++$j) 
// { 
// $result->data_seek($j); 
// echo 'Id: ' . $result->fetch_assoc()['id'] . '<br>';
// $result->data_seek($j); 
// echo 'Пол: ' . $result->fetch_assoc()['sex'] . '<br>'; 
// $result->data_seek($j); 
// echo 'Размер: ' . $result->fetch_assoc()['size'] . '<br>';
// $result->data_seek($j); 
// echo 'Цена: ' . $result->fetch_assoc()['price'] . '<br>';
// $result->data_seek($j); 
// echo 'Цвет: ' . $result->fetch_assoc()['color'] . '<br>'; 
// $result->data_seek($j);
// echo 'Бренд: ' . $result->fetch_assoc()['brand'] . '<br>'; 
// $result->data_seek($j); 
// echo 'Комментарии: ' . $result->fetch_assoc()['description'] . '<br><br>'; 
// } 
// $result->close(); 
// $conn->close();
?>

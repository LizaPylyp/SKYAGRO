<?php
$name = filter_var(trim($_POST['name']),
FILTER_SANITIZE_STRING);
$location= filter_var(trim($_POST['location']),
FILTER_SANITIZE_STRING);
$volume= filter_var(trim($_POST['volume']),
FILTER_SANITIZE_STRING);
$telefon= filter_var(trim($_POST['telefon']),
FILTER_SANITIZE_STRING);
$mysql = new mysqli('localhost', 'root', 'sky17-sky3108', 'skyagro8 skymodal');
if ($mysqli->connect_errno) {
    echo "Помилка підключення до MySQL: " . $mysqli->connect_error;
    exit();
}

$query = "INSERT INTO `Forma` (name, location, volume, telefon) VALUES ('$name', '$location', '$volume', '$telefon')";

if ($mysqli->query($query) === TRUE) {
    echo "Запис успішно додано до бази даних";
} else {
    echo "Помилка при виконанні запиту: " . $mysqli->error;
}
$mysql-> close();
?>
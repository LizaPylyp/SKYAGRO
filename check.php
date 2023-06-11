<?php
$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
$location = filter_var(trim($_POST['location']), FILTER_SANITIZE_STRING);
$volume = filter_var(trim($_POST['volume']), FILTER_SANITIZE_STRING);
$telefon = filter_var(trim($_POST['telefon']), FILTER_SANITIZE_STRING);

$mysqli = new mysqli('localhost', 'skyagro8_skymodal', 'sky17-sky3108', 'skyagro8_skymodal');

if ($mysqli->connect_errno) {
    echo "Помилка підключення до MySQL: " . $mysqli->connect_error;
    exit();
}

$query = "INSERT INTO Forma (name, location, volume, telefon) VALUES (?, ?, ?, ?)";
$stmt = $mysqli->prepare($query);

if (!$stmt) {
    echo "Помилка при підготовці запиту: " . $mysqli->error;
    exit();
}

$stmt->bind_param("ssss", $name, $location, $volume, $telefon);

if ($stmt->execute()) {
    echo "Запис успішно додано до бази даних";
} else {
    echo "Помилка при виконанні запиту: " . $stmt->error;
}

$stmt->close();
$mysqli->close();
header('Location: /')
?>
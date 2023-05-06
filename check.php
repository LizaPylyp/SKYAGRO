<?php
$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
$location = filter_var(trim($_POST['location']), FILTER_SANITIZE_STRING);
$volume = filter_var(trim($_POST['volume']), FILTER_SANITIZE_STRING);
$telefon = filter_var(trim($_POST['telefon']), FILTER_SANITIZE_STRING);

if(mb_strlen($location) < 10 || mb_strlen($location) > 400){
    echo "Недопустима довжина адреси";
    exit();
} else if(mb_strlen($telefon) < 7 || mb_strlen($telefon) > 19){
    echo "Недопустима довжина номеру телефону";
    exit();
}

$mysqli = new mysqli('localhost', 'root', 'password', 'database_name');
if ($mysqli->connect_errno) {
    echo "Помилка з'єднання з базою даних: " . $mysqli->connect_error;
    exit();
}

$sql = "INSERT INTO regi (name, location, volume, telefon) VALUES (?, ?, ?, ?)";
$stmt = $mysqli->prepare($sql);
if (!$stmt) {
    echo "Помилка підготовки запиту: " . $mysqli->error;
    exit();
}

$stmt->bind_param("ssss", $name, $location, $volume, $telefon);
if (!$stmt->execute()) {
    echo "Помилка виконання запиту: " . $stmt->error;
    exit();
}

$stmt->close();
$mysqli->close();

header('Location: /');
exit();
?>

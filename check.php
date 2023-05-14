<?php

$connect = mysqli_connect(
    host: 'localhost',
    user: 'root@localhost',
    password: '',
    database: 'SkyAgro'
);

if (!$connect) {
    die ('Error connect to database!');
}

$name = $_POST['name'];
$location = $_POST['location'];
$volume = $_POST['volume'];
$telefon = $_POST['telefon'];

mysqli_query($connect, "INSERT INTO `forma` (`name`, `location`, `volume`, `telefon`) VALUES ('$name', '$location', '$volume', '$telefon')");

?>
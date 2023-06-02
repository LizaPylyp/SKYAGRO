<?php
$name = filter_var(trim($_POST['name']),
FILTER_SANITIZE_STRING);
$location= filter_var(trim($_POST['location']),
FILTER_SANITIZE_STRING);
$volume= filter_var(trim($_POST['volume']),
FILTER_SANITIZE_STRING);
$telefon= filter_var(trim($_POST['telefon']),
FILTER_SANITIZE_STRING);
$mysql = new mysqli('localhost', 'root', 'root', 'skyagro8 skymodal');
$mysgl->query('INSERT INTO `Forma`( name, location, volume, telefon)
VALUES($name, $location, $volume, $telefon)');
$mysql-> close();
?>
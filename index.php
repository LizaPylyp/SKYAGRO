<form action="check.php" method="post" class="forma">
        <h4 class="forma__tutor">
            Реєстрація для замовлення
        </h4>
        <label  class="conect">Назва господарства</label>
            <input class="forma__hp12" type="text" name="name" id="name">
            <a class="forma__person" href="#"></a>
        <label class="conect">Локація</label>
            <input  class="forma__len" type="text" id="location" name="location">
            <a class="forma__telefon" href="#"></a>
        <label  class="conect">Об'єм га</label>
          <input class="forma__macb" type="number" id="volume" name="volume">
          <a class="forma__poshta" href="#"></a>
        <label class="conect">Номер телефону</label>
          <input class="forma__blb" type="tel" id="telefon" placeholder="+380" name="telefon"  ></input>
          <div class="button-forma">
        <button action="check.php" method="post" class="button-modal" type="submit">Надіслати</button>
          </div>
      </form>


      <?php
$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
$location = filter_var(trim($_POST['location']), FILTER_SANITIZE_STRING);
$volume = filter_var(trim($_POST['volume']), FILTER_SANITIZE_STRING);
$telefon = filter_var(trim($_POST['telefon']), FILTER_SANITIZE_STRING);

$mysqli = new mysqli('localhost', 'root', 'root', 'skyagro8 skymodal');
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

$mysqli->close();
?>

<?php
$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
$location = filter_var(trim($_POST['location']), FILTER_SANITIZE_STRING);
$volume = filter_var(trim($_POST['volume']), FILTER_SANITIZE_STRING);
$telefon = filter_var(trim($_POST['telefon']), FILTER_SANITIZE_STRING);

$mysqli = new mysqli('localhost', 'root', 'root', 'skyagro8 skymodal');
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

$mysqli->close();
?>

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
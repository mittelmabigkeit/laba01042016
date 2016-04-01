<meta charset="Utf-8">
<?php
$host = "localhost";
$db = "labalaba";
$charset="utf-8";
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt = array(
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
);
$user="root";
 $pass ="";
try {
    $dbh = new PDO($dsn, $user, $pass);
    echo ('Подключение есть, работаем с БД '). "<br />";
} catch (PDOException $e) {
    echo ('Подключение не удалось: ' . $e->getMessage());
}
?>
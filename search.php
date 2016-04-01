<meta charset="utf-8">
<?php
$zapros = 'SELECT name FROM laba';
$stmt = $dbh->query($zapros);
while ($row = $stmt->fetch())
{
    echo $row['name'] . "<br />";
}
?>
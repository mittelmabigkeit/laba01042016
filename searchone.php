<meta charset="utf-8">
<?php
$sth = $dbh->prepare('SELECT * FROM laba WHERE id = ?');
$sth->execute(array('1'));
foreach ($sth as $row)
{
    echo $row['id'] . "&nbsp". $row['name'] . "&nbsp". $row['fname'] . "<br />";
}
?>
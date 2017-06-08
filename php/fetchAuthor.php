<?php
/*Establish connection*/
require "connect.php";

/*Select user from users table that matches id*/
$stmt = $dbh->prepare("SELECT * FROM users WHERE userId = ?");
$stmt->bindParam(1, $userId);
$stmt->execute();

$author = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<?php
$header = $_POST['header'];
$imgSrc = $_POST['imgSrc'];
$imgAlt = $_POST['imgAlt'];
$content = $_POST['content'];
$publish = time();

require "connect.php";

$statement = $dbh->prepare("INSERT INTO articles(header, imgSrc, imgAlt, content, publish) VALUES(?, ?, ?, ?, ?)");
$statement->bindParam(1, $header);
$statement->bindParam(2, $imgSrc);
$statement->bindParam(3, $imgAlt);
$statement->bindParam(4, $content);
$statement->bindParam(5, $publish);
$statement->execute();

header("Location: ../index.php", true, 303);
?>
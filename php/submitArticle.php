<?php
/*Get session details*/
session_start();

/*Get form values*/
$header = $_POST['header'];
$imgSrc = $_POST['imgSrc'];
$imgAlt = $_POST['imgAlt'];
$content = $_POST['content'];
$publish = time();

require "connect.php";

/*Get user values*/
$stmt = $dbh->prepare("SELECT * FROM users WHERE email = ?");
$stmt->bindParam(1, $_SESSION['email']);
$stmt->execute();
if($author = $stmt->fetch()) {
    $userId = $author['userId'];
}

$statement = $dbh->prepare("INSERT INTO articles(header, imgSrc, imgAlt, content, publish, userId) VALUES(?, ?, ?, ?, ?, ?)");
$statement->bindParam(1, $header);
$statement->bindParam(2, $imgSrc);
$statement->bindParam(3, $imgAlt);
$statement->bindParam(4, $content);
$statement->bindParam(5, $publish);
$statement->bindParam(6, $userId);
$statement->execute();

header("Location: ../index.php", true, 303);
?>
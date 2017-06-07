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
    $userName = $author['userName'];
    $profilePic = $author['profilePic'];
}

$statement = $dbh->prepare("INSERT INTO articles(header, imgSrc, imgAlt, content, publish, userName, profilePic) VALUES(?, ?, ?, ?, ?, ?, ?)");
$statement->bindParam(1, $header);
$statement->bindParam(2, $imgSrc);
$statement->bindParam(3, $imgAlt);
$statement->bindParam(4, $content);
$statement->bindParam(5, $publish);
$statement->bindParam(6, $userName);
$statement->bindParam(7, $profilePic);
$statement->execute();

header("Location: ../index.php", true, 303);
?>
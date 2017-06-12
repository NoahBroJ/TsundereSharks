<?php
session_start();

$id = $_GET['id'];

require "connect.php";

$stmt = $dbh->prepare("SELECT * FROM articles WHERE articleId=$id");
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if (isset($_SESSION['userName']) && !empty($_SESSION['userName'])) {
    if ($_SESSION['access'] == 1 || ( $_SESSION['access'] == 2 && $_SESSION['userId'] == $row['userId'] )) {
        $statement = $dbh->prepare("DELETE FROM articles WHERE articleId=$id");
        $statement->execute();
header("location: ../index.php");
    }
}

?>
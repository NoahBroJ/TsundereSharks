<?php
/*Establish connection*/
require "connect.php";

/*Select everything from the articles table*/
$statement = $dbh->prepare("SELECT * FROM articles");
$statement->execute();
?>
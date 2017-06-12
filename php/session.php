<?php
$email = $_POST['email'];
$password = $_POST['password'];

require "connect.php";

$statement = $dbh->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
$statement->bindParam(1, $email);
$statement->bindParam(2, $password);
$statement->execute();

if($row = $statement->fetch()) {
    /*Login lykkedes*/
    session_start();
    $_SESSION['userId'] = $row['userId'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['access'] = $row['access'];
    $_SESSION['userName'] = $row['userName'];
    
    header("location: ../index.php");
} else {
    /*Brugeren har indtastet forkerte oplysninger*/
    echo "Invalid email or password";
    header("location: ../index.php");
}

?>
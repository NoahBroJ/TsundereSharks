<?php
/*Get form values*/
$email = $_POST['email'];
$userName = $_POST['userName'];
$profilePic = $_POST['profilePic'];
$password = $_POST['password'];
$repassword = $_POST['repassword'];

/*Check if password and repassword match*/
if ($password != $repassword) {
    /*Return password match error*/
} else {
    require "connect.php";
    
    /*Check duplicate emails in database*/
    /*$stmt = dbh->*/
    
    /*Insert into database*/
    $statement = $dbh->prepare("INSERT INTO users(email, password, userName, profilePic) VALUES(?, ?, ?, ?)");
    $statement->bindParam(1, $email);
    $statement->bindParam(2, $password);
    $statement->bindParam(3, $userName);
    $statement->bindParam(4, $profilePic);
    $statement->execute();
    
    header("Location: ../index.php", true, 303);
}
?>
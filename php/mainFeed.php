<?php
/*Fetch article data*/
require "fetchArticle.php";

/*Go through all articles*/
while ($row = $statement->fetch(PDO::FETCH_ASSOC)){
    
    /*Get userId and use it to access user data*/
    $userId = $row['userId'];
    require "fetchAuthor.php";
?>
    <article id="<?php echo $row['articleId'] ?>">
        <h1><?php echo $row['header'] ?></h1>
        
        <?php
        /*If user has access level 1 or has access level 2 and is the author, display delete button*/
        if (isset($_SESSION['userName']) && !empty($_SESSION['userName'])) {
            if ($_SESSION['access'] == 1 || ( $_SESSION['access'] == 2 && $_SESSION['userId'] == $row['userId'] )) { ?>
                
                <a href="php/deleteArticle.php?id=<?php echo $row['articleId'] ?>">X</a>
                
        <?php } } ?>
        
        <img class="article-pic" src="<?php echo $row['imgSrc'] ?>" alt="<?php echo $row['imgAlt'] ?>">
        <p><?php echo $row['content'] ?></p>
        <footer>
            <div class="author-box">
                <img src="<?php echo $author['profilePic'] ?>" alt="<?php echo $row['userName']." profile picture" ?>" class="profile-pic">
                <i class="author"><?php echo $author['userName'] ?></i>
            </div>
            <i class="time-stamp"><?php echo date("H:i - jS \of M - Y", $row['publish']) ?></i>
        </footer>
    </article>
<?php
}

/*Close connection*/
$dbh = null;
?>
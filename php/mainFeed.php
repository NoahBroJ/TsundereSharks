<?php
require "fetchArticle.php";

while ($row = $statement->fetch(PDO::FETCH_ASSOC)){

    $userId = $row['userId'];
    require "fetchAuthor.php";
?>
    <article id="<?php echo $row['articleId'] ?>">
        <h1><?php echo $row['header'] ?></h1>
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

$dbh = null;
?>
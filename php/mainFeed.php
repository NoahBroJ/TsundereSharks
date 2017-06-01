<?php
require "fetchArticle.php";

while ($row = $statement->fetch(PDO::FETCH_ASSOC)){
?>
    <article id="<?php echo $row['articleId'] ?>">
        <h1><?php echo $row['header'] ?></h1>
        <img class="article-pic" src="<?php echo $row['imgSrc'] ?>" alt="<?php echo $row['imgAlt'] ?>">
        <p><?php echo $row['content'] ?></p>
        <footer>
            <div class="author-box">
                <i class="author"><?php echo $row['authorId'] ?></i>
            </div>
            <i class="time-stamp"><?php echo $row['publish'] ?></i>
        </footer>
    </article>
<?php
}

$dbh = null;
?>
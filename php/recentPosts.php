<?php
require "fetchArticle.php";

$maxArticles = 5;
$articles = 0;

while ($row = $statement->fetch(PDO::FETCH_ASSOC) and $articles < $maxArticles){
?>
    <article id="recent-<?php echo $articles ?>" data-articleId="<?php echo $row['articleId'] ?>">
        <h3><?php echo $row['header'] ?></h3>
        <p><?php echo $row['content'] ?></p>
    </article>
<?php
    $articles++;
}

$dbh = null;
?>
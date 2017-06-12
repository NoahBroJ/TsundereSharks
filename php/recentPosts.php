<?php
/*Fetch article data*/
require "fetchArticle.php";

/*Define number of articles to display and article counter*/
$maxArticles = 5;
$articles = 0;

/*Go through all articles until max articles to display*/
while ($row = $statement->fetch(PDO::FETCH_ASSOC) and $articles < $maxArticles){
?>
    <article id="recent-<?php echo $articles ?>" data-articleId="<?php echo $row['articleId'] ?>">
        <h3><?php echo $row['header'] ?></h3>
        <p><?php echo $row['content'] ?></p>
    </article>
<?php
    $articles++;
}

/*close connection*/
$dbh = null;
?>
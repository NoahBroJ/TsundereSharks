<?php
require "fetchArticle.php";

while ($row = $statement->fetch(PDO::FETCH_ASSOC)){
?>
    <article data-articleId="<?php echo $row['articleId'] ?>">
        <h3><?php echo $row['header'] ?></h3>
        <p><?php echo $row['content'] ?></p>
    </article>
<?php
}

$dbh = null;
?>
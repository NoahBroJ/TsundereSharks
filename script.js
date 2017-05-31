$(document).ready(function() {
    $("#recent-posts > article").on("click", function() {
        var articleId = "#" + $(this).data("articleid");
        var article = $(articleId);
        (window).scrollTo(0, article.scrollTop());
    })
})
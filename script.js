$(document).ready(function() {
    $("#recent-posts > article").on("click", function() {
        var articleId = "#" + $(this).data("articleid");
        var article = $(articleId);
        $("html, body").animate({
            scrollTop: article.offset().top;
        }, 400);
    });
});
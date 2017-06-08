$(document).ready(function() {
    /*Variables for fixing/unfixing news-wrapper*/
    var newsPos = $("#news-pos").offset().top;
    var newsLeft = $("#news-pos").offset().left;
    var newsWidth = $("#news-pos").width();
    
    $(window).resize(function() {
        newsPos = $("#news-pos").offset().top;
        newsLeft = $("#news-pos").offset().left;
        newsWidth = $("#news-pos").width();
    });
    
    /*Link recent post articles to main feed articles*/
    $("#recent-posts > article").on("click", function() {
        var articleId = "#" + $(this).data("articleid");
        var article = $(articleId);
        $("html, body").animate({
            scrollTop: article.offset().top
        }, 400);
    });
    
    /*If necessary, set news-wrapper to position fixed on load*/
    if ($(window).scrollTop() > newsPos) {
        $(".news-wrapper").css({"width": newsWidth + "px", "left": newsLeft, "top": 0, "position": "fixed"});
    }
    
    /*If necessary, set news-wrapper to position fixed on scroll*/
    $(window).on("scroll", function() {
        if ($(window).scrollTop() > newsPos) {
            $(".news-wrapper").css({"width": newsWidth + "px", "left": newsLeft, "position": "fixed"});
        } else {
            $(".news-wrapper").css({"width": "auto", "left": 0, "position": "static"});
        }
    });
    
    $(window).resize(function() {
        if ($(window).scrollTop() > newsPos) {
            $(".news-wrapper").css({"width": newsWidth + "px", "left": newsLeft});
        }
    });
    
    /*Shorten p-tag on recent articles*/
    var pLength = 90;
    for (i = 0; i < 5; i++) {
        if ($("#recent-" + i + "> p").text().length > pLength) {
            var p = $("#recent-" + i + " > p");
            var newString = p.text().substring(0, pLength - 3);
            
            var lastSpace = newString.lastIndexOf(" ");
            
            newString = newString.substring(0, lastSpace);
            
            newString = newString + "...";
            p.text(newString);
        }
    }
});
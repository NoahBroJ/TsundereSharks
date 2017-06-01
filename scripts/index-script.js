$(document).ready(function() {
    /*Variables for fixing/unfixing news-wrapper*/
    var newsPos = $(".news-wrapper").offset().top;
    var newsLeft = $(".news-wrapper").offset().left;
    var newsWidth = $(".news-wrapper").width();
    
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
    
    for (i = 0; i < 5; i++) {
        if ($("#recent-" + i + "> p").text().length > 30) {
            var p = $("#recent-" + i + " > p");
            var newString = p.text().substring(0, 27);
            
            var lastSpace = p.text().indexOf(" ");
            console.log("Element number " + i + " has last space at " + lastSpace);
            
            /*newString = newString.substring(0, lastSpace);*/
            
            newString = newString + "...";
            p.text(newString);
        }
    }
    
    console.log($("#recent-2 > p").text().length);
});
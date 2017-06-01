$(document).ready(function() {
    $(".link-item").on("click", function() {
        $(".active-link").removeClass("active-link");
        $(this).addClass("active-link");
    })
})
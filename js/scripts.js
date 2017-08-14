$(function() {
    $(".hamburger").click(function() {
        $(this).toggleClass("is-active");

        $(".mobile-nav").toggleClass("open");
    });

    $(".job-modal-trigger").each(function() {
        var $img = $(this).find("img"),
            $title = $(this).find("h3"),
            $blurb = $(this).data("blurb"),
            $url = $(this).data("url"),
            $modal = $("#modal"),
            $modalTitle = $modal.find(".modal__title"),
            $modalImg = $modal.find(".modal__img"),
            $modalUrl = $modal.find(".modal__url"),
            $modalBlurb = $modal.find(".modal__blurb");
        $(this).click(function() {
            $modal.fadeIn("fast");
            $modalTitle.text($title.text());
            $modalImg.attr("src", $img.attr("src"));
            $modalBlurb.text($blurb);
            $modalUrl.attr("href", $url);
        });
    });

    $(".modal-overlay").click(function(e) {
        $(this).fadeOut("fast");
    });

    $(".modal__close").click(function() {
        $(".modal-overlay").fadeOut("fast");
    });

    $(".modal-overlay > div").click(function(e) {
        e.stopPropagation();
    });

    $(".nav-link").click(function(event){
        event.preventDefault();
    
        $('html, body').animate({
            scrollTop: $( $.attr(this, 'href') ).offset().top
        }, 500);
    });

    var $scroll = $(this).scrollTop();
    if ($scroll >= 300) {
        $(".main-nav").addClass("fixed-nav");
    }

    $(".nav-link").each(function() {
        $(this).click(function() {
            $(".hamburger").click();
        });
    });

    var lastScrollTop = 0;
    $(window).scroll(function() {
        var $scroll = $(this).scrollTop();
        if ($scroll > lastScrollTop) {
            if ($scroll >= 400) {
                $(".main-nav").addClass("fixed-nav");
            }
        } else {
            if ($scroll <= 400) {
                $(".main-nav").removeClass("fixed-nav");
            }
        }
        lastScrollTop = $scroll;
    });
});
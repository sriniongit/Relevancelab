$(function () {
  

    // Flex
    if ($(".flexslider").length) {
        $('.flexslider').flexslider();
    }



    servicesCircles.initialize();

    staticHeader.initialize();

    portfolioItem.initialize();
});

var portfolioItem = {
    initialize: function () {
        var $container = $("#portfolio_tem .left_box");
        var $bigPics = $container.find(".big img");
        var $thumbs = $container.find(".thumbs .thumb");

        $bigPics.hide().eq(0).show();

        $thumbs.click(function (e) {
            e.preventDefault();
            var index = $thumbs.index(this);
            $bigPics.fadeOut();
            $bigPics.eq(index).fadeIn();
        });
    }
}

var staticHeader = {
    initialize: function () {
        if ($(".navbar-static-top").length) {
            $("body").css("padding-top", 0);
        }
    }
}

var servicesCircle = {
    initialize: function () {
        var $container = $(".services_circles");
        var $texts = $container.find(".description .text");
        var $circles = $container.find(".areas .circle");

        $circles.click(function () {
            var index = $circles.index(this);
            $texts.fadeOut();
            $texts.eq(index).fadeIn();
            $circles.removeClass("active");
            $(this).addClass("active");
        });
    }
}

var servicesCircles = {
    initialize: function () {
        var $containers = $(".services_circles2");
        var $textss = $containers.find(".description2 .text2");
        var $circless = $containers.find(".areas2 .circle2");

        $circless.click(function () {
            var index = $circless.index(this);
            $textss.fadeOut();
            $textss.eq(index).fadeIn();
            $circless.removeClass("active2");
            $(this).addClass("active2");
        });
    }
}
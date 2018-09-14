function Main(){
    let self = this;

    self.InstafeedConfig = {
        "get": "user",
        "userId": 2277543053,
        "clienteId": "32738942105d4b1b94608781440e8399",
        "accessToken": "2277543053.3273894.a111dae0e48f4c2188d13af71832d604",
        "limit": 17,
        "filter": function(image) {
            return image.tags.indexOf('photographie') >= 0;
        },
        "resolution": "low_resolution",
        "template": "<a href=\"{{link}}\" data-src='{{image}}' target=\"_blank\"></a>",
        "after": function(){
            $('[data-src]').each(function(){
                $(this).css('background', 'url('+$(this).data('src')+')');
            });
        }
    };

    self.InitInstafeed = function(){
        let feed = new Instafeed(self.InstafeedConfig);
        feed.run();
    };

    self.InitCarousel = function(){
        $('#carousel-wrapper').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true,
            fade: true,
            cssEase: 'linear',
            autoplay: true,
            prevArrow: '<button type="button" class="slick-prev"><span class="fas fa-angle-left"></span></button>',
            nextArrow: '<button type="button" class="slick-next"><span class="fas fa-angle-right"></span></button>'
        });
    };

    self.ToggleMenu = function(){
        $('.sidebar').toggleClass('active');
    };

    self.Init = (function(){
        self.InitInstafeed();
        self.InitCarousel();

        $('#btnMenu').click(self.ToggleMenu);
    })();
}

$(function(){
    window.Main = new Main();
})

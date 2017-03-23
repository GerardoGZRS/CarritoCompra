(function($) {
    var App = { init: function() {
        App.MenuMobil();
    },
        MenuMobil: function() {

            $('.btn-menu-mobil').on('click', function () {
                $('body').toggleClass('active-overflow');
                $('.menu-container').toggle( function () {
                    $('.menu-container-inter').toggleClass('show-menu-mobil');
                });
            });

            var ancho = 0;
            $(window).resize(function() {
                ancho = $(window).width();
                if (ancho >= 795) {
                    $('.menu-container').hide( function () {
                        $('.menu-container-inter').removeClass('show-menu-mobil');
                    });

                    $('body').removeClass('active-overflow');
                }
            });
        }
    };

    $(function(){
        App.init();
        $(window).resize();
    });

})(jQuery);
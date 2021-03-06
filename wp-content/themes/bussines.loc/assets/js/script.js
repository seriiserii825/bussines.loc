function include(scriptUrl) {
    document.write('<script src="' + scriptUrl + '"></script>');
}

jQuery(document).ready(function($) {
    let tmstickup = function () {
        let o = $('html');

        if (o.hasClass('desktop')) {
            $('#stuck_container').TMStickUp({})
        }
    };

    let toTop = function(){
        let o = $('html');
        if (o.hasClass('desktop')) {
            $().UItoTop({
                easingType: 'easeOutQuart',
                containerClass: 'toTop fa fa-angle-up'
            });
        }
    };

    let equalHeights = function(){
        let o = $('[data-equal-group]');
        if (o.length > 0) {
            o.equalHeights();
        }

    };

    let superfish = function(){
        $('ul.sf-menu').superfish();
    };

    let wow = function(){
        var o = $('html');

        if (o.hasClass('desktop')) {
            wow = new WOW(
              {
                  offset:       200,          // default
                  mobile:       true,       // default
                  live:         true        // default
            });

            wow.init();
        }
    };

    let camera = function(){
        var o = $('#camera');

        if (o.length > 0) {

            o.camera({
                autoAdvance: true,
                height: '30.859375%',
                minHeight: '350px',
                pagination: false,
                thumbnails: false,
                playPause: false,
                hover: false,
                loader: 'none',
                navigation: true,
                navigationHover: false,
                mobileNavHover: false,
                fx: 'simpleFade'
            })
        }
    };

    let reviewsSlider = function(){
        $('#js-reviews').slick({
            arrows: false,
            dots: true
        });
    };


    tmstickup();
    toTop();
    equalHeights();
    superfish();
    wow();
    camera();
    reviewsSlider();
});

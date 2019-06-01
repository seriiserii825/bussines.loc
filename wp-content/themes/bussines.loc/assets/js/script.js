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
            new WOW().init();
        }
    };

    tmstickup();
    toTop();
    equalHeights();
    superfish();
    wow();
});

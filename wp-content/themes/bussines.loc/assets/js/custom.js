jQuery(document).ready(function($) {

	let feedPopup = function(){
		$('.feedback__link').magnificPopup({
			type: 'inline',
			preloader: false,

			callbacks: {
				beforeOpen: function() {
					if($(window).width() < 700) {
						this.st.focus = false;
					} else {
						this.st.focus = '#name';
					}
				}
			}
		});
	};

	let isotope = function(){
		// init Isotope
		let jsAuto = $('#js-auto');
        jsAuto.isotope({
          // options
			itemSelector: '.auto__item',
			layoutMode: 'fitRows'
        });

        // filter items on button click
        $('#js-auto-list').on( 'click', 'li', function() {
        	if($(this).hasClass('selected')){
        		return false;
			}
        	$('#js-auto-list li').removeClass('selected');
        	$(this).addClass('selected');

            let filterValue = $(this).data('filter');
            if(filterValue === '*'){
				jsAuto.isotope({ filter: '*' });
			}
            jsAuto.isotope({ filter: '.' + filterValue });

            return false;
        });

	};

	feedPopup();
	isotope();


});
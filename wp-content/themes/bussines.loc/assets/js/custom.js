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

	let isotopeName = function(){
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

	let isotopeColors = function(){
		// init Isotope
		let jsAuto = $('#js-auto');
		jsAuto.isotope({
			// options
			itemSelector: '.auto__item',
			layoutMode: 'fitRows'
		});

		// filter items on button click
		$('#js-auto-list-colors').on( 'click', 'li', function() {
			if($(this).hasClass('selected')){
				return false;
			}
			$('#js-auto-list-colors li').removeClass('selected');
			$(this).addClass('selected');

			let filterValue = $(this).data('filter');
			if(filterValue === '*'){
				jsAuto.isotope({ filter: '*' });
			}
			jsAuto.isotope({ filter: '.' + filterValue });

			return false;
		});

	};

	let isotopeBody = function(){
		// init Isotope
		let jsAuto = $('#js-auto');
		jsAuto.isotope({
			// options
			itemSelector: '.auto__item',
			layoutMode: 'fitRows'
		});

		// filter items on button click
		$('#js-auto-list-body').on( 'click', 'li', function() {
			if($(this).hasClass('selected')){
				return false;
			}
			$('#js-auto-list-body li').removeClass('selected');
			$(this).addClass('selected');

			let filterValue = $(this).data('filter');
			if(filterValue === '*'){
				jsAuto.isotope({ filter: '*' });
			}
			jsAuto.isotope({ filter: '.' + filterValue });

			return false;
		});

	};

	let autoTabs = function(){
		let autoTabsTitle = $('.auto-tabs-title');
		let autoTabListItem = $('.auto-tabs-list__item');

		autoTabsTitle.on('click', function(){
		    let dataTab = $(this).data('auto-tab');
		    let id = '#' + dataTab;
            autoTabsTitle.removeClass('active');
			$(this).addClass('active');
			autoTabListItem.hide();
            $(id).fadeIn();
		});

		autoTabListItem.eq(0).fadeIn();
	};

	feedPopup();
	isotopeName();
	isotopeColors();
	isotopeBody();
	autoTabs();


});
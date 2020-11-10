/**
 *  Tabs.js v1.0.0 by CoDrops
 */
;( function( window ) {
	'use strict';
	function extend( a, b ) {
		for( var key in b ) { 
			if( b.hasOwnProperty( key ) ) {
				a[key] = b[key];
			}
		}
		return a;
	}
	function CBPFWTabs( el, options ) {
		this.el = el;
		this.options = extend( {}, this.options );
  		extend( this.options, options );
  		this._init();
	}
	CBPFWTabs.prototype.options = {
		start : 0
	};
	CBPFWTabs.prototype._init = function() {
		// tabs elems
		this.tabs = [].slice.call( this.el.querySelectorAll( 'nav > ul > li' ) );
		// content items
		this.items = [].slice.call( this.el.querySelectorAll( '.content-wrap > section' ) );
		// current index
		this.current = -1;
		// show current content item
		this._show();
		// init events
		this._initEvents();
	};
	CBPFWTabs.prototype._initEvents = function() {
		var self = this;
		this.tabs.forEach( function( tab, idx ) {
			tab.addEventListener( 'click', function( ev ) {
				ev.preventDefault();
				self._show( idx );
			} );
		} );
	};
	CBPFWTabs.prototype._show = function( idx ) {
		if( this.current >= 0 ) {
			this.tabs[ this.current ].className = this.items[ this.current ].className = '';
		}
		// change current
		this.current = idx != undefined ? idx : this.options.start >= 0 && this.options.start < this.items.length ? this.options.start : 0;
		this.tabs[ this.current ].className = 'tab-current';
		this.items[ this.current ].className = 'content-current';
	};
	// add to global namespace
	window.CBPFWTabs = CBPFWTabs;
})( window );

var j = jQuery.noConflict();

j(function() {
    // TABS
	(function() {
		[].slice.call( document.querySelectorAll( '.tabs' ) ).forEach( function( el ) {
			new CBPFWTabs( el );
		});
	})();

	// Grid Images
	const contentOne = "Content One Content", 
	contentTwo = "Content One Content", 
	contentThree = "Content One Content", 
	contentFour = "Content One Content", 
	contentFive = "Content One Content", 
	contentSix = "Content One Content";

	j('.section-three-wrapper .col').hover(
		function() { 
			j(this).find('.grid-content').css({
				'background' : 'rgba(0, 0, 0, 0.8)',
				'color'      : '#fff'
			});
		}, 
		function() {
			j(this).find('.grid-content').css({
				'background' : 'transparent',
				'color' : 'transparent'
			}); 
		}
	)
	
	//Slick Slider
	j('.testimonial-slider').slick({
		infinite: true,
		dots: true,
		centerMode: true,
		prevArrow: "#custom-prev-arrow",
		nextArrow: "#custom-next-arrow",
		arrows: true,
		slidesToShow: 3,
		slidesToScroll: 3,
		variableWidth: true,
		speed: 300,
		responsive: [
			{
			  breakpoint: 1024,
			  settings: {
				slidesToShow: 3,
				slidesToScroll: 3,
				infinite: true,
			  }
			},
			{
			  breakpoint: 600,
			  settings: {
				slidesToShow: 2,
				slidesToScroll: 2
			  }
			},
			{
			  breakpoint: 480,
			  settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			  }
			}
		]
	})


})





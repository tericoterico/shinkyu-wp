/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
( function() {
	var container, button, menu, links, i, len;

	container = document.getElementById( 'site-navigation' );
	if ( ! container ) {
		return;
	}

	button = container.getElementsByTagName( 'button' )[0];
	if ( 'undefined' === typeof button ) {
		return;
	}

	menu = container.getElementsByTagName( 'ul' )[0];

	// Hide menu toggle button if menu is empty and return early.
	if ( 'undefined' === typeof menu ) {
		button.style.display = 'none';
		return;
	}

	menu.setAttribute( 'aria-expanded', 'false' );
	if ( -1 === menu.className.indexOf( 'nav-menu' ) ) {
		menu.className += ' nav-menu';
	}

	button.onclick = function() {
		if ( -1 !== container.className.indexOf( 'toggled' ) ) {
			container.className = container.className.replace( ' toggled', '' );
			button.setAttribute( 'aria-expanded', 'false' );
			menu.setAttribute( 'aria-expanded', 'false' );
		} else {
			container.className += ' toggled';
			button.setAttribute( 'aria-expanded', 'true' );
			menu.setAttribute( 'aria-expanded', 'true' );
		}
	};

	// Get all the link elements within the menu.
	links    = menu.getElementsByTagName( 'a' );

	// Each time a menu link is focused or blurred, toggle focus.
	for ( i = 0, len = links.length; i < len; i++ ) {
		links[i].addEventListener( 'focus', toggleFocus, true );
		links[i].addEventListener( 'blur', toggleFocus, true );
	}

	/**
	 * Sets or removes .focus class on an element.
	 */
	function toggleFocus() {
		var self = this;

		// Move up through the ancestors of the current link until we hit .nav-menu.
		while ( -1 === self.className.indexOf( 'nav-menu' ) ) {

			// On li elements toggle the class .focus.
			if ( 'li' === self.tagName.toLowerCase() ) {
				if ( -1 !== self.className.indexOf( 'focus' ) ) {
					self.className = self.className.replace( ' focus', '' );
				} else {
					self.className += ' focus';
				}
			}

			self = self.parentElement;
		}
	}

	/**
	 * Toggles `focus` class to allow submenu access on tablets.
	 */
	( function( container ) {
		var touchStartFn, i,
			parentLink = container.querySelectorAll( '.menu-item-has-children > a, .page_item_has_children > a' );

		if ( 'ontouchstart' in window ) {
			touchStartFn = function( e ) {
				var menuItem = this.parentNode, i;

				if ( ! menuItem.classList.contains( 'focus' ) ) {
					e.preventDefault();
					for ( i = 0; i < menuItem.parentNode.children.length; ++i ) {
						if ( menuItem === menuItem.parentNode.children[i] ) {
							continue;
						}
						menuItem.parentNode.children[i].classList.remove( 'focus' );
					}
					menuItem.classList.add( 'focus' );
				} else {
					menuItem.classList.remove( 'focus' );
				}
			};

			for ( i = 0; i < parentLink.length; ++i ) {
				parentLink[i].addEventListener( 'touchstart', touchStartFn, false );
			}
		}
	}( container ) );
})();

( function( $ ) {

	var controller = new ScrollMagic.Controller();

	var tween = TweenMax.fromTo(".p-img_butterfly1", 2, {opacity:0 }, {opacity:0.16 });

	var scene = new ScrollMagic.Scene({
		triggerElement: ".p-section_title",
		triggerHook: "onEnter",
		offset : 0,
		duration:600
		// reverse: false
		})
		.setTween(tween)
		// .on("progress", function (event) { // シーン変化の度に呼ばれる
		// 	console.log("Scene progress changed to " + event.progress)
		// })
		// .addIndicators()
		.addTo(controller);

	//気とは何か
	var tween_1 = TweenMax.fromTo("#post-113 .add-image", 4, {opacity:0, y:40 }, {opacity:1, y:0 });

	var scene = new ScrollMagic.Scene({
		triggerElement: "#post-113",
		// triggerHook: "onEnter",
		offset : 0,
		duration:300,
		// reverse: false
		})
		.setTween(tween_1)
		// .on("progress", function (event) { // シーン変化の度に呼ばれる
		// 	console.log("Scene progress changed to " + event.progress)
		// })
		// .addIndicators()
		.addTo(controller);
	
	//経絡と臓腑について
	var tween_2 = TweenMax.fromTo("#post-228 .add-image", 4, {opacity:0, y:10 }, {opacity:1, y:0 });

	var scene2 = new ScrollMagic.Scene({
		triggerElement: "#post-228",
		// triggerHook: "onEnter",
		offset : 0,
		duration:300,
		// reverse: false
		})
		.setTween(tween_2)
		// .on("progress", function (event) { // シーン変化の度に呼ばれる
		// 	console.log("Scene progress changed to " + event.progress)
		// })
		// .addIndicators()
		.addTo(controller);


	//蝶1
	var tween_30 = TweenMax.fromTo("#post-55 .wp-post-image", 4, {opacity:0, y:10 }, {opacity:1, y:0 });

	var scene30 = new ScrollMagic.Scene({
		triggerElement: "#post-55",
		// triggerHook: "onEnter",
		offset : 0,
		duration:200,
		// reverse: false
		})
		.setTween(tween_30)
		.addTo(controller);

	//蝶2
	var tween_31 = TweenMax.fromTo("#post-55 .add-image", 4, {opacity:0, y:10 }, {opacity:1, y:0 });

	var scene31 = new ScrollMagic.Scene({
		triggerElement: "#post-55",
		// triggerHook: "onEnter",
		offset : 0,
		duration:300,
		// reverse: false
		})
		.setTween(tween_31)
		.addTo(controller);

	//陰陽論
	var tween_black = TweenMax.fromTo("#post-112 .p-oriental_blackfish", 4, {
		opacity:0,
		rotation:-40,
		transformOrigin:"100% 100%"
	},
	{
		opacity:0.8,
		rotation:0,
	});

	var tween_red = TweenMax.fromTo("#post-112 .p-oriental_redfish", 4, {
		opacity:0,
		rotation:-40,
		transformOrigin:"0 0"
	},
	{
		opacity:0.8,
		rotation:0,
	});

	//陰陽論-赤金魚
	var scene_red = new ScrollMagic.Scene({
		triggerElement: "#post-112",
		// triggerHook: "onEnter",
		offset : -100,
		duration:400,
		// reverse: false
		})
		.setTween(tween_red)
		// .addIndicators()
		.addTo(controller);

	//陰陽論-黒金魚
	var scene_black = new ScrollMagic.Scene({
		triggerElement: "#post-112",
		// triggerHook: "onEnter",
		offset : -80,
		duration:420,
		// reverse: false
		})
		.setTween(tween_black)
		// .addIndicators()
		.addTo(controller);

	//東洋医学とは？
	// var tween_hasu = TweenMax.fromTo("#post-74 .p-hasu_image1", 4, {opacity:1, y:0 }, {opacity:1, y:0 });
	var tween_cloud1 = TweenMax.fromTo("#post-74 .p-oriental_cloud1", 2, {opacity:0.75, y:30 }, {opacity:1, y:0 });
	var tween_cloud2 = TweenMax.fromTo("#post-74 .p-oriental_cloud2", 2, {opacity:0.75, y:20 }, {opacity:1, y:0 });


	//東洋医学とは？-蓮
	// var hasu = new ScrollMagic.Scene({
	// 	triggerElement: "#post-74",
	// 	// triggerHook: "onEnter",
	// 	offset : 280,
	// 	duration:200,
	// 	// reverse: false
	// 	})
	// 	.setTween(tween_hasu)
	// 	// .addIndicators()
	// 	.addTo(controller);

	// //東洋医学とは？-蓮の葉
	// var leaf = new ScrollMagic.Scene({
	// 	triggerElement: "#post-74",
	// 	// triggerHook: "onEnter",
	// 	offset : 260,
	// 	duration:200,
	// 	// reverse: false
	// 	})
	// 	.setTween(tween_leaf)
	// 	// .addIndicators()
	// 	.addTo(controller);

	//東洋医学とは？-雲1
	var cloud1 = new ScrollMagic.Scene({
		triggerElement: "body",
		triggerHook: "onLeave",
		// offset : 150,
		duration:150,
		// reverse: false
		})
		.setTween(tween_cloud1)
		// .addIndicators()
		.addTo(controller);

	//東洋医学とは？-雲2
	var cloud2 = new ScrollMagic.Scene({
		triggerElement: "body",
		triggerHook: "onLeave",
		// offset : 150,
		duration:150,
		// reverse: false
		})
		.setTween(tween_cloud2)
		// .addIndicators()
		.addTo(controller);

	//トップヘッダ

	var top_logo = TweenMax.to(".home .p-logo", 2, {y:0 });

	var top_logo_scene = new ScrollMagic.Scene({
		triggerElement: "body",
		triggerHook: "onLeave",
		offset : 150,
		duration:150,
		// reverse: false
		})
		.setTween(top_logo)
		// .addIndicators()
		.addTo(controller);


	$(document).on('click', '.p-nav', function () {
		var $t = $(this);
		$t.toggleClass('toggled');
	})

	var mySwiper = new Swiper ('.swiper-container', {
		// Optional parameters
		autoplay:{
			delay:5000
		},
		speed:1500,
		effect:'slide',
		loop:true,

		on: {
			init: function () {
			//   console.log('swiper initialized');
			  TweenMax.fromTo(".p-mv_blackfish" , 3 , {
				  opacity:0,
				  rotation:-40,
				  transformOrigin:"100% 100%"
				},
				{
					opacity:0.8,
					rotation:-10
			  });
			  TweenMax.fromTo(".p-mv_redfish" , 3 , {
				opacity:0,
				rotation:-40,
				transformOrigin:"0% 0%"
				},
			  {
				  opacity:0.8,
				  rotation:0
			});
			//   TweenMax.to(".p-mv_logo" , 2 , {opacity:1, y:0, delay:1});
			},
		},

		// If we need pagination
		pagination: {
		el: '.swiper-pagination',
		},

		// Navigation arrows
		navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
		},

		// And if we need scrollbar
		scrollbar: {
				el: '.swiper-scrollbar',
				hide: true
		},
	})

} )( jQuery );




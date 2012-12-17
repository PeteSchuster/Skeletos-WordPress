/*-- [MBP] --*/

/*
 * MBP - Mobile boilerplate helper functions
 */
(function(document){

window.MBP = window.MBP || {};

// Fix for iPhone viewport scale bug
// http://www.blog.highub.com/mobile-2/a-fix-for-iphone-viewport-scale-bug/

MBP.viewportmeta = document.querySelector && document.querySelector('meta[name="viewport"]');
MBP.ua = navigator.userAgent;

MBP.scaleFix = function () {
  if (MBP.viewportmeta && /iPhone|iPad/.test(MBP.ua) && !/Opera Mini/.test(MBP.ua)) {
    MBP.viewportmeta.content = "width=device-width, minimum-scale=1.0, maximum-scale=1.0";
    document.addEventListener("gesturestart", MBP.gestureStart, false);
  }
};
MBP.gestureStart = function () {
    MBP.viewportmeta.content = "width=device-width, minimum-scale=0.25, maximum-scale=1.6";
};


// Hide URL Bar for iOS and Android by Scott Jehl
// https://gist.github.com/1183357

MBP.hideUrlBar = function () {
	var win = window,
		doc = win.document;

	// If there's a hash, or addEventListener is undefined, stop here
	if( !location.hash || !win.addEventListener ){

		//scroll to 1
		window.scrollTo( 0, 1 );
		var scrollTop = 1,

		//reset to 0 on bodyready, if needed
		bodycheck = setInterval(function(){
			if( doc.body ){
				clearInterval( bodycheck );
				scrollTop = "scrollTop" in doc.body ? doc.body.scrollTop : 1;
				win.scrollTo( 0, scrollTop === 1 ? 0 : 1 );
			}
		}, 15 );

		setTimeout(function(){
			//reset to hide addr bar at onload
			win.scrollTo( 0, scrollTop === 1 ? 0 : 1 );
		}, 0);

	}
};

})(document);

/*-- [/MBP] --*/

///DOC READY FUNCTIONS
jQuery( document ).ready(function( $ ) {
	
	MBP.scaleFix( );
	MBP.hideUrlBar( );

	if ( jQuery( '#show_menu' )[0] ){

		jQuery( '#show_menu' ).on( 'click', function( e ){

			var el = jQuery( this );

			el.next().slideToggle( 'fast' );

			el.addClass( 'active' );

			e.preventDefault();

		} );

	}

} );
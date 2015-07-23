// Bootstrap specific functions and styling
$(document).ready(function(){
	$('.comment-reply-link').addClass('btn btn-sm btn-default');
	$('#submit, button[type=submit], html input[type=button], input[type=reset], input[type=submit]').addClass('btn btn-default');
	$('.widget_rss ul').addClass('media-list');
	$('.postform').addClass('form-control');
	$('table#wp-calendar').addClass('table table-striped');
	$('#submit, .tagcloud, button[type=submit], .comment-reply-link, .widget_rss ul, .postform, table#wp-calendar').show("fast");
});

// jQuery powered scroll to top
$(document).ready(function(){
	$(window).scroll(function(){
		if($(this).scrollTop() > 100){
			$(".scroll-to-top").fadeIn()
		} else {
			$(".scroll-to-top").fadeOut()
		}
	});
	$(".scroll-to-top").click(function(){
		$("html, body").animate({scrollTop: 0}, 800);
		return false;
	});
});

// Skip Links
( function() {
	var is_webkit = navigator.userAgent.toLowerCase().indexOf( 'webkit' ) > -1,
	    is_opera  = navigator.userAgent.toLowerCase().indexOf( 'opera' )  > -1,
	    is_ie     = navigator.userAgent.toLowerCase().indexOf( 'msie' )   > -1;

	if ( ( is_webkit || is_opera || is_ie ) && 'undefined' !== typeof( document.getElementById ) ) {
		var eventMethod = ( window.addEventListener ) ? 'addEventListener' : 'attachEvent';
		window[ eventMethod ]( 'hashchange', function() {
			var element = document.getElementById( location.hash.substring( 1 ) );

			if ( element ) {
				if ( ! /^(?:a|select|input|button|textarea)$/i.test( element.tagName ) )
					element.tabIndex = -1;

				element.focus();
			}
		}, false );
	}
})();
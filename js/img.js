(function($) {
	$( document ).ready(function(){
		$( "p:has(img)" ).before( "<div class=\"clear\"></div>" );
	});
})(jQuery);

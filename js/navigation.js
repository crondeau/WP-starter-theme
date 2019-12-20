jQuery(document).ready(function($){

	function hide_menu(){
		$(".menu__toggle, #site__nav").removeClass('toggled');
		$('html').removeClass('custom-overflow');
	}

	$(".menu__toggle").click(function(e){
		e.preventDefault();
		$('#site__nav').toggleClass('toggled');
		$('html').toggleClass('custom-overflow');
		$(this).toggleClass('toggled');
	});

});

$(document).ready(function(){
	
	/* For Mobile navigation */
	$(".mobNav").on('click',function() {	  
		$('.menuBar').toggleClass('active');
		$(this).find('i').toggleClass('fa-times');
	});	
	
	/* ------- Trigger modal when page is loaded ------- */
	//$(window.location.hash).modal('toggle');
	
});
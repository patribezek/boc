 


$(document).ready(function(){

	$.each($('.navbar').find('li'), function() {
		$(this).toggleClass('active', 
			window.location.pathname.indexOf($(this).find('a').attr('href')) > -1);
		$('.dropdown').removeClass('active');
	});

$('#cookiesModal').modal('show');

// adblocker
if(!$("#ablockercheck").is(":visible"))
   {
     $("#ablockermsg").show();
   }


});

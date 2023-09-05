$(document).ready(function() {
	

	var _containerMenu = $ ('[data-container="nav-menu"]');

	console.log(_containerMenu); 


	$(window).scroll(function (){
             
             if ($(this).scrollTop()>70) 
             {
             	_containerMenu.addClass('menu-fixo ');
             
             } else{
             	_containerMenu.removeClass('menu-fixo');
             
             }

	});


});

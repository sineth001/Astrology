jQuery(document).ready(function($) {
    $('.modal').on('show.bs.modal', function () {
	    $('.modal').not($(this)).each(function () {
	        $(this).modal('hide');
	    });
	});

    $(".sort_wapper .dropdown-menu li a").click(function(){
	  var selText = $(this).find('span.text').text();
	  $(this).parents('.btn-group').find('.dropdown-toggle').html(selText+' <span class="dropdown_icon"><i class="fa fa-angle-down" aria-hidden="true"></i></span>');
	});

	$(".selectin .dropdown-menu li a").click(function(){
	  var selText = $(this).find('span.text').text();
	  $(this).parents('.btn-group').find('.dropdown-toggle').html(selText+' <span class="dropdown_icon"><i class="fa fa-angle-down" aria-hidden="true"></i></span>');
	});


});
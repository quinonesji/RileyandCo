$.fn.toggleState = function(b) {
	$(this).stop().animate({
		width: b ? "300px" : "50px"
	}, 600, "easeOutElastic" );
}


$(document).ready(function() {
// alert("Page path is " + window.location.pathname);
	// $('#find-rep').on('click', function(){
	// 	("#Table1").css("display", "inline-block");
	// });

	//responsive menu start
	var body = $('body');
	var menuTrigger = $('.js-menu-trigger');
	var mainOverlay = $('.js-main-overlay');


	menuTrigger.on('click', function(){
	   body.addClass('menu-is-active');

	});


	$('.menu li a').on('click', function(){
	   body.removeClass('menu-is-active');

	});

	mainOverlay.on('click', function(){
	   body.removeClass('menu-is-active');
	});

	if(window.location.pathname === "/resources/")
	{
		$('.collapse').collapse();
	}

// start tabs for service function packages
$('div.tabs a').click(function(){
		var tab_id = $(this).attr('data-tab');
if(window.location.pathname === "/resources/")
{
	if(tab_id === "tab-3" || tab_id === "tab-2" || tab_id === "tab-1")
	{
		var validator = $("#FormId").validate();
		validator.resetForm();
		//clear the messages
		$("#server-success").css("display", "none");
		$("#server-error").css("display", "none");
		//pause the video
		$('.youtube-video')[0].contentWindow.postMessage('{"event":"command","func":"' + 'pauseVideo' + '","args":""}', '*');
	}
}
		$('div.tabs a').removeClass('current');
		$('.tab-content').removeClass('current');

		$(this).addClass('current');
		$("#"+tab_id).addClass('current');
	});

// end tabs for service function packages

    //start search box funtion

	var container = $(".container");
	var boxContainer = $(".search-box-container");
	var submit = $(".submit");
	var searchBox = $(".search-box");
	var response = $(".response");
	var isOpen = false;
	submit.on("mousedown", function(e) {
		e.preventDefault();
        searchBox.val('');
		boxContainer.toggleState(!isOpen);
		isOpen = !isOpen;
		if(!isOpen) {
			handleRequest();
		} else {
			searchBox.focus();
		}
	});
//	searchBox.keypress(function(e) {
//		if(e.which === 13) {//e.which
//			boxContainer.toggleState(false);
//			isOpen = false;
//			handleRequest();
//		}
//	});
	searchBox.blur(function() {
		boxContainer.toggleState(false);
		isOpen = false;
	});
	function handleRequest() {
		// You could do an ajax request here...
		var value = searchBox.val();
		searchBox.val('');
		if(value.length > 0) {
			response.text(('Searching for "' + value + '" . . .'));
			response.animate({
				opacity: 1
			}, 300).delay(2000).animate({
				opacity: 0
			}, 300);
		}
	}
//end search box function

    // //start bizz bar
    // $("#bizzbar").effect("bounce","slow");
    //
    // $("close").click(function(){
    //     $("#bizzbar").slideUp();
    // });//bizz bar end

  var $header = $('header');
  var $sticky = $header.before($header.clone().addClass("sticky"));

  $(window).on('scroll', function() {
    var scrollFromTop = $(window).scrollTop();
    $("body").toggleClass("scroll", (scrollFromTop > 350));
  });

  //Masonry
	if(window.location.pathname === "/about/projects/")
	{
		window.onload = function() {
			$('.grid').masonry({
		    //options
		    itemSelector: '.grid-item',
		    columnWidth: 120,
		    fitWidth: true,
		    gutter: 0
		  });
		}

	}




});

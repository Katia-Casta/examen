$(document).ready(function(){
	$(".gridder").gridderExpander({
		scroll:true,
		scrollOffset:60,
			scrollTo: "listitem",
			animationSpeed: 100,
			animationEasing: "easeInOutExpo",
			showNav: true,
			nextText: "<i class=\"fa fa-arrow-right\"></i>",
			prevText: "<i class=\"fa fa-arrow-left\"></i>",
			closeText: "<i class=\"fa fa-times\"></i>",
			onStart: function(){
				console.log("Gridder Inititialized");
			},
			onContent: function(){
				console.log("Gridder Content Loaded");
				$(".carousel").carousel();
			},
			onClosed: function(){
				console.log("Gridder Closed");
			}

	});	
});
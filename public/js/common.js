$(document).ready(function() {
	$(".left_section").click(function() {
		$(this).next().slideToggle();
	});
});
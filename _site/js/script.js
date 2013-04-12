$(document).ready(function() {
	$("#show-hide-navigation").on("click", function() {
		$("body").toggleClass("show-nav");
	});

  	$("#archive_topics li").click(function() {
  		$("table").addClass("archive_list");
  		$(this).next().removeClass("archive_list");
  	});
});
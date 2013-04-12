$(document).ready(function() {
	$("#show-hide-navigation").on("click", function() {
		$("body").toggleClass("show-nav");
	});

  	$("#archive_topics li").click(function() {
  		var title = $(this).text().toLowerCase().replace(/ /g,"_");
  		$("table").addClass("archive_list");
  		$('#' + title).removeClass("archive_list");
  	});
});
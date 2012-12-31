// $(window).scroll(function () { 
// 	var offset = window.pageYOffset;
// 		if(offset < 0) {
// 			console.log("Less than zero: " + offset);
// 			$("header").height(50 + (offset * -1));
//   		}
// 		else if(offset > 0 && offset < 100) {
// 			console.log("Between zero and 100: " + offset);
// 			$("header").height(50);
// 		}
// 		else {
// 			console.log("Greater than 0: " + offset);
// 			$("header").height(40);
// 		}
// });

$(window).scroll(function () { 
	if($(window).width() > 850) {
		var offset = window.pageYOffset;
			if(offset <= 0) {
				var newHeight = 50 + (offset * -1);
				$("header").animate({ height: newHeight }, 5, function() {
					$("h1.home").animate({ lineHeight: newHeight + "px" }, 5, function() {
						$("header ul li").animate({ lineHeight: newHeight + "px"}, 5);
					});
				});
	  		}
			else if(offset > 0 && offset < 100) {
				$("header").animate({ height: "50px" }, 5, function() {
					$("h1.home").animate({ lineHeight: "50px" }, 5, function() {
						$("header ul li").animate({ lineHeight: "50px"}, 5);
					});
				});
			}
			else {
				$("header").animate({ height: "40px" }, 5, function() {
					$("h1.home").animate({ lineHeight: "40px" }, 5, function() {
						$("header ul li").animate({ lineHeight: "40px"}, 5);
					});
				});
			}
	}
});
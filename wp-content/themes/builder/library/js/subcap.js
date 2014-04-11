 // Subtraction Capital - Scripts
 //
 //
 
jQuery(document).ready(function ($) {

/**
 *
 * jQuery.browser.mobile will be true if the browser is a mobile device
 *
 **/
(function(a){(jQuery.browser=jQuery.browser||{}).mobile=/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4))})(navigator.userAgent||navigator.vendor||window.opera);
 
if (jQuery.browser.mobile == true) {

	// Mobile People Page - Bio Dropdowns

	var arr = ["#partner-one", "#partner-two", "#team-one", "#team-two", "#team-three"];
	$.each(arr, function (i, value) {  // set people array and go through each

	     $(value).click(function () {  // if down arrow or X has been pressed

		// if bio is not showing then open it
		if ($(value).children(".person-bio").css("display") == "none") {
		    $(value).children(".social-footer").css("display", "block");
		    $(value).children(".person-bio").fadeIn(800);
		    $(value).children(".open-close").css("background-position", "0 bottom");

		} else {
		   // close bio
		    $(value).children(".open-close").css("background-position", "0 top");
		    $(value).children(".person-bio").fadeOut(0);
		    $(value).children(".social-footer").css("display", "none");

		}
	    });
	});
	
} else {

	$(".open-close").css("display", "none");
	$(".social-footer").css("display", "block");
	$(".person-bio").css("display", "block");




			
}; // end test for mobile device

	// Portfolio mobile open-close
  if (jQuery.browser.mobile == true  && $(window).width() <= 643) {
	     $(".logo-open-close").css({"background-position":"0 top","display":"block"});
	$('.box-inner').click(function () {
	    if ($(window).width() <= 643 && $(this).children(".box-inner-text").css("display") == "none") {
		    $(this).children(".box-inner-text").css("display", "table-cell");
		     $(this).children(".logo-open-close").css("display", "block");
		     $(this).children(".logo-open-close").css("background-position", "0 bottom");
	    } else {
		    $(this).children(".box-inner-text").css("display", "none");
		     $(this).children(".logo-open-close").css("background-position", "0 top");
	    }

	 });
	 
  };	 
	 

	// Portfolio Page Box Hover Pop-Up

	$('.box-inner').hover(function () {
	    if ($(window).width() > 643) { // test for width, if mobile width then ignore
		$(".box").css("z-index", 0); // all boxes in background
		$(this).closest(".box").css("z-index", 1); // this box in foreground
		$(this).css("box-shadow", "rgba(0, 100, 163, 0.45) 2px 2px 4px"); // this box shadow
		$(this).children().show(); // show this box
//		$(this).css("background-size", "90% auto"); // set logo to 90% of box width
		$(this).children(".green-flag-img").css("background-size", "55px"); // increase green flag size
		$(this).stop(true, true).animate({ // animate larger box
		    height: "303",
		    width: "303",
		    left: "-=50",
		    top: "-=10"
		}, 100);
	    }

	}, function () {
	    if ($(window).width() > 643) {
		$(this).children().hide(); // hide text info inside the larger box
		$(this).children(".green-flag-img").css("background-size", "35px"); //reduce size of green flag
		$(this).css("box-shadow", "2px 2px 4px #C9C9C9"); // return box shadow
		$(this).stop(true, true).animate({ // return to small box
		    height: "203",
		    width: "203",
		    left: "+=50",
		    top: "+=10"
		}, 100); 
	    }

	}); // end Portfolio Page Box Hover Pop-Up



	


jQuery(function($) {


// uform_title = Top non-Mobile Filters Button
// uwpqsf_id_btn = Save Filters Button
// filter-float = Mobile Bottom Fixed Filter button
// c_filter-float = Cancel button in mobile



win_width = $( window ).width();
	

$('#uwpqsf_id_btn').click();

$("#filter-float").show();	// Show primary Filter button
$("#c_filter-float").show();	// Show Cancel Filter button

$('#uwpqsf_id_btn').addClass('btn btn-lg btn-block');

$('input#uwpqsf_id_btn:button').click(function(){

	
	$('.search-results').css('display','none');
	$('.search-results').fadeIn(2000);

	$("#uwpqsf_id").css({"height" : "0px !important"});

	
	$("#filter-float").show();


	if (win_width > 349) {  

			
				taxoCompany = $(".taxolabel-0").text()
				taxoCategory = $(".taxolabel-1").text()

			
				var tax0Array = $(".tax-check-0 label").map(function() {
						 return $(this).text();
				  }).get();


				var tax1Array = $(".tax-check-1 label").map(function() {
								 return $(this).text();
						  }).get();

			

					answer = ""
					test = ""
					resultCompany = ""
					resultCategory = ""
					isThereAlabel = 0;

			
			
					$(":checked").each(function(){
						checkedLabel = $(this).val().replace(/-/g, " ") ;  

						isThereAlabel = isThereAlabel + checkedLabel.length;

			
			
				$.each(tax0Array, function(index, value) {

						
						value = (value.toLowerCase()).trim();

					
					if (checkedLabel == value) {

						
						resultCompany =  "<span class='taxo-0'> X &nbsp;" + taxoCompany + "&nbsp;&nbsp;&nbsp;&nbsp;</span>";

						return;
					}

				});


			
			
				$.each(tax1Array, function(index, value) {

					
					value = (value.toLowerCase()).trim();

					
					if (checkedLabel == value) {

						

						resultCategory =  "<span class='taxo-1' > X &nbsp;" + taxoCategory + "&nbsp;&nbsp;&nbsp;&nbsp;</span>";

						return;
					}

				});

			
				$( "div#chosenFilter" ).hide();

			
					$( ".uform_title" ).append("<div id='chosenFilter'>" + resultCompany + resultCategory + "</div> ");	

			
						$(".uwpqsf_class").fadeOut(100);
				});



			
					 $("#chosenFilter span.taxo-0").click(function() {
							
							$('.tax-check-0').find(':checked').each(function() {
								$(this).removeAttr('checked');
							});	

						 $(this).remove();

						$('#uwpqsf_id_btn:button').click();
							$(".uwpqsf_class").hide();
							return false;
					});


					 $("#chosenFilter span.taxo-1").click(function() {
						
						$('.tax-check-1').find(':checked').each(function() {
							$(this).removeAttr('checked');
						});			
						$(this).remove();

						$('input#uwpqsf_id_btn:button').click()
							$("div.uwpqsf_class.tax-check-0.togglecheck").hide();
							$("div.uwpqsf_class.tax-check-1.togglecheck").hide();
							$("span.uwpqsf_class.uwpqsf_submit").hide();
							return false;
					});

	} else {  // IS Mobile

				

				

				$(".uwpqsf_class").fadeOut(100);

				
				$("#filter-copy").show();  // Hide copy

				$("#uwpqsf_id").css({"height":"0px", "margin":"2px 0 0 0px", "width":"100%"});
				$("#uwpqsf_id form").css({"height":"0px", "margin-top":"-6px 0 -8px"});

				$("#filter-float").hide(); // Hide Primary Button				  		  	
				$("#c_filter-float").show(); // Show Secondary Filter Button

	}; 

});  



  if (win_width > 349) {  // Is NOT Mobile

	

	$('.uform_title').html("<div><span id='filters-button'>Filters</span></div>");
	$("#filters-button").hover(function(){
		$(this).css("text-decoration","underline");
	}, function() {  // not hover
		$(this).css("text-decoration","none")
	});

	
	$("#filters-button").click(function(){              // Click on Filter Button
		$(".uwpqsf_class").toggle(50);
	});

				
  } else {   // IS Mobile
  
	

	
	$('.uform_title > div:first-child').html("<div id='filter-float'>Filters</div><div id='c_filter-float'>Cancel</div><div id='reset_filter'><a href='.'</a>Reset</a></div>");

	  $("#c_filter-float").hide(); // Hide Cancel Filter Button
	  $("#reset_filter").hide(); // Hide Reset Button

	  $("#uwpqsf_id ").css({"border" : "0px", "margin" : "0px 0 0px"});
	  $("#uwpqsf_id form span.uwpqsf_submit").css({"position" : "absolute", "bottom" : "0", "left":"0"});

	  $("#uwpqsf_id").css({"border" : "0px", "margin-top" : "0px", "height":"0"});

	  $(".uform_title").css("height","0px");
	  $(".uform_title").css("border","0px");
	  $(".uform_title > div").css("width","0px");
	  $(".uform_title > div").css("padding","0px");


	$(".uform_title div:first-child").hover(function(){
		if ($(".uwpqsf_class").css("display") == "none") {

			$(this).css("color","black")
			$(this).css("text-decoration","underline")
			$(this).css("cursor", "pointer")


			

			$(".uform_title").click(function(){

			
		  $("#c_filter-float").show(); // Show Cancel Filter Button
		  $("#reset_filter").show(); // Show Reset Button


			
			$('html, body').animate({ scrollTop: 0 }, 'slow');

				
				var offset = $("#uwpqsf_id ").offset();
				space = $( window ).height() - offset.top;
				$("#uwpqsf_id ").css({"height" : space});

				$(".taxolabel-0, .taxolabel-1").css({"text-align" : "center", "margin-bottom" : "10px", "font-weight" : "normal !important"});

				
				$("#filter-float").hide();
				$("#filter-copy").hide(); 
				$(".uwpqsf_class").fadeIn(1000);

			});
		}
	}, function() {  // not hover
		$(this).css("text-decoration","none")
	});
}
	  
}); 

});  // End Document Ready



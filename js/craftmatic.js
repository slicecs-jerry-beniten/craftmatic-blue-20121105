$xx=jQuery.noConflict();

$xx(document).ready(function() {
	
var serverName = location.hostname.toString();
	var basket = .99;
	
	$xx('#wabTransfer').click(function(){
		location.href="http://"+serverName+"/forms/win-a-bed";
	});
	
	$xx("#add").click(function(){

		basket=basket+.02;
		if (basket==1){
			document.body.style.zoom=basket;
			document.body.style.MozTransform = 'scale('+basket+')';
     		document.body.style.MozTransformOrigin = '0 0';
		} else {
			document.body.style.zoom=basket;
			document.body.style.MozTransform = 'scale('+basket+')';
     		document.body.style.MozTransformOrigin = '0 0';				
		}
		
		return false;
	});
	
	$xx("#minus").click(function(){
	
		basket=basket-.02;
		if (basket==1){
			document.body.style.zoom=basket;	
			document.body.style.MozTransform = 'scale('+basket+')';
     		document.body.style.MozTransformOrigin = '0 0';
		} else {
			document.body.style.zoom=basket;	
			document.body.style.MozTransform = 'scale('+basket+')';
     		document.body.style.MozTransformOrigin = '0 0';
		}

		return false;
	});

	$xx("#postal_code").keydown(function(event) {
        // Allow: backspace, delete, tab, escape, and enter
        if ( event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 27 || event.keyCode == 13 || 
             // Allow: Ctrl+A
            (event.keyCode == 65 && event.ctrlKey === true) || 
             // Allow: home, end, left, right
            (event.keyCode >= 35 && event.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        else {
            // Ensure that it is a number and stop the keypress
            if (event.shiftKey || (event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105 )) {
                event.preventDefault(); 
            }   
        }
    });
	
	$xx("#phone").keydown(function(event) {
        // Allow: backspace, delete, tab, escape, and enter
        if ( event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 27 || event.keyCode == 13 || 
             // Allow: Ctrl+A
            (event.keyCode == 65 && event.ctrlKey === true) || 
             // Allow: home, end, left, right
            (event.keyCode >= 35 && event.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        else {
            // Ensure that it is a number and stop the keypress
            if (event.shiftKey || (event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105 )) {
                event.preventDefault(); 
            }   
        }
    });
	
//select all the a tag with name equal to modal
	$xx('a[name=modal]').ready(function() {
		//Cancel the link behavior
		//e.preventDefault();
		
		//Get the A tag
		//var id = $xx(this).attr('href');
		//Get the screen height and width
		var maskHeight = $xx(document).height();
		var maskWidth = $xx(window).width();
	
		//Set heigth and width to mask to fill up the whole screen
		$xx('#result').css({'width':maskWidth,'height':maskHeight});
		
		//transition effect		
		$xx('#mask').fadeIn(1000);	
		$xx('#mask').fadeTo("slow",0.8);	
	
		//Get the window height and width
		var winH = $xx(window).height();
		var winW = $xx(window).width();
              
		//Set the popup window to center
		//$xx(id).css('top',  winH/2-$xx(id).height()/2);
		//$xx(id).css('left', winW/2-$xx(id).width()/2);
	
		//transition effect
		//$xx(id).fadeIn(2000); 
	
	});
	
//$xx(window).resize(function() {
 // $xx('body').prepend('<div>' + $xx(window).width() + '</div>');
//});	
	
	//if close button is clicked
	$xx('.window .close').click(function (e) {
		//Cancel the link behavior
		e.preventDefault();
		
		$xx('#mask').hide();
		$xx('#xxpromo').hide();
		$xx('#result').hide();
		$xx('.window').hide();
	});		
	
	//if mask is clicked
	$xx('#xxpromo').click(function () {
		$xx(this).hide();
		$xx('.window').hide();
	});		
	
	//if mask is clicked
	$xx('#result').click(function () {
		$xx(this).hide();
		$xx('.window').hide();
	});		
	
	//if mask is clicked
	$xx('#mask').click(function () {
		$xx(this).hide();
		$xx('.window').hide();
	});			

	$xx(window).resize(function () {
	 
 		var box = $xx('#boxes .window');
 
        //Get the screen height and width
        var maskHeight = $xx(document).height();
        var maskWidth = $xx(window).width();
      
        //Set height and width to mask to fill up the whole screen
        $xx('#mask').css({'width':maskWidth,'height':maskHeight});
               
        //Get the window height and width
        var winH = $xx(window).height();
        var winW = $xx(window).width();

        //Set the popup window to center
        box.css('top',  winH/2 - box.height()/2);
        box.css('left', winW/2 - box.width()/2);
	 
	});

					var offset = $xx("#box").offset();
					var topPadding = 205;
					$xx(window).scroll(function() {
						if ($xx(window).scrollTop() > offset.top) {
							$xx("#box").stop().animate({
								marginTop: $xx(window).scrollTop() - offset.top + topPadding
							});
						} else {
							$xx("#box").stop().animate({
								marginTop: 0
							});
						};
					});

/*
var section = new Array('span','.text');
  section = section.join(',');
*/

  // Reset Font Size
  /*
  var originalFontSize = $xx(section).css('font-size');
  $xx(".resetFont").click(function(){
    $xx(section).css('font-size', originalFontSize);
  });
  */
 
  // Increase Font Size
  /*
  $xx(".increaseFont").click(function(){
    var currentFontSize = $xx(section).css('font-size');
    var currentFontSizeNum = parseFloat(currentFontSize, 10);
    var newFontSize = currentFontSizeNum*1.2;
    $xx(section).css('font-size', newFontSize);
    return false;
  });
 
  // Decrease Font Size
  $xx(".decreaseFont").click(function(){
    var currentFontSize = $xx(section).css('font-size');
    var currentFontSizeNum = parseFloat(currentFontSize, 10);
    var newFontSize = currentFontSizeNum*0.8;
    $xx(section).css('font-size', newFontSize);
    return false;
  });
*/

 $xx("#more").click(function(){
						$xx("#more-info").slideDown("slow");
						$xx("#more").hide();
						$xx("#less").show();
						return false;
					 });
					 $xx("#less").click(function(){
						$xx("#more-info").slideUp("slow");
						$xx("#more").show();
						$xx("#less").hide();
						return false;
					 });
					 $xx('#scrlBotm').click(function() {
						 $xx('html, body').animate({
							 scrollTop: $xx(document).height()
						 },
						 1500);
						 return false;
					 });

					 $xx('#scrlTop').click(function () {
						 $xx('html, body').animate({
							 scrollTop: '0px'
						 },
						 1500);
						 return false;
					 });

$xx("#postal_code").change(function(){
		
		var postal_code = $xx("#postal_code").val();
		
		$xx.ajax({
			type: "POST",
			url: "http://"+serverName+"/dataserver/process.php",
			data: { postal_code: postal_code}, // serializes the form's elements.
			success: function(data){
				$xx("#suburb-change").html(data); // show response from the php script.
			}
		});
			
		return false;
});


$xx("#pillow").click(function(){
	location.href="http://"+serverName+"/forms/free-pillow";
});

$xx("#news").click(function(){
	location.href="http://"+serverName+"/forms/free-news-letter/";
});

$xx("#winabed").click(function(){
	location.href="http://"+serverName+"/forms/win-a-bed";
});




//forms
//news-letter-form
	
$xx("#news-letter-formx").submit(function(){
	var firstname = $xx("#firstname").val();
	var lastname = $xx("#lastname").val();
	var email = $xx("#email").val();
	var case_subject = $xx("#case_subject").val();
	var postal_code = $xx("#postal_code").val();
	var phone = $xx("#phone").val();
	var charcount = phone.length;
	var home_office = $xx("#home_office").val();
	var suburb = $xx("#suburb").val();
	var state = $xx("#state").val();

	if(charcount<=9){
		$xx("#phone").addClass("error");
		$xx("#phone-label").html('<div style="color:red">Must be 10 digit number</div>');
		$xx("#error-phone").removeClass("hide");
	} else {
		$xx("#error-phone").addClass("hide");
		$xx("#phone-label").html('Phone: ');
		$xx("#phone").removeClass("error");
	}
	
	if(firstname==""){
		$xx("#firstname").addClass("error");
		$xx("#firstname-label").html('<div style="color:red">First Name Required</div>');
		$xx("#error").removeClass("hide");
	} else {
		$xx("#firstname-label").html("First Name:");
		$xx("#firstname").removeClass("error");
	}
	
	if(lastname==""){
		$xx("#lastname").addClass("error");
		$xx("#lastname-label").html('<div style="color:red"> &nbsp; Last Name Required</div>');
		$xx("#error").removeClass("hide");
	} else {
		$xx("#lastname-label").html("Last Name:");
		$xx("#lastname").removeClass("error");
	}
	
	if(email==''){
		$xx("#email").addClass("error");
		$xx("#email-label").html('<div style="color:red">Email Required</div>');
		$xx("#error").removeClass("hide");
	} else {
		var email = $xx('#email').val().toString();
		var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		if (!filter.test(email)) {
			$xx("#email-label").html('<div style="color:red">Invalid Email</div>');
			$xx('#email').addClass('error');
			return false;
		} else {
			$xx("#email-label").html('Email:');
			$xx('#email').removeClass('error');
		}	
	}
	
	if(phone==''){
		$xx("#phone").addClass("error");
		$xx("#phone-label").html('<div style="color:red">Phone Required</div>');
		$xx("#error").removeClass("hide");
	} else {
		$xx("#phone").removeClass("error");	
	}
	
	
	if(postal_code==''){
		$xx("#postal_code").addClass("error");
		$xx("#postcode-label").html('<div style="color:red">Postcode Required</div>');
		$xx("#error").removeClass("hide");
	} else {
		$xx("#postcode-label").html('Postcode:');
		$xx("#postal_code").removeClass("error");	
	}

	if(home_office==''){
		$xx("#home_office").addClass("error");
		$xx("#homeaddress-label").html('<div style="color:red">Home Address Required</div>');
		$xx("#error").removeClass("hide");
	} else {
		$xx("#homeaddress-label").html('Home Address: ');
		$xx("#home_office").removeClass("error");	
	}

	if(suburb==' Suburb' || suburb==''){
		$xx("#suburb").addClass("error");
		$xx("#suburb-label").html("<div style='color:red' class='input-label'>Suburb Required</div>");
		$xx("#error").removeClass("hide");
	} else {
		$xx("#suburb-label").html("");
		$xx("#suburb").removeClass("error");	
	}	
	
	if(state==' State'){
		$xx("#state").addClass("error");
		$xx("#error").removeClass("hide");
	} else {
		$xx("#state").removeClass("error");	
	}	

	if(firstname=="" || 
	   lastname=="" || 
	   email=="" ||
	   phone=="" ||
	   postal_code=="" ||
	   home_office=="" ||
	   suburb=="" ||
	   suburb==" Suburb" ||
	   state==" State" ||
	   state=="" 
	){
		return false;
	} else {

	$xx.post("http://"+serverName+"/dataserver/index.php", { 
			firstname: firstname,
			lastname: lastname,
			email: email,
			case_subject: case_subject,
			postal_code: postal_code,
			phone: phone,
			home_office: home_office,
			suburb: suburb,
			statez: state,
			phone: phone
		},
			function(data) {
				location.href="http://"+serverName+"/thank_you/news-letter-thank-you";
			});
		return false;
	}
});

//form-free-sleep-report
$xx("#sleep-report-formx").submit(function(){
	var firstname = $xx("#firstname").val();
	var lastname = $xx("#lastname").val();
	var email = $xx("#email").val();
	var case_subject = $xx("#case_subject").val();
	var postal_code = $xx("#postal_code").val();
	var phone = $xx("#phone").val();
	var charcount = phone.length;
	var home_office = $xx("#home_office").val();
	var suburb = $xx("#suburb").val();
	var state = $xx("#state").val();

	if(charcount<=9){
		$xx("#phone").addClass("error");
		$xx("#phone-label").html('<div style="color:red">Must be 10 digit number</div>');
		$xx("#error-phone").removeClass("hide");
	} else {
		$xx("#error-phone").addClass("hide");
		$xx("#phone-label").html('Phone: ');
		$xx("#phone").removeClass("error");
	}
	
	if(firstname==""){
		$xx("#firstname").addClass("error");
		$xx("#firstname-label").html('<div style="color:red">First Name Required</div>');
		$xx("#error").removeClass("hide");
	} else {
		$xx("#firstname-label").html("First Name:");
		$xx("#firstname").removeClass("error");
	}
	
	if(lastname==""){
		$xx("#lastname").addClass("error");
		$xx("#lastname-label").html('<div style="color:red"> &nbsp; Last Name Required</div>');
		$xx("#error").removeClass("hide");
	} else {
		$xx("#lastname-label").html("Last Name:");
		$xx("#lastname").removeClass("error");
	}
	
	if(email==''){
		$xx("#email").addClass("error");
		$xx("#email-label").html('<div style="color:red">Email Required</div>');
		$xx("#error").removeClass("hide");
	} else {
		var email = $xx('#email').val().toString();
		var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		if (!filter.test(email)) {
			$xx("#email-label").html('<div style="color:red">Invalid Email</div>');
			$xx('#email').addClass('error');
			return false;
		} else {
			$xx("#email-label").html('Email:');
			$xx('#email').removeClass('error');
		}	
	}
	
	if(phone==''){
		$xx("#phone").addClass("error");
		$xx("#phone-label").html('<div style="color:red">Phone Required</div>');
		$xx("#error").removeClass("hide");
	} else {
		$xx("#phone").removeClass("error");	
	}
	
	
	if(postal_code==''){
		$xx("#postal_code").addClass("error");
		$xx("#postcode-label").html('<div style="color:red">Postcode Required</div>');
		$xx("#error").removeClass("hide");
	} else {
		$xx("#postcode-label").html('Postcode:');
		$xx("#postal_code").removeClass("error");	
	}

	if(home_office==''){
		$xx("#home_office").addClass("error");
		$xx("#homeaddress-label").html('<div style="color:red">Home Address Required</div>');
		$xx("#error").removeClass("hide");
	} else {
		$xx("#homeaddress-label").html('Home Address: ');
		$xx("#home_office").removeClass("error");	
	}

	if(suburb==''){
		$xx("#suburb").addClass("error");
		$xx("#suburb-label").html("<div style='color:red' class='input-label'>Suburb Required</div>");
		$xx("#error").removeClass("hide");
	} else {
		$xx("#suburb-label").html("");
		$xx("#suburb").removeClass("error");	
	}	
	
	if(state==''){
		$xx("#state").addClass("error");
		$xx("#error").removeClass("hide");
	} else {
		$xx("#state").removeClass("error");	
	}	

	if(firstname=="" || 
	   lastname=="" || 
	   email=="" ||
	   phone=="" ||
	   postal_code=="" ||
	   home_office=="" ||
	   suburb=="" ||
	   suburb==" Suburb" ||
	   state==" State" ||
	   state=="" 
	){
		return false;
	} else {
	
		$xx.post("http://"+serverName+"/dataserver/index.php", { 
			firstname: firstname,
			lastname: lastname,
			email: email,
			case_subject: case_subject,
			postal_code: postal_code,
			phone: phone,
			home_office: home_office,
			suburb: suburb,
			statez: state,
			phone: phone
		},
			function(data) {
				location.href="http://"+serverName+"/thank_you/sleep-report-thank-you";
			});
		return false;
	}
});

//form-free-pillow
$xx("#free-pillow").submit(function(){
	var firstname = $xx("#firstname").val();
	var lastname = $xx("#lastname").val();
	var email = $xx("#email").val();
	var case_subject = $xx("#case_subject").val();
	var postal_code = $xx("#postal_code").val();
	var phone = $xx("#phone").val();
	var charcount = phone.length;
	var home_office = $xx("#home_office").val();
	var suburb = $xx("#suburb").val();
	var state = $xx("#state").val();

	if(charcount<=9){
		$xx("#phone").addClass("error");
		$xx("#phone-label").html('<div style="color:red">Must be 10 digit number</div>');
		$xx("#error-phone").removeClass("hide");
	} else {
		$xx("#error-phone").addClass("hide");
		$xx("#phone-label").html('Phone: ');
		$xx("#phone").removeClass("error");
	}
	
	if(firstname==""){
		$xx("#firstname").addClass("error");
		$xx("#firstname-label").html('<div style="color:red">First Name Required</div>');
		$xx("#error").removeClass("hide");
	} else {
		$xx("#firstname-label").html("First Name:");
		$xx("#firstname").removeClass("error");
	}
	
	if(lastname==""){
		$xx("#lastname").addClass("error");
		$xx("#lastname-label").html('<div style="color:red"> &nbsp; Last Name Required</div>');
		$xx("#error").removeClass("hide");
	} else {
		$xx("#lastname-label").html("Last Name:");
		$xx("#lastname").removeClass("error");
	}
	
	if(email==''){
		$xx("#email").addClass("error");
		$xx("#email-label").html('<div style="color:red">Email Required</div>');
		$xx("#error").removeClass("hide");
	} else {
		var email = $xx('#email').val().toString();
		var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		if (!filter.test(email)) {
			$xx("#email-label").html('<div style="color:red">Invalid Email</div>');
			$xx('#email').addClass('error');
			return false;
		} else {
			$xx("#email-label").html('Email:');
			$xx('#email').removeClass('error');
		}	
	}
	
	if(phone==''){
		$xx("#phone").addClass("error");
		$xx("#phone-label").html('<div style="color:red">Phone Required</div>');
		$xx("#error").removeClass("hide");
	} else {
		$xx("#phone").removeClass("error");	
	}
	
	
	if(postal_code==''){
		$xx("#postal_code").addClass("error");
		$xx("#postcode-label").html('<div style="color:red">Postcode Required</div>');
		$xx("#error").removeClass("hide");
	} else {
		$xx("#postcode-label").html('Postcode:');
		$xx("#postal_code").removeClass("error");	
	}

	if(home_office==''){
		$xx("#home_office").addClass("error");
		$xx("#homeaddress-label").html('<div style="color:red">Home Address Required</div>');
		$xx("#error").removeClass("hide");
	} else {
		$xx("#homeaddress-label").html('Home Address: ');
		$xx("#home_office").removeClass("error");	
	}

	if(suburb==' Suburb' || suburb==''){
		$xx("#suburb").addClass("error");
		$xx("#suburb-label").html("<div style='color:red' class='input-label'>Suburb Required</div>");
		$xx("#error").removeClass("hide");
	} else {
		$xx("#suburb-label").html("");
		$xx("#suburb").removeClass("error");	
	}	
	
	if(state==' State'){
		$xx("#state").addClass("error");
		$xx("#error").removeClass("hide");
	} else {
		$xx("#state").removeClass("error");	
	}	

	if(firstname=="" || 
	   lastname=="" || 
	   email=="" ||
	   phone=="" ||
	   postal_code=="" ||
	   home_office=="" ||
	   state=="" ||
	   state==' State' ||
	   suburb=="" ||
	   suburb==' Suburb' ||
	   state=="" 
	){
		return false;
	} else {
		$xx.post("http://"+serverName+"/dataserver/index.php" , { 
			firstname: firstname,
			lastname: lastname,
			email: email,
			case_subject: case_subject,
			postal_code: postal_code,
			phone: phone,
			home_office: home_office,
			suburb: suburb,
			statez: state,
			phone: phone
		},
			function(data) {
						location.href="http://"+serverName+"/thank_you/free-pillow-thank-you";
			});
		return false;
	}
});	


//form-win-a-bed
$xx("#win-a-bed").submit(function(){
	var firstname = $xx("#firstname").val();
	var lastname = $xx("#lastname").val();
	var email = $xx("#email").val();
	var case_subject = $xx("#case_subject").val();
	var postal_code = $xx("#postal_code").val();
	var phone = $xx("#phone").val();
	var charcount = phone.length;
	var home_office = $xx("#home_office").val();
	var suburb = $xx("#suburb").val();
	var state = $xx("#state").val();
	var agreement = $xx('input[name=agreement]').is(':checked');

	if(charcount<=9){
		$xx("#phone").addClass("error");
		$xx("#phone-label").html('<div style="color:red">Must be 10 digit number</div>');
		$xx("#error-phone").removeClass("hide");
	} else {
		$xx("#error-phone").addClass("hide");
		$xx("#phone-label").html('Phone: ');
		$xx("#phone").removeClass("error");
	}
	
	if(firstname==""){
		$xx("#firstname").addClass("error");
		$xx("#firstname-label").html('<div style="color:red">First Name Required</div>');
		$xx("#error").removeClass("hide");
	} else {
		$xx("#firstname-label").html("First Name:");
		$xx("#firstname").removeClass("error");
	}
	
	if(lastname==""){
		$xx("#lastname").addClass("error");
		$xx("#lastname-label").html('<div style="color:red"> &nbsp; Last Name Required</div>');
		$xx("#error").removeClass("hide");
	} else {
		$xx("#lastname-label").html("Last Name:");
		$xx("#lastname").removeClass("error");
	}
	
	if(email==''){
		$xx("#email").addClass("error");
		$xx("#email-label").html('<div style="color:red">Email Required</div>');
		$xx("#error").removeClass("hide");
	} else {
		var email = $xx('#email').val().toString();
		var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		if (!filter.test(email)) {
			$xx("#email-label").html('<div style="color:red">Invalid Email</div>');
			$xx('#email').addClass('error');
			return false;
		} else {
			$xx("#email-label").html('Email:');
			$xx('#email').removeClass('error');
		}	
	}
	
	if(phone==''){
		$xx("#phone").addClass("error");
		$xx("#phone-label").html('<div style="color:red">Phone Required</div>');
		$xx("#error").removeClass("hide");
	} else {
		$xx("#phone").removeClass("error");	
	}
	
	
	if(postal_code==''){
		$xx("#postal_code").addClass("error");
		$xx("#postcode-label").html('<div style="color:red">Postcode Required</div>');
		$xx("#error").removeClass("hide");
	} else {
		$xx("#postcode-label").html('Postcode:');
		$xx("#postal_code").removeClass("error");	
	}

	if(home_office==''){
		$xx("#home_office").addClass("error");
		$xx("#homeaddress-label").html('<div style="color:red">Home Address Required</div>');
		$xx("#error").removeClass("hide");
	} else {
		$xx("#homeaddress-label").html('Home Address: ');
		$xx("#home_office").removeClass("error");	
	}

	if(suburb==' Suburb' || suburb==''){
		$xx("#suburb").addClass("error");
		$xx("#suburb-label").html("<div style='color:red' class='input-label'>Suburb Required</div>");
		$xx("#error").removeClass("hide");
	} else {
		$xx("#suburb-label").html("");
		$xx("#suburb").removeClass("error");	
	}	
	
	if(state==' State'){
		$xx("#state").addClass("error");
		$xx("#error").removeClass("hide");
	} else {
		$xx("#state").removeClass("error");	
	}	
	var agree = agreement.toString();
	if(agree=="false"){
		$xx("#agreement").addClass("error");
		$xx("#agreement-label").html("<div style='color:red'>Please Read and Agree to our</div>");
		$xx("#error-tick").removeClass("hide");
	} else {
		$xx("#error-tick").addClass("hide");
		$xx("#agreement-label").html("I have read and understood the");
		$xx("#agreement").removeClass("error");
	}
	if(firstname=="" || 
	   lastname=="" || 
	   email=="" ||
	   phone=="" ||
	   postal_code=="" ||
	   home_office=="" ||
	   state=="" || 
	   state==" State" ||
	   suburb=="" ||
	   suburb==' Suburb' ||
	   state=="" ||
	   agree=="false" ||
	   charcount <= 9
	){
		return false;
	} else {
		$xx.post("http://"+serverName+"/dataserver/index.php" , { 
			firstname: firstname,
			lastname: lastname,
			email: email,
			case_subject: case_subject,
			postal_code: postal_code,
			phone: phone,
			home_office: home_office,
			suburb: suburb,
			statez: state,
			phone: phone
		},
			function(data) {
			
					if(data=='joined'){
						$xx("#win-a-bed").html("<div style='font-family:arial;text-align:center'>You Are Already in the Competition</div>");
					}
					else{
						location.href="http://"+serverName+"/thank_you/win-a-bed-thank-you";
					}
			});
		return false;
	}
});	

//submenu
//products
$xx('.page-item-14, #adjustable-beds').mouseover(function(){
	$xx('#adjustable-beds').addClass('product-sub').removeClass('product-sub-hide');
});

$xx('.page-item-14, #adjustable-beds').mouseout(function(){
	$xx('#adjustable-beds').addClass('product-sub-hide');
});


//submenu
//promotions
$xx('.page-item-17, #promotionsx').mouseover(function(){
	$xx('#promotionsx').removeClass('promo-sub-hide');
});

$xx('.page-item-17, #promotionsx').mouseout(function(){
	$xx('#promotionsx').addClass('promo-sub-hide');
});

//select all the a tag with name equal to modal
	$xx('a[name=modal]').click(function(e) {
		//Cancel the link behavior
		e.preventDefault();
		
		//Get the A tag
		var id = $xx(this).attr('href');
	
		//Get the screen height and width
		var maskHeight = $xx(document).height();
		var maskWidth = $xx(window).width();
	
		//Set heigth and width to mask to fill up the whole screen
		$xx('#mask').css({'width':maskWidth,'height':maskHeight});
		
		//transition effect		
		$xx('#mask').fadeIn(1000);	
		$xx('#mask').fadeTo("slow",0.8);	
	
		//Get the window height and width
		var winH = $xx(window).height();
		var winW = $xx(window).width();
              
		//Set the popup window to center
		$xx(id).css('top',  winH/2-$xx(id).height()/2);
		$xx(id).css('left', winW/2-$xx(id).width()/2);
	
		//transition effect
		$xx(id).fadeIn(2000); 
	
	});
	
	//if close button is clicked
	$xx('.window .close').click(function (e) {
		//Cancel the link behavior
		e.preventDefault();
		
		$xx('#mask').hide();
		$xx('.window').hide();
	});		
	
	//if mask is clicked
	$xx('#mask').click(function () {
		$xx(this).hide();
		$xx('.window').hide();
	});			

	$xx(window).resize(function () {
	 
 		var box = $xx('#boxes .window');
 
        //Get the screen height and width
        var maskHeight = $xx(document).height();
        var maskWidth = $xx(window).width();
      
        //Set height and width to mask to fill up the whole screen
        $xx('#mask').css({'width':maskWidth,'height':maskHeight});
               
        //Get the window height and width
        var winH = $xx(window).height();
        var winW = $xx(window).width();

        //Set the popup window to center
        box.css('top',  winH/2 - box.height()/2);
        box.css('left', winW/2 - box.width()/2);
	}); 	
	
	$xx("#map1").click(function(){
		$xx("#map1").hide('slow');
		$xx("#map2").hide('slow');
		$xx("#map3").show('slow');
		$xx("#map4").hide('slow');
	});
	
	$xx("#map2").click(function(){
		$xx("#map1").hide('slow');
		$xx("#map2").hide('slow');
		$xx("#map3").hide('slow');
		$xx("#map4").show('slow');
	});	
	
	$xx('#countdown_dashboard').countDown({
	    
	    targetDate: {
		    'day': 		10,
		    'month': 	11,
			'year': 	2012,
			'hour': 	16,
			'min': 		39,
			'sec': 		0
		}, 
						
		onComplete: function() { 
			/*$xx('#complete_info_message').slideDown();*/
			$xx('.timer').hide();
		}
		
	});
	
		$xx("#xslideshow").mouseover(function(){
		$xx("#model-prod1").show();
		$xx("#model-prod2").hide();
		$xx("#model-prod3").hide();
	});
	
	$xx("#xslideshow2").mouseover(function(){
		$xx("#model-prod1").hide();
		$xx("#model-prod2").show();
		$xx("#model-prod3").hide();
	});
	
	$xx("#xslideshow3").mouseover(function(){
		$xx("#model-prod1").hide();
		$xx("#model-prod2").hide();
		$xx("#model-prod3").show();
	});
	
	$xx("#xslideshow").click(function(){
		window.location="http://"+serverName+"/adjustable-beds/craftmatic-model-one/";
	});
	
	$xx("#xslideshow2").click(function(){
		window.location="http://"+serverName+"/adjustable-beds/craftmatic-model-two/";
	});
	
	$xx("#xslideshow3").click(function(){
		window.location="http://"+serverName+"/adjustable-beds/craftmatic-monaco/";
	});
	
	$xx("#pslideshow").mouseover(function(){
		$xx("#model1, #model2").addClass('border-promo corner');	
		$xx("#promo-prod1").show();
		$xx("#promo-prod2").hide();
		$xx("#promo-prod3").hide();
		$xx("#promo-prod4").hide();
	});
	
	$xx("#pslideshow").mouseout(function(){
		$xx("#model1, #model2").removeClass('border-promo corner');	
	}); 
	
	$xx("#pslideshow2").mouseover(function(){
		$xx("#model3, #model4, #model5").addClass('border-promo corner');
		$xx("#promo-prod1").hide();
		$xx("#promo-prod2").show();
		$xx("#promo-prod3").hide();
		$xx("#promo-prod4").hide();
	});
	
	$xx("#pslideshow2").mouseout(function(){
		$xx("#model3, #model4, #model5").removeClass('border-promo corner');	
	});
	
	$xx("#pslideshow3").mouseover(function(){
		$xx("#model6, #model7").addClass('border-promo corner');
		$xx("#promo-prod1").hide();
		$xx("#promo-prod2").hide();
		$xx("#promo-prod3").show();
		$xx("#promo-prod4").hide();
	});
	
	$xx("#pslideshow3").mouseout(function(){
		$xx("#model6, #model7, #model10, #model11, #model2, #model3").removeClass('border-promo corner');	
	});
	
	
	$xx("#pslideshow4").mouseover(function(){
		$xx("#model8, #model9").addClass('border-promo corner');
		$xx("#promo-prod1").hide();
		$xx("#promo-prod2").hide();
		$xx("#promo-prod3").hide();
		$xx("#promo-prod4").show();
	});
	
	$xx("#pslideshow4").mouseout(function(){
		$xx("#model8, #model9").removeClass('border-promo corner');	
	});
	
	$xx("#pslideshow").click(function(){
		window.location="win-a-bed";
	});
	
	$xx("#pslideshow2").click(function(){
		window.location="free-pillow";
	});
	
	$xx("#pslideshow3").click(function(){
		window.location="free-sleep-report";
	});

	$xx("#pslideshow4").click(function(){
		window.location="free-news-letter";
	});
	 
	
	
});


function slideSwitch() {
    var $active = $xx('#slideshow IMG.active');

    if ( $active.length == 0 ) $active = $xx('#slideshow IMG:last');
	
    var $next =  $active.next().length ? $active.next() : $xx('#slideshow IMG:first');
    $active.addClass('last-active');

    $next.css({opacity: 0.0})
        .addClass('active')
        .animate({opacity: 1.0}, 1000, function() {
            $active.removeClass('active last-active');
        });
}

function slideSwitch2() {
    var $active = $xx('#productslide IMG.active');

    if ( $active.length == 0 ) $active = $xx('#productslide IMG:last');
	
    var $next =  $active.next().length ? $active.next() : $xx('#productslide IMG:first');
    $active.addClass('last-active');

    $next.css({opacity: 0.0})
        .addClass('active')
        .animate({opacity: 1.0}, 1000, function() {
            $active.removeClass('active last-active');
        });
}

function slideSwitch3() {
    var $active = $xx('#xslideshow IMG.active');

    if ( $active.length == 0 ) $active = $xx('#xslideshow IMG:last');

    // use this to pull the images in the order they appear in the markup
    var $next =  $active.next().length ? $active.next()
        : $xx('#xslideshow IMG:first');

    // uncomment the 3 lines below to pull the images in random order
    
    // var $sibs  = $active.siblings();
    // var rndNum = Math.floor(Math.random() * $sibs.length );
    // var $next  = $( $sibs[ rndNum ] );


    $active.addClass('last-active');

    $next.css({opacity: 0.0})
        .addClass('active')
        .animate({opacity: 1.0}, 1000, function() {
            $active.removeClass('active last-active');
        });
}

function slideSwitch4() {
    var $active = $xx('#xslideshow2 IMG.active');

    if ( $active.length == 0 ) $active = $xx('#xslideshow2 IMG:last');

    // use this to pull the images in the order they appear in the markup
    var $next =  $active.next().length ? $active.next()
        : $xx('#xslideshow2 IMG:first');

    // uncomment the 3 lines below to pull the images in random order
    
    // var $sibs  = $active.siblings();
    // var rndNum = Math.floor(Math.random() * $sibs.length );
    // var $next  = $( $sibs[ rndNum ] );


    $active.addClass('last-active');

    $next.css({opacity: 0.0})
        .addClass('active')
        .animate({opacity: 1.0}, 1000, function() {
            $active.removeClass('active last-active');
        });
}

function slideSwitch5() {
    var $active = $xx('#xslideshow3 IMG.active');

    if ( $active.length == 0 ) $active = $xx('#xslideshow3 IMG:last');

    // use this to pull the images in the order they appear in the markup
    var $next =  $active.next().length ? $active.next()
        : $xx('#xslideshow3 IMG:first');

    // uncomment the 3 lines below to pull the images in random order
    
    // var $sibs  = $active.siblings();
    // var rndNum = Math.floor(Math.random() * $sibs.length );
    // var $next  = $( $sibs[ rndNum ] );


    $active.addClass('last-active');

    $next.css({opacity: 0.0})
        .addClass('active')
        .animate({opacity: 1.0}, 1000, function() {
            $active.removeClass('active last-active');
        });
}


function slideSwitch6() {
    var $active = $xx('#pslideshow IMG.active');

    if ( $active.length == 0 ) $active = $xx('#pslideshow IMG:last');

    // use this to pull the images in the order they appear in the markup
    var $next =  $active.next().length ? $active.next()
        : $xx('#pslideshow IMG:first');

    // uncomment the 3 lines below to pull the images in random order
    
    // var $sibs  = $active.siblings();
    // var rndNum = Math.floor(Math.random() * $sibs.length );
    // var $next  = $( $sibs[ rndNum ] );


    $active.addClass('last-active');

    $next.css({opacity: 0.0})
        .addClass('active')
        .animate({opacity: 1.0}, 1000, function() {
            $active.removeClass('active last-active');
        });
}

function slideSwitch7() {
    var $active = $xx('#pslideshow2 IMG.active');

    if ( $active.length == 0 ) $active = $xx('#pslideshow2 IMG:last');

    // use this to pull the images in the order they appear in the markup
    var $next =  $active.next().length ? $active.next()
        : $xx('#pslideshow2 IMG:first');

    // uncomment the 3 lines below to pull the images in random order
    
    // var $sibs  = $active.siblings();
    // var rndNum = Math.floor(Math.random() * $sibs.length );
    // var $next  = $( $sibs[ rndNum ] );


    $active.addClass('last-active');

    $next.css({opacity: 0.0})
        .addClass('active')
        .animate({opacity: 1.0}, 1000, function() {
            $active.removeClass('active last-active');
        });
}

function slideSwitch8() {
    var $active = $xx('#pslideshow3 IMG.active');

    if ( $active.length == 0 ) $active = $xx('#pslideshow3 IMG:last');

    // use this to pull the images in the order they appear in the markup
    var $next =  $active.next().length ? $active.next()
        : $xx('#pslideshow3 IMG:first');

    // uncomment the 3 lines below to pull the images in random order
    
    // var $sibs  = $active.siblings();
    // var rndNum = Math.floor(Math.random() * $sibs.length );
    // var $next  = $( $sibs[ rndNum ] );


    $active.addClass('last-active');

    $next.css({opacity: 0.0})
        .addClass('active')
        .animate({opacity: 1.0}, 1000, function() {
            $active.removeClass('active last-active');
        });
}

function slideSwitch9() {
    var $active = $xx('#pslideshow4 IMG.active');

    if ( $active.length == 0 ) $active = $xx('#pslideshow4 IMG:last');

    // use this to pull the images in the order they appear in the markup
    var $next =  $active.next().length ? $active.next()
        : $xx('#pslideshow4 IMG:first');

    // uncomment the 3 lines below to pull the images in random order
    
    // var $sibs  = $active.siblings();
    // var rndNum = Math.floor(Math.random() * $sibs.length );
    // var $next  = $( $sibs[ rndNum ] );


    $active.addClass('last-active');

    $next.css({opacity: 0.0})
        .addClass('active')
        .animate({opacity: 1.0}, 1000, function() {
            $active.removeClass('active last-active');
        });
}

function slideSwitch10() {
    var $active = $xx('#slideshow2 IMG.active');

    if ( $active.length == 0 ) $active = $xx('#slideshow2 IMG:last');

    var $next =  $active.next().length ? $active.next()
        : $xx('#slideshow2 IMG:first');

    $active.addClass('last-active');

    $next.css({opacity: 0.0})
        .addClass('active')
        .animate({opacity: 1.0}, 1000, function() {
            $active.removeClass('active last-active');
        });
}




$xx(function() {
    setInterval( "slideSwitch()", 5000 );
	setInterval( "slideSwitch2()", 5000 );
	setInterval( "slideSwitch3()", 5000 );
	setInterval( "slideSwitch4()", 6000 );
	setInterval( "slideSwitch5()", 7000 );
    setInterval( "slideSwitch6()", 5000 );
	setInterval( "slideSwitch7()", 6000 );
	setInterval( "slideSwitch8()", 800 );
	setInterval( "slideSwitch9()", 7000 );
	setInterval( "slideSwitch10()", 5000 );
});
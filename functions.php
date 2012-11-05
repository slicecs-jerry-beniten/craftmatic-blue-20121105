<?php
	function craftmatic_session()
	{
	  session_start();
	}
	 
	add_action('init', 'craftmatic_session', 1);
	
	function gAnlytics(){
		$data="
		<script type='text/javascript'>
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-33250827-1']);
		  _gaq.push(['_trackPageview']);
		
		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		
		</script>
		";
		
		return $data;
	}
	
    function blogLoop( $post_name, $post_title, $post_content){
        $data="<br /><div style='float:left;height:auto;margin-left:auto;margin-right:auto;font-family:arial;font-size:15px;width:720px;padding-bottom:30px;background-color:#e9ebed' class='corner'  >
					<div style='text-align:left' class='blog-logo'>
					
					</div>
					<div style='text-align:left;padding-left:100px'>
						<p style='padding-top:20px;color:#005AA2;font-weight:bold;font-size:20px;'><a  style='text-decoration:none;color:#005AA2' href='".$post_name."'>".$post_title."</a>
							<div  style='border-top:1px solid #005AA2;margin-top:-20px;margin-left:-1px;width:550px;'></div>
							<div>by: Craftmatic Australia</div>
						</p>
						<div class='text' style='width:550px;text-align:justify;font-size:13px;'>
					     ".substr ( $post_content , 0 ,  500  )."
						</div>
						</div>
						<br />
						<div style='margin-left:550px;'><a style='color:#005AA2;text-decoration:none;' href='".$post_name."'>READ MORE >></a></div>
				</div>";
		return $data;
    }

    function blogList(){
        return  query_posts('post_type=craftmatic_blog');
    }

    function callusToday(){
    	$data="<div class='call-today'></div>";
    	return $data;
    }
    
    function currentPromotions(){
        $data="
				<div class='reason bottom-corner' style='margin-left:-30px;margin-top:25px;width:232px;'>
					<div class='green-corner' style='color:white;background-color:#77B800;height:40px;'><center style='padding-top:5px;width:320px;'><div style='margin-left:30px;float:left;font-size:15pt;font-family:tahoma'>Current Promotions</div></center></div>	
					<div  style='background-color:#FDFBFB;height:80px' >
						<div style='margin-left:100px;width:100px'>
							<div style='margin-top:20px;clear:both'>
								<div class='bullet-icon' style='margin-top:20px;'></div>
								<div class='posts' style='font-family:arial;float:left;font-size:12pt;margin-left:-50px;margin-top:12px;'><a href='form-win-a-bed' style='text-decoration:none'>Win A Bed Promo ...</a></div>
							</div>
						</div>
					</div>
				</div>        
        ";
		
		return $data;
	}

    function customerStories(){
    	$data="
               <div class='reason bottom-corner' style='margin-left:-30px;margin-top:25px;width:232px;'>
					<div class='green-corner' style='color:white;background-color:#77B800;height:40px;'><center style='padding-top:5px;width:320px;'><div style='margin-left:40px;float:left;font-size:15pt;font-family:tahoma'>Customer Stories</div></center></div>	
					<div  style='background-color:#FDFBFB;height:190px' >
						<div style='margin-left:100px;width:100px'>
							<div style='margin-top:20px;clear:both'>
								<div style='float:left; margin-left:-100px;margin-top:-20px;font-size:16px; font-family: Gill, Helvetica, sans-serif;'>
									<iframe style='border:6px solid #000000' width='221' height='200' src='http://www.youtube.com/embed/5S8cL98nC_8' frameborder='0' allowfullscreen>
									</iframe>	
								</div>								
							</div>
						</div>
					</div>
				</div>    	
    	";
		
		return $data;
    }
	
	function freePillow(){
		$data="
			<div style='margin-left:auto;margin-right:auto;width:980px;margin-top:20px;'>
				<div style='color:#005AA2;text-align:center' class='header-standard'>
					Claim Your Free Premium-Quality Pillow
				</div>
				<div style='color:#84BD00;text-align:center;font-size:18pt;font-family:arial;margin-top:1px;'>
					following a No Obligation In-Home Sales presentation
				</div>		
				<br />
				<div style='float:left'>
				<div style='margin-left:20px;float:left;line-height:20px;text-align:left;color:#414241;width:520px;' class='body-standard'>
					Let us demonstrate to you the wonderful benefits of a Craftmatic Adjustable Bed, and why it is a lasting investment.
					Please fill out your details and one of our sleep specialists will be in contact with you soon to arrange a no-obligation, 
					in-home sales presentation. And if you do so, as a token of our appreciation, we would be delighted to give you a
					FREE Australian made hypo-allergenic premium pillow to say thank you for welcoming us into your home.
				</div>
				<div style='clear:both'></div>
				<div class='australian-pillow' style='float:left;padding-left:10px;margin-left:50px;margin-top:40px;'></div>
				</div>

				<div style='float:left;margin-top:-105px;'>
					<div class='corner' style='margin-left:90px;padding-top:110px;float:left'>
					
<form class='corner' style='padding:15px;border:1px solid grey;margin-left:-18px;width:304px;background-color:#fffcdd' id='free-pillow' action=''>
				<div style='font-family:arial;padding-bottom:15px;width:240px;text-align:center;margin-left:32px;'>
					Please enter your details below and click SUBMIT button
				</div>				
				<table cellpadding=0 cellspacing=0 border=0>
					<input id='case_subject' type='hidden' name='case_subject' value=2 />
						<tr>
							<td>
								<div style='float:left'>
									<div id='firstname-label' class='input-label'>First Name:</div>
									<div><input style='width:140px;' id='firstname' type='text' name='firstname' /></div>
								</div>
								<div style='float:left'>
									<div id='lastname-label' class='input-label' style='margin-left:10px;'>Last Name:</div>
									<div><input style='margin-left:10px;width:140px;' id='lastname' type='text' name='lastname' /></div>
								</div>
								<div style='clear:both'></div>
								<div style='margin-top:3px;'></div>
								<div style='float:left'>
									<div id='email-label' class='input-label'>Email:</div>
									<div><input style='width:295px;' id='email' type='text' name='email' /></div>
								</div>
								<div style='clear:both'></div>
								<div style='margin-top:3px;'></div>
								<div style='float:left;'>
									<div id='phone-label' class='input-label'>Phone:</div>
									<div><input style='margin-left:0px;width:140px' maxlength='10' id='phone' type='text' name='phone' /></div>
								</div>
								<div style='float:left;'>
									<div id='postcode-label' style='margin-left:10px;' class='input-label'>Postcode:</div>
									<div><input style='margin-left:10px;width:140px' id='postal_code' type='text' name='postal_code' /></div>
									
								</div>
								<div style='clear:both'></div>
								<div style='margin-top:3px;'></div>
									<div style='float:left'>
										<div id='homeaddress-label' class='input-label'>Home Address:</div>
										<div><input style='width:295px;' id='home_office' type='text' name='home_office' /></div>
									</div>
								<div style='clear:both'></div>
								<div style='margin-top:15px;'></div>
									<div id='suburb-change' style='float:left'>
										<div style='float:left'>
											<input style='width:140px;' onclick='this.value='';' onfocus='this.select()' onblur='this.value=!this.value?' Suburb':this.value;' id='suburb' type='text' name='suburb' value=' Suburb' disabled='disabled'/>											
										</div>
										<div style='float:left'>
											<input style='margin-left:10px;width:140px;' onclick='this.value='';' onfocus='this.select()' onblur='this.value=!this.value?' State':this.value;' id='state' type='text' name='state' value=' State' disabled='disabled'/>
										</div>
									</div>
								<div style='clear:both'></div>
								<div style='margin-left:10px;font-family:arial;font-size:10pt'>
									<div style='margin-top:10px;'></div>
									<div style='text-align:center;margin-left:-18px;float:left;width:300px;font-size:8pt;' >												
										We respect your <a href='#privacy' name='modal' style='text-decoration: none; '>Privacy</a>
									</div>
									<div style='margin-top:10px;'></div>

								</div>
									<div style='clear:both'></div>
								<div style='padding-top:25px;'></div><center><input class='corner-button claim-button' id='submit' type='submit' name='claim' value='SUBMIT' style='font-size:19px;font-weight:bold;width:130px;height:38px;color:white;background-color:#77B800'/></center>											
						</td>
					</tr>
				</table>
			</form>
					
					</div>
				</div>
			</div>		
		";
		return $data;
	}
	
	function freePillowThankyou( $firstname ){
    	$data="
				<div style='margin-left:250px;margin-top:140px;color:#005AA2;font-family:tahoma;font-size:22pt;'>
					<center>Thank you for your submission</center>
				</div>
				<div style='color:#84BD00;font-family:arial;font-size:14pt;margin-left:250px'>
					<center>Your details have been verified successfully</center>
				</div>
				<div class='free-pillow-home-thank-you' style='margin-left:270px;margin-top:70px;padding-left:10px;float:left '></div>
				<div style='float:left;margin-top:-340px;margin-left:50px;'>
					<div style='font-size:14px;margin-left:550px;width:290px'>
						<div style='float:left;font-family:arial;color:#59595b;padding-top:20px'>Full Name:</div>
						<div style='float:left;font-family:arial;color:#59595b;padding-top:20px'><b> &nbsp; ". $firstname ." ".$_SESSION['lastname']."</b></div>
						<div style='clear:both'></div>
						<div style='float:left;font-family:arial;color:#59595b;padding-top:20px'>Email:</div>
						<div style='float:left;font-family:arial;color:#59595b;padding-top:20px'><b> &nbsp; ". $_SESSION['email']."</b></div>
						<div style='clear:both'></div>
						<div style='float:left;font-family:arial;color:#59595b;padding-top:20px'>Contact No:</div>
						<div style='float:left;font-family:arial;color:#59595b;padding-top:20px'><b> &nbsp; ". $_SESSION['phone']."</b></div>
						<div style='clear:both'></div>
						<div style='float:left;font-family:arial;color:#59595b;padding-top:20px'>Home Address:</div>
						<div style='float:left;font-family:arial;color:#59595b;padding-top:20px'><b> &nbsp; ". $_SESSION['home_office']."</b></div>
						<div style='clear:both'></div>
						<div style='float:left;font-family:arial;color:#59595b;padding-top:20px'>Suburb:</div>
						<div style='float:left;font-family:arial;color:#59595b;padding-top:20px'><b> &nbsp; ". $_SESSION['suburb']."</b></div>
						<div style='clear:both'></div>
						<div style='float:left;font-family:arial;color:#59595b;padding-top:20px'>State:</div>
						<div style='float:left;font-family:arial;color:#59595b;padding-top:20px'><b> &nbsp; ". $_SESSION['state']."</b></div>
						<div style='clear:both'></div>
						<div style='float:left;font-family:arial;color:#59595b;padding-top:20px'>Postcode:</div>
						<div style='float:left;font-family:arial;color:#59595b;padding-top:20px'><b> &nbsp; ". $_SESSION['postal_code']."</b></div>
						</div>
				</div>
				<div style='margin-top:-510px;'></div>
    	";
    	return $data;
    }
    function freeNewsLetter(){
    	$data="
		<div style='margin-left:auto;margin-right:auto;width:1000px;margin-top:10px;'>
				<div style='color:#005AA2;text-align:center' class='header-standard'>
					Free Newsletter
				</div>
				<div style='color:#84BD00;text-align:center;font-size:18pt;font-family:arial;margin-top:1px;'>
					Download our Craftmatic Newsletter for FREE
				</div>				
				<br />
				<div style='float:left'>
				<div style='float:left;line-height:20px;text-align:left;color:#414241;width:550px;margin-left:30px;' class='body-standard'>
					Read useful tips on how to get a good night's sleep and how a Craftmatic bed may temporarily relieve health problems such 
					as lower back pain, mild arthritis, joint pain, neck pain, swelling, edema, circulatory problems, sleep apnoea, breathing 
					problems, acid reflux, and hiatus hernia.		
				</div>
				<div style='clear:both'></div>
				<div class='my-news-letter3' style='float:left;padding-left:10px;margin-left:170px;margin-top:25px;'></div>
				</div>
				<div style='float:left'>
					<div class='corner' style='margin-left:60px;padding-top:3px;float:left'>

<form class='corner' style='padding:15px;border:1px solid grey;margin-left:-18px;width:304px;background-color:#fffcdd' id='news-letter-formx' action=''>
				<div style='font-family:arial;padding-bottom:15px;width:240px;text-align:center;margin-left:32px;'>
					Please enter your details below and click SUBMIT button
				</div>				
				<table cellpadding=0 cellspacing=0 border=0>
					<input id='case_subject' type='hidden' name='case_subject' value=4 />
						<tr>
							<td>
								<div style='float:left'>
									<div id='firstname-label' class='input-label'>First Name:</div>
									<div><input style='width:140px;' id='firstname' type='text' name='firstname' /></div>
								</div>
								<div style='float:left'>
									<div id='lastname-label' class='input-label' style='margin-left:10px;'>Last Name:</div>
									<div><input style='margin-left:10px;width:140px;' id='lastname' type='text' name='lastname' /></div>
								</div>
								<div style='clear:both'></div>
								<div style='margin-top:3px;'></div>
								<div style='float:left'>
									<div id='email-label' class='input-label'>Email:</div>
									<div><input style='width:295px;' id='email' type='text' name='email' /></div>
								</div>
								<div style='clear:both'></div>
								<div style='margin-top:3px;'></div>
								<div style='float:left;'>
									<div id='phone-label' class='input-label'>Phone:</div>
									<div><input style='margin-left:0px;width:140px' maxlength='10' id='phone' type='text' name='phone' /></div>
								</div>
								<div style='float:left;'>
									<div id='postcode-label' style='margin-left:10px;' class='input-label'>Postcode:</div>
									<div><input style='margin-left:10px;width:140px' id='postal_code' type='text' name='postal_code' /></div>
									
								</div>
								<div style='clear:both'></div>
								<div style='margin-top:3px;'></div>
									<div style='float:left'>
										<div id='homeaddress-label' class='input-label'>Home Address:</div>
										<div><input style='width:295px;' id='home_office' type='text' name='home_office' /></div>
									</div>
								<div style='clear:both'></div>
								<div style='margin-top:15px;'></div>
									<div id='suburb-change' style='float:left'>
										<div style='float:left'>
											<input style='width:140px;' onclick='this.value='';' onfocus='this.select()' onblur='this.value=!this.value?' Suburb':this.value;' id='suburb' type='text' name='suburb' value=' Suburb' disabled='disabled'/>											
										</div>
										<div style='float:left'>
											<input style='margin-left:10px;width:140px;' onclick='this.value='';' onfocus='this.select()' onblur='this.value=!this.value?' State':this.value;' id='state' type='text' name='state' value=' State' disabled='disabled'/>
										</div>
									</div>
								<div style='clear:both'></div>
								<div style='margin-left:10px;font-family:arial;font-size:10pt'>
									<div style='margin-top:10px;'></div>
									<div style='text-align:center;margin-left:-18px;float:left;width:300px;font-size:8pt;' >												
										We respect your <a href='#privacy' name='modal' style='text-decoration: none; '>Privacy.</a>
									</div>
									<div style='margin-top:10px;'></div>

								</div>
									<div style='clear:both'></div>
								<div style='padding-top:25px;'></div><center><input class='corner-button claim-button' id='submit' type='submit' name='claim' value='SUBMIT' style='font-size:19px;font-weight:bold;width:130px;height:38px;color:white;background-color:#77B800'/></center>											
						</td>
					</tr>
				</table>
			</form>

					</div>
				</div>
		</div>
    	";
    	return $data;
    }
    
    function freeNewsLetterThankyou($firstname){
$data="
				<div style='margin-left:250px;margin-top:140px;color:#005AA2;font-family:tahoma;font-size:22pt;'>
					<center>Thank you for your submission</center>
				</div>
				<div style='color:#84BD00;font-family:arial;font-size:14pt;margin-left:250px'>
					<center>Your details have been verified successfully</center>
				</div>
				<div class='my-news-letter2' style='margin-left:350px;margin-top:40px;padding-left:10px;float:left '></div>
				<div style='float:left;margin-top:-240px;margin-left:50px'>
					<div style='font-size:14px;margin-left:550px;width:290px'>
						<div style='float:left;font-family:arial;color:#59595b;padding-top:20px'>Full Name:</div>
						<div style='float:left;font-family:arial;color:#59595b;padding-top:20px'><b> &nbsp; ". $firstname ." ".$_SESSION['lastname']."</b></div>
						<div style='clear:both'></div>
						<div style='float:left;font-family:arial;color:#59595b;padding-top:20px'>Email:</div>
						<div style='float:left;font-family:arial;color:#59595b;padding-top:20px'><b> &nbsp; ". $_SESSION['email']."</b></div>
						<div style='clear:both'></div>
						<div style='float:left;font-family:arial;color:#59595b;padding-top:20px'>Contact No:</div>
						<div style='float:left;font-family:arial;color:#59595b;padding-top:20px'><b> &nbsp; ". $_SESSION['phone']."</b></div>
						<div style='clear:both'></div>
						<div style='float:left;font-family:arial;color:#59595b;padding-top:20px'>Home Address:</div>
						<div style='float:left;font-family:arial;color:#59595b;padding-top:20px'><b> &nbsp; ". $_SESSION['home_office']."</b></div>
						<div style='clear:both'></div>
						<div style='float:left;font-family:arial;color:#59595b;padding-top:20px'>Suburb:</div>
						<div style='float:left;font-family:arial;color:#59595b;padding-top:20px'><b> &nbsp; ". $_SESSION['suburb']."</b></div>
						<div style='clear:both'></div>
						<div style='float:left;font-family:arial;color:#59595b;padding-top:20px'>State:</div>
						<div style='float:left;font-family:arial;color:#59595b;padding-top:20px'><b> &nbsp; ". $_SESSION['state']."</b></div>
						<div style='clear:both'></div>
						<div style='float:left;font-family:arial;color:#59595b;padding-top:20px'>Postcode:</div>
						<div style='float:left;font-family:arial;color:#59595b;padding-top:20px'><b> &nbsp; ". $_SESSION['postal_code']."</b></div>
						</div>
				</div>
				<iframe frameBorder='0' width='0' height='0' src='http://craftmatic.com.au/data_server/news-letter-download.php'></iframe>
    	";
    	return $data;
    }
    
    function freeSleepReport(){
    	$data="
<div style='margin-left:auto;margin-right:auto;width:1000px;margin-top:10px;'>
				<div style='color:#005AA2;text-align:center' class='header-standard'>
					Claim Your FREE Sleep Report
				</div>
				<div style='color:#84BD00;text-align:center;font-size:18pt;font-family:arial;margin-top:1px;'>
					<?php //'Good Beds for Bad Backs – A Guide to Better Sleep' Sign up for a Free Sleep Report. ?>
					'Good Beds for Bad Backs – A Guide to Better Sleep'
				</div>				
				<br />	
		</div>
		<div class='body-standard' style='color:#414241;margin-left:auto;margin-right:auto;width:900px;'>
			<div style='float:left'>
				What Is Included In This Report?
			</div>
			<div style='clear:both'></div>
			<div style='margin-top:10px;'></div>
			<div style='float:left' class='check-box'></div>
			<div style='float:left;margin-left:10px;'> Remarkable statistics on lower back pain sufferers</div>
			<div style='clear:both'></div>
			<div style='margin-top:5px;'></div>
			<div style='float:left' class='check-box'></div>
			<div style='float:left;margin-left:10px;'> The effects of firm and soft mattresses on your health</div>
			<div style='clear:both'></div>
			<div style='margin-top:5px;'></div>
			<div style='float:left' class='check-box'></div>
			<div style='float:left;margin-left:10px;'> The problems associated with flat beds</div>
			<div style='clear:both'></div>
			<div style='margin-top:5px;'></div>
			<div style='float:left' class='check-box'></div>
			<div style='float:left;margin-left:10px;'> How an adjustable bed may solve many health issues</div>	
			<div style='clear:both'></div>	
			<div style='float:left;margin-left:10px;'> 			
				<div class='free-sleep-pdf-old-nagler' style='margin-top:30px;float:left;'>
					<div class='body-standard' style='margin-left:100px;margin-top:300px;width:390px;'>'Good Beds for Bad Backs – A Guide to Better Sleep' by Dr. Willibald Nagler</div>
				</div>
			</div>		
		<div class='corner' style='float:left;margin-top:-500px;margin-left:500px;'>
<form class='corner' style='padding:20px;border:1px solid grey;margin-left:-18px;width:304px;background-color:#fffcdd' id='sleep-report-formx' action=''>	
				<div style='padding-bottom:15px;width:240px;text-align:center;margin-left:32px;'>
					Please enter your details below and click SUBMIT button
				</div>
				
				<table cellpadding=0 cellspacing=0 border=0>
					<input id='case_subject' type='hidden' name='case_subject' value=3 />
						<tr>
							<td>								
								<div style='float:left'>
									<div id='firstname-label' class='input-label'>First Name:</div>
									<div><input style='width:140px;' id='firstname' type='text' name='firstname' /></div>
								</div>
								<div style='float:left'>
									<div id='lastname-label' class='input-label' style='margin-left:10px;'>Last Name:</div>
									<div><input style='margin-left:10px;width:140px;' id='lastname' type='text' name='lastname' /></div>
								</div>
								<div style='clear:both'></div>
								<div style='margin-top:3px;'></div>
								<div style='float:left'>
									<div id='email-label' class='input-label'>Email:</div>
									<div><input style='width:295px;' id='email' type='text' name='email' /></div>
								</div>
								<div style='clear:both'></div>
								<div style='margin-top:3px;'></div>
								<div style='float:left;'>
									<div id='phone-label' class='input-label'>Phone:</div>
									<div><input style='margin-left:0px;width:140px' maxlength='10' id='phone' type='text' name='phone' /></div>
								</div>
								<div style='float:left;'>
									<div id='postcode-label' style='margin-left:10px;' class='input-label'>Postcode:</div>
									<div><input style='margin-left:10px;width:140px' id='postal_code' type='text' name='postal_code' /></div>
									
								</div>
								<div style='clear:both'></div>
								<div style='margin-top:3px;'></div>
									<div style='float:left'>
										<div id='homeaddress-label' class='input-label'>Home Address:</div>
										<div><input style='width:295px;' id='home_office' type='text' name='home_office' /></div>
									</div>
								<div style='clear:both'></div>
								<div style='margin-top:15px;'></div>
									<div id='suburb-change' style='float:left'>
										<div style='float:left'>
											<input style='width:140px;' onclick='this.value='';' onfocus='this.select()' onblur='this.value=!this.value?' Suburb':this.value;' id='suburb' type='text' name='suburb' value=' Suburb' disabled='disabled'/>											
										</div>
										<div style='float:left'>
											<input style='margin-left:10px;width:140px;' onclick='this.value='';' onfocus='this.select()' onblur='this.value=!this.value?' State':this.value;' id='state' type='text' name='state' value=' State' disabled='disabled'/>
										</div>
									</div>
								<div style='clear:both'></div>
								<div style='margin-left:10px;font-family:arial;font-size:10pt'>
									<div style='margin-top:10px;'></div>
									<div style='text-align:center;margin-left:-18px;float:left;width:300px;font-size:8pt;' >												
										We respect your <a href='#privacy' name='modal' style='text-decoration: none; '>Privacy</a>
									</div>
									<div style='margin-top:10px;'></div>

								</div>
									<div style='clear:both'></div>
								<div style='padding-top:25px;'></div><center><input class='corner-button claim-button' id='submit' type='submit' name='claim' value='SUBMIT' style='font-size:19px;font-weight:bold;width:130px;height:38px;color:white;background-color:#77B800'/></center>											
						</td>
					</tr>
				</table>
			</form>
		</div>			
		</div>
    	";
    	return $data;
    }
    
    function freeSleepReportThankyou( $firstname ){
    	$data="
				<div style='margin-left:250px;margin-top:140px;color:#005AA2;font-family:tahoma;font-size:22pt;'>
					<center>Thank you for your submission</center>
				</div>
				<div style='color:#84BD00;font-family:arial;font-size:14pt;margin-left:250px'>
					<center>Your details have been verified successfully</center>
				</div>
				<div class='free-sleep-pdf' style='margin-left:300px;margin-top:40px;padding-left:10px;float:left '></div>
				<div style='float:left;margin-top:-250px;margin-left:50px'>
					<div style='font-size:14px;margin-left:550px;width:290px'>
						<div style='float:left;font-family:arial;color:#59595b;padding-top:20px'>Full Name:</div>
						<div style='float:left;font-family:arial;color:#59595b;padding-top:20px'><b> &nbsp; ". $firstname ." ".$_SESSION['lastname']."</b></div>
						<div style='clear:both'></div>
						<div style='float:left;font-family:arial;color:#59595b;padding-top:20px'>Email:</div>
						<div style='float:left;font-family:arial;color:#59595b;padding-top:20px'><b> &nbsp; ". $_SESSION['email']."</b></div>
						<div style='clear:both'></div>
						<div style='float:left;font-family:arial;color:#59595b;padding-top:20px'>Contact No:</div>
						<div style='float:left;font-family:arial;color:#59595b;padding-top:20px'><b> &nbsp; ". $_SESSION['phone']."</b></div>
						<div style='clear:both'></div>
						<div style='float:left;font-family:arial;color:#59595b;padding-top:20px'>Home Address:</div>
						<div style='float:left;font-family:arial;color:#59595b;padding-top:20px'><b> &nbsp; ". $_SESSION['home_office']."</b></div>
						<div style='clear:both'></div>
						<div style='float:left;font-family:arial;color:#59595b;padding-top:20px'>Suburb:</div>
						<div style='float:left;font-family:arial;color:#59595b;padding-top:20px'><b> &nbsp; ". $_SESSION['suburb']."</b></div>
						<div style='clear:both'></div>
						<div style='float:left;font-family:arial;color:#59595b;padding-top:20px'>State:</div>
						<div style='float:left;font-family:arial;color:#59595b;padding-top:20px'><b> &nbsp; ". $_SESSION['state']."</b></div>
						<div style='clear:both'></div>
						<div style='float:left;font-family:arial;color:#59595b;padding-top:20px'>Postcode:</div>
						<div style='float:left;font-family:arial;color:#59595b;padding-top:20px'><b> &nbsp; ". $_SESSION['postal_code']."</b></div>
						</div>
				</div>
				<iframe frameBorder='0' width='0' height='0' src='http://craftmatic.com.au/data_server/downloads.php'></iframe>
    	";
    	return $data;
    }

    function headerLogoOne(){
		$data="
            <div style='margin-left:auto;margin-right:auto;width:1000px;'>
    		    <div class='logo'></div>
 
						<div style='background-color:#f7fbfe;float:left;margin-left:20px;color:#000000;font-size:14px;height:145px;width:528px;margin-top:10px;border: 1px solid rgb(117, 165, 203);' class='corner's>
							<div style='float:left;width:300px;margin-left:20px;margin-top:10px;'>
								Because rest is the best medicine
								please phone now and schedule
								your no obligation, *in-home sales
								presentation of the World's most
								popular, therapeutic, adjustable
								massage bed - over 1 million sold...
								<br />
								<a style='font-weight:bold;text-decoration:none;color:#005aa1' href='http://".$_SERVER['SERVER_NAME']."/forms/free-pillow/'>*Receive a FREE premium quality pillow</a>
							</div>
					    	<div>
								<a href='contact-us' style='margin-top:-130px;margin-left:330px;text-decoration:none;float:left'><div class='rep'></div></a>
							</div>
						</div>
		
    		<!--div style='z-index:2; position:absolute; height: 150px; opacity: 0.6; width: 520px; position: absolute; margin-left: 480px; background-color:#f7fbfe; margin-top: 10px; border: 1px solid rgb(117, 165, 203); ' class='corner'>
    		</div-->
            <!--div style='margin-top:10px;z-index:10;font-family:arial;position:absolute;margin-left:487px;'>
            		<div style='float:left'>				
					
					<div style='margin-left:10px;color:#000000;font-size:14px;width:280px;margin-top:10px;'>
						Because rest is the best medicine
						please phone now and schedule
						your no obligation, *in-home sales
						presentation of the World's most
						popular, therapeutic, adjustable
						massage bed - over 1 million sold...
						<br />
					</div>
					
					<div style='margin-left:8px;color:#005aa1;font-weight:bold'>
					<a style='text-decoration:none;color:#005aa1' href='http://".$_SERVER['SERVER_NAME']."/forms/free-pillow/'>*Receive a FREE premium quality pillow</a>
					</div>
					</div>
					
					<div style='float:left;margin-left:10px;margin-top:10px;'>
						<a href='contact-us' style='text-decoration:none'><div class='rep'></div></a>
					</div>
            </div-->
            </div>
            <div class='clear'></div>    		
    	";
		
		return $data;
    }
    
    
    function headerLogoTwo(){
        $data="
			<div style='margin-left:auto;margin-right:auto;width:1000px;'>
				<a href='http://".$_SERVER['SERVER_NAME']."'><div id='home' class='logo'></div></a>
				<a href='http://".$_SERVER['SERVER_NAME']."/forms/free-sleep-report/'><div class='bed'></div></a>
				<div style='position:relative'><a href='http://".$_SERVER['SERVER_NAME']."/contact-us' style='text-decoration:none'><div class='call'></div></a></div>
			</div>
        ";
        return $data;    		
    }
    
    function headerLogoThree(){
        $data="
			<div style='margin-left:auto;margin-right:auto;width:1000px;'>
				<div style='margin-left:20px;'>
				<a href='http://craftmatic.com.au'>
					<div id='home' class='logo-form'></div>
				</a>
			</div>    
        ";
        return $data;    		
    }
    
    function homeFooterMenu(){
    	$data="
              <div class='text' style='width:1000px;margin-top:15px;margin-left:-1px;margin-right:10px'>
					<div style='float:left'> 
						<div class='reason' style='width:320px;margin-right:20px'>
							<div class='green-corner' style='color:white;background-color:#77B800;height:60px;'>
							<h2 style='font-weight:normal;margin-top:-1px;'><a href='blog-show-more' style='text-decoration:none;color:white'><center style='font-size:15pt;font-family:tahoma;padding-top:-100px'>Benefits of a <br />Craftmatic Adjustable Bed</center></a></h2></div>								<div  style='color:#414241;background-color:#ffffff;height:245px;'>
								<table style='font-family:arial;margin-left:12px' cellpadding=0 cellspacing=0 border=0>
									<tr><td class='check-height'></td></tr>
									<tr>
										<td><div class='check-box'></div></td>
										<td style='width:5px;'></td>
										<td><a href='craftmatic-blog/how-to-sleep-better-and-longer/' style='text-decoration:none;color:#000000'>Better Sleep<a></td>
									</tr>
									<tr><td class='check-height'></td></tr>
									<tr>
										<td><div class='check-box'></div></td>
										<td> </td>
										<td style='width:240px;'><a href='craftmatic-blog/reduce-your-pain-with-an-adjustable-bed' style='text-decoration:none;color:#000000'>Reduced Aches and Pains</a></td>
									</tr>
									<tr><td class='check-height'></td></tr>
									<tr>
										<td><div class='check-box'></div></td>
										<td> </td>
										<td style='width:230px;'><a href='relieve-lower-back-pain-with-heated-mattress' style='text-decoration:none;color:#000000'>Soothing Massage</a></td>
									</tr>
									<tr><td class='check-height'></td></tr>
									<tr>
										<td><div class='check-box'></div></td>
										<td> </td>
										<td style='width:230px;'><a href='health-and-sleep-related-infographics' style='text-decoration:none;color:#000000'>Prevents Sleeping Disorder</a></td>
									</tr>
									<tr><td class='check-height'></td></tr>
								</table>
								<div style='margin-left:40px;margin-top:4px'><a href='10-tips-for-a-good-nights-sleep' style='font-family:arial;text-decoration:none;color:#005AA2;font-weight:bold;margin-left:170px;font-size:10pt'>Learn More >></a></div>
								<br />
							</div>
						</div>
					</div>
					<div style='float:left'> 
						<div class='reason' style='width:320px;margin-right:20px'>
							<div class='green-corner' style='color:white;background-color:#77B800;height:60px;'>
							<h2 style='font-weight:normal;margin-top:-1px;'><a href ='products' style='text-decoration:none;color:white'><center style='font-size:15pt;font-family:tahoma;padding-top:0px'>Features of a <br />Crafmatic Adjustable Bed</a></h2></center></div>
								<div  style='color:#414241;background-color:#ffffff;height:245px;'>
								<table style='font-family:arial;margin-left:12px' cellpadding=0 cellspacing=0 border=0>
									<tr><td class='check-height'></td></tr>
									<tr>
										<td><div class='check-box'></div></td>
										<td style='width:5px;'></td>
										<td><a href='http://".$_SERVER['SERVER_NAME']."/adjustable-beds/' style='text-decoration:none;color:#000000'>Three Unique Models<a></td>
									</tr>
									<tr><td class='check-height'></td></tr>
									<tr>
										<td><div class='check-box'></div></td>
										<td> </td>
										<td style='width:240px;'><a href='http://".$_SERVER['SERVER_NAME']."/adjustable-beds/' style='text-decoration:none;color:#000000'>Range of Sizes and Features</a></td>
									</tr>
									<tr><td class='check-height'></td></tr>
									<tr>
										<td><div class='check-box'></div></td>
										<td> </td>
										<td style='width:230px;'><a href='http://".$_SERVER['SERVER_NAME']."/adjustable-beds/' style='text-decoration:none;color:#000000'>Warranties Available</a></td>
									</tr>
									<tr><td class='check-height'></td></tr>
									<tr>
										<td><div class='check-box'></div></td>
										<td> </td>
										<td style='width:230px;'><a href='http://".$_SERVER['SERVER_NAME']."/adjustable-beds/' style='text-decoration:none;color:#000000'>Next Day Delivery (Metro Areas)</a></td>
									</tr>
									<tr><td class='check-height'></td></tr>
								</table>
								<div style='margin-left:40px;margin-top:4px'><a href='http://".$_SERVER['SERVER_NAME']."/adjustable-beds/' style='font-family:arial;text-decoration:none;color:#005AA2;font-weight:bold;margin-left:170px;font-size:10pt'>Learn More >></a></div>
								<br />
							</div>
						</div>
					</div>
					<div style='float:left'> 
						<div class='reason' style='width:320px;'>
							<div class='green-corner' style='color:white;background-color:#77B800;height:60px;'><div style='position:relative'><div class='whatsnew-icon'></div></div><h2 style='font-weight:normal;margin-top:-1px;'><a href='promos-events' style='text-decoration:none;color:white'><center style='font-family:tahoma;font-size:15pt;padding-top:17px;margin-left:60px;'>Promotions</center></a></h2></div>
							<div  style='background-color:#ffffff'>
								<table cellpadding=0 cellspacing=0 border=0>
									<tr>
										<td id='winabed'><div style='margin-left:20px;font-size:14pt;font-family:arial;text-decoration:none;'>Win A Bed</div><div style='position:relative'><div  class='wab2'></div></div></td>
									</tr>	
									<tr>
										<td style='border-top:2px solid gray;width:200px;'></td>
									</tr>
									<tr>
										<td id='news'><div style='margin-left:20px;font-size:14pt;font-family:arial;text-decoration:none;'>Join Our Newsletter</div><div style='position:relative'><div  class='news_letter_1'></div></div></td>
									</tr>
									<tr>
										<td style='border-top:2px solid gray;width:200px;'></td>
									</tr>	
									<tr>
										<td id='pillow'><div style='margin-left:20px;font-size:14pt;font-family:arial;text-decoration:none;'>Get A Free Pillow</div><div style='position:relative'><div  class='pillow_1'></div></div></td>
									</tr>							
								</table>
							</div>
						</div>
					</div>
			</div>";
	return $data;
    }
    
    function ourPartners(){
    	$data="
				<div class='reason' style='float:left; margin-left:-30px;margin-top:30px;width:232px;font-size:16px;'>
					<div class='green-corner' style='color:white;background-color:#77B800;height:40px;'><center style='padding-top:10px;font-size:15pt;padding-top:5px;font-family:tahoma'>Our Partners</center></div>
					<div  style='background-color:#FDFBFB;height:80px' class='reason'>
						<a href='http://www.venergyaustralia.com.au' target='_new'><div class='venergy'></div></a>
						<a href='http://www.asaps.com.au' target='_new'><div class='onmedia'></div></a>
						<a href='http://www.fabcleaning.com.au' target='_new'><div class='fab-icon'></div></a>
					</div>
				</div>    	
    	";
    	return $data;
    }
    
    
    function lightBox(){
    	$data="
<div id='boxes'>

	<div id='privacy' class='window' style='overflow:auto;' >
	<div style='text-align: right; '>
		<a href='#' class='close' style='text-decoration: none; color: red; font-family: arial; '>Close it</a>
	</div>
<div class='header-standard' style='color:orange;text-align:center'>Personal Information Management Policy</div>
<br />
<div class='body-standard'>
<b style='color:orange'>1.</b>
Introduction
<br /><br />
Craftmatic Pty Ltd (“Craftmatic”) abides by your rights to privacy in accordance with the National Privacy Principles(“NPP”) contained in the Privacy Act 1988 (Cth). 
<br /><br />
This policy describes how Craftmatic manages personal information we may have about you.
<br /><br />
<b style='color:orange'>2.</b>
Personal information Craftmatic may hold about you?
<br /><br />
-Your name, phone number, address, email, sex<br />
-Your age range, marital status, employment status, house status<br />
-Your attitude towards health<br />
-Your feelings towards comfort

<br /><br />
Craftmatic does not collect other sensitive information about you without your consent, such as 
personal information about your race or political opinion etc. 

<br /><br />
Craftmatic will store information collected about you securely and access will only be
allowed to those authorised and then only for the purpose for which it was collected. 
Craftmatic will delete from its records personal information no longer required or in use for
the purpose listed in paragraph 3 below other than information, which we are required to retain. 
If at all possible such information will be retained in a way that you can not be identified.

<br /><br />
Craftmatic will, if at all possible, collect information it holds on you directly from you but 
it may on some occasions be collected from other sources, some of which you may be unaware of, including:
<br /><br />
-Marketing Lists
<br /><br />
<b style='color:orange'>3.</b>
What does Craftmatic do with my personal information?
<br /><br />
Craftmatic collects information at different times which may be used for one or more of a variety of purposes depending on how the data was collected and what material was used to collect it including: 
<br /><br />
-Help us meet the health and comfort requirements of consumers;<br />
-Provide your details to companies with products or services that you may interest you;<br />
-Use the information to provide you with a booklet, pamphlet etc for completing a survey; and<br />
-Contact you regarding more information about our products<br />
<br />
<b style='color:orange'>4.</b>
Access
<br /><br />
You may request access to your personal information that Craftmatic holds about you by writing to the “Privacy/Compliance Officer” 
at the address below. In your request you are required to detail your name, contact details, your former name or alias if any and the 
information you believe Craftmatic may hold on you. You do not have to provide a reason for requesting access. Where Craftmatic holds 
information that you are entitled to access we will provide you with access to this information by mail or email. Craftmatic will 
acknowledge receipt of your request within 7 days and will have its best effort to respond to your request within 30 days. 
Craftmatic reserves the right to charge a reasonable fee in order to provide this information to you. 
<br /><br />

If you believe that personal information Craftmatic hold about you is incorrect, incomplete or inaccurate, 
then you may request we amend it. We will consider your request for amendment and amend if required. 
If Craftmatic does not agree that there are grounds for amendment, then we will notify you of this and 
add a note to the personal information we hold stating that you disagree with it. 
<br /><br />

Any questions about this policy, or any complaint regarding treatment of your privacy by Craftmatic should be 
made in writing to the address below.
<br /><br />

Our contact details are as follows:
<br /><br />
Craftmatic Pty Ltd<br />
PO Box 137<br />
Woodville SA 5011<br />
Fax : 08 8243 5888<br />
Email: legal@craftmatic.com.au<br /><br />

Craftmatic may change this policy from time to time. Although we intend to observe this policy at all times, it is not legally binding on Craftmatic in any way.
</div>
	</div>

<div id='dialog' class='window' style='overflow:auto;' >
<div style='text-align:right'><a href='#'class='close' style='text-decoration:none;color:red;font-family:arial'/>Close it</a></div>
<div class='header-standard'><div style='padding-left:150px;color:#005AA2;float:left'>'WIN-A-BED' </div> <div style='float:left;color:orange'> &nbsp; Terms and Conditions</div></div>
<div style='clear:both'></div>
<div class='body-standard'>
<br />
<b style='color:orange'>1.</b>
TERMS AND CONDITIONS (OF WHICH INSTRUCTIONS FORM PART) 1 The Win-a-Bed draws take place every 90 days at 12:00pm. The commencement and closing dates are as follows:
<br /><br />
<center>
	<table border=1 cellpadding=0 cellspacing=0 width='600'>
		<tr>
			<td>Commencement date</td><td>15/02/12</td><td>15/05/12</td><td>13/08/12</td><td>11/11/12</td>
		</tr>
		<tr>
			<td>Close date</td><td>14/05/12</td><td>12/08/12</td><td>10/11/12</td><td>08/02/13</td>
		</tr>
		<tr>
			<td>Draw date</td><td>17/05/12</td><td>15/08/12</td><td>13/11/12</td><td>11/02/13</td>
		</tr>
		<tr>
			<td>Publication Date</td><td>22/05/12</td><td>20/08/12</td><td>18/11/12</td><td>16/02/13</td>
		</tr>
	</table>
</center>
<br /><br />
<b style='color:orange'>2.</b>
Each valid entry received will be entered for 1 chance in the next draw. There are 4 draws a year.
<br /><br />
<b style='color:orange'>3.</b>
By returning this direct mail piece in the reply paid envelope provided to GPO Box 2697 Adelaide SA 5000, you will confirm 
your entry into the Win-A-Bed draw. People may also enter the Win-A-Bed draw trough various other promotional material posted, 
advertised and brodcasts by Craftmatic throughout the year.
<br /><br />
<b style='color:orange'>4.</b>
Each draw has one bed prize up to a total value of $1,550.00.
<br /><br />
<b style='color:orange'>5.</b>
To qualify for the most current drawing, all entries must be in 3 working days before the 90 day draw period.
<br /><br />
<b style='color:orange'>6.</b>
No liability can be accepted for entries lost, damaged or delayed in the post.
<br /><br />
<b style='color:orange'>7.</b>
Proof of posting is no proof of receipt.
<br /><br />
<b style='color:orange'>8.</b>
The promoter is Craftmatic Pty Ltd ABN 93 108 312 983.
<br /><br />
<b style='color:orange'>9.</b>
Only one entry per household
<br /><br />
<b style='color:orange'>10.</b>
No correspondence will be entered into other than with the winner
<br /><br />
<b style='color:orange'>11.</b>
The winner will be the first correctly completed entry (to include daytime contact phone number) selected at 
random from all entries received.
<br /><br />
<b style='color:orange'>12.</b>
In the event of an unclaimed prize a redraw will be held at 12.00pm on 17/05/12 at Craftmatic Pty Ltd 701 Port Road Woodville SA 5011.
<br /><br />
<b style='color:orange'>13.</b>
The promoter is not responsible for any printing, production, typographical, transmission or other errors or failures.
<br /><br />
<b style='color:orange'>14.</b>
The FREE win a bed offer is open to Australian residents excluding all employees of Craftmatic Pty Ltd., their agents or anyone connected with the offer.
<br /><br />
<b style='color:orange'>15.</b>
From time to time we may make your details available to companies with products or services that may interest you. [ ] Tick here if you do not want your name and address to be disclosed.
<br /><br />
<b style='color:orange'>16.</b>
Winners may at their option receive $1,200.00 cash in lieu of the prize.
<br /><br />
<b style='color:orange'>17.</b>
The minimum prize value is $1,200.00 for the cash prize.
<br /><br />
<b style='color:orange'>18.</b>
Craftmatic can be contacted on 1800 886 168.
<br /><br />
<b style='color:orange'>19.</b> 
No purchase is necessary.
<br /><br />
<b style='color:orange'>20.</b> The price winner will be notified by phone and in writing.
<br /><br />
<b style='color:orange'>21.</b>
Promoter's decision is final and binding.
<br /><br />
<b style='color:orange'>22.</b>
The draw will take place at Craftmatic Pty Ltd 701 Port Road Woodville SA 5011.
<br /><br />
<b style='color:orange'>23.</b>
The winner will be published in the Australian newspaper announcement section on these dates: For draw 19.05.11 on 24.05.11, for draw 18.08.11 on 23.08.11, for draw 18.11.11 on 23.11.11, for draw 17.02.12 on 22.02.12. 
Permit No ACT TP 10/05384.1  NSW PERMIT NUMBER: LTPS-10-12598                                           AUHB2011.2      160310 
<br /><br />

<div class='header-standard'><div style='padding-left:80px;color:#005AA2;float:left'>QUALITY ASSURANCE:</div><div style='float:left;color:orange'> &nbsp; Terms and Conditions</div></div>
<div style='clear:both'></div>
<br />
<b style='color:orange'>1.</b>
The Quality Assurance draw takes place on the first day of each month at 12pm commencing on the 1st of April 2010 and 
ending on the 31st of March 2011.
<br /><br />
<b style='color:orange'>2.</b>
Each valid entry received will be entered for 1 chance in the next draw. There are 12 draws a year and the last draw will 
take place on 1st April 2011.
<br /><br />
<b style='color:orange'>3.</b>
By returning this survey response in the reply paid envelope provided to GPO Box 2697 Adelaide SA 5001, you will confirm 
your entry into the Quality Assurance draw.
<br /><br />
<b style='color:orange'>4.</b>
Each draw has one prize up to a total value of $100.00.
<br /><br />
<b style='color:orange'>5.</b>
To qualify for the most current draw, all entries must be in 3 working days before the first day of each month.
<br /><br />
<b style='color:orange'>6.</b>
No liability can be accepted for entries lost, damaged or delayed in the post.
<br /><br />
<b style='color:orange'>7.</b>
Proof of posting is no proof of receipt.
<br /><br />
<b style='color:orange'>8.</b>
The promoter is Craftmatic Pty Ltd ABN 93 108 312 983
<br /><br />
<b style='color:orange'>9.</b>
Only one entry per household.
<br /><br />
<b style='color:orange'>10.</b>
No correspondence will be entered into other than with the winner.
<br /><br />
<b style='color:orange'>11.</b>
The winner will be the first correctly completed entry (to include daytime contact phone number) selected at random from all entries received.
<br /><br />
<b style='color:orange'>12.</b>
In the event of an unclaimed price a redraw will be held at 12:00pm on 1st of July 2011 at Craftmatic Pty Ltd 701 Port Road Woodville SA 5011.
<br /><br />
<b style='color:orange'>13.</b>
The promoter is not responsible for printing, production, typographical, transmission, or other errors or failures
<br /><br />
<b style='color:orange'>14.</b>
This offer is open to all Australian residents who have returned a Craftmatic Quality Assurance Questionnaire.
<br /><br />
<b style='color:orange'>15.</b>
The prize is for one Coles Group & Myer Gift Car valued at $100
<br /><br />
<b style='color:orange'>16.</b>
The prize winner will be notified by phone and in writing
<br /><br />
<b style='color:orange'>17.</b>
Promoter’s decision is final and binding.
<br /><br />
<b style='color:orange'>18.</b>
The draw will take place at Craftmatic Pty Ltd 701 Port Road Woodville SA 5011
</div>


</div>
  <!-- Mask to cover the whole screen -->
  <div id='mask'></div>
  <!--div id='result'-->
  <!--div id='xxpromo'>

  </div-->
        <!--div id='loadpromo' style='position:absolute;z-index:9000;margin-left:400px;margin-top:100px'>
	  		<div style='margin-left:690px;margin-top:90px;'> 
	  			<div class='closez'></div>  			
	  		</div>
	  		<div id='wabTransfer' style='margin-top:100px;margin-left:0px; height:600px;width:700px;'></div>
	  	</div-->  
  <!--/div-->
    	";
    	return $data;
    }
    
    function homeArticle(){
		$data="
				<div style='clear:both'></div>
						<div  style='margin-top:20px;margin-left:10px;line-height:1.5;width:980px;color:#414241;background-color:#F3F9E5; font-family:arial;text-align:left'  class='corner text' style='width:963px;text-align:center;background-color:#F3F9E5'><div style='margin-left:40px;margin-right:40px'><br />
							<div  style='text-align:center;color:#005AA2;font-size:22pt;font-family:tahoma;margin-top:-10px;'>Adjust Your Bed to Suit Your Individual Needs!</div>
							<div style='margin-top:10px;font-size:12pt;'></div>
							A <b>Craftmatic Adjustable Bed</b> lets you effortlessly and automatically elevate your upper body, legs, and feet into your most 
							comfortable sleeping position. It supports your spine and reduces strain on your neck during sleep. With easy access hand
							control, a Craftmatic bed provides a higher level of relaxation than any flat bed ever could.
							<br /> 
							<br />
							
							After reading a book or catching the late evening news, simply turn on the bed's soothing built-in massage options. 
							Craftmatic electronic beds promote restful sleep, comfort, relaxation, and wellness. 
							From your very first request for information until the day a Craftmatic adjustable bed is placed in your 
							bedroom and beyond, we will continually provide you a pleasant and rewarding experience with our sleep solutions. 
							<a href='http://".$_SERVER['SERVER_NAME']."/craftmatic_blog/reduce-your-pain-with-an-adjustable-bed/' class='read-more'><b>Learn More >></b></a>

							<br />
							<br />
						</div>
				</div>		
		";    	
		return $data;
    }
    
    function recentPost(){
		$data = "
                <div class='reason bottom-corner' style='margin-left:-30px;margin-top:40px;width:232px;font-size:15pt; font-family:tahoma'>
					<div class='green-corner' style='color:white;background-color:#77B800;height:40px;'><center style='padding-top:5px'> <div class='blog-logo-module'></div><div style='float:left;margin-left:10px;'>Recent Post</div></center></div>	
						<div  style='background-color:#FDFBFB;height:120px' >
							<div style='margin-left:100px;width:100px'>
								<div style='margin-top:20px;clear:both'>
									<div class='bullet-icon' style='margin-left:-80px;'></div>
									<div class='posts' style='float:left;font-size:10.5pt;margin-left:-65px;margin-top:-7px'>
										<a href='http://".$_SERVER['SERVER_NAME']."/craftmatic_blog/how-to-sleep-better-and-longer/' style='text-decoration:none' >How to Sleep Better ...</a>
									</div>
								</div>
								<div style='padding-top:10px'></div>
								<div style='margin-top:20px;'>
									<div class='bullet-icon' style='margin-left:-80px;'></div>
									<div class='posts' style='float:left;font-size:10.5pt;margin-left:-65px;margin-top:-7px'>
										<a href='http://".$_SERVER['SERVER_NAME']."/craftmatic_blog/reduce-your-pain-with-an-adjustable-bed/' style='text-decoration:none'>Reduce Your Pain With ...</a>
									</div>
								</div>
								<div style='padding-top:10px'></div>
								<div style='margin-top:20px;'>
									<div class='bullet-icon' style='margin-left:-80px;'></div>
									<div class='posts' style='float:left;font-size:10.5pt;margin-left:-65px;margin-top:-7px'>
										<a href='http://".$_SERVER['SERVER_NAME']."/craftmatic_blog/10-tips-for-a-good-nights-sleep/' style='text-decoration:none'>Craftmatic Bed: Benefits ...</a>
									</div>
							</div>
						</div>
					</div>
				</div>		
		";
    	return $data;		
    }
    
    function adjustFontSize(){
    	/*
    	$data="
    
    	<div style='margin-top:0px;margin-left:auto;margin-right:auto;width:1000px;'>
    	<div style='margin-left:1020px;'>
    		<div id='menu' style='padding:10px;position:absolute;margin-top:8px;text-align:right;'>Adjust Font Size <br />
    			<a class='increaseFont' style='border:1px solid gray;'>A+</a>
  			    <a class='decreaseFont' style='border:1px solid gray'>A-</a>  
    			<a class='resetFont'style='border:1px solid gray'>A</a>
    		</div>
    	</div>
    	</div>
    	";
    	
    	return $data;
		 * 
		 */
		 $data = "
    	 <div style='margin-top:0px;margin-left:auto;margin-right:auto;width:1000px;'>
    	 <div style='margin-left:-150px;'>
    	 <div id='menu' style='padding:10px;position:absolute;margin-top:15px;text-align:right;'>Text Size<br />
    	 	<div style='border:1px solid gray; ' class='corner'>
    	 		<center>
		 			<b><a style='font-size:17pt;text-decoration:none' id='add' href='#'>+</a></b>
		 			
		 			<b><a style='font-size:17pt;margin-left:10px;text-decoration:none' id='minus' href='#' >-</a></b>
		 		</center>
		 	</div>
		 </div> 
		 <a href='about'><div class='certify2' style='margin-left:90px;margin-top:30px;position:absolute'></div></div></a>	
		 </div>
    	 </div>
		 ";
		 
		 return $data;
    }
    
    function timer(){
        $data=" 
				<div class='timer'>
						<div id='countdown_dashboard' style='color:white;margin-left:14px;padding-top:35px;font-family: arial;font-weight:bold'>
							<div class='dash weeks_dash' style='float:left;margin-left:-2px;'>
								<div class='digit' style='font-size:20px;float:left'>0</div>
								<div class='digit' style='font-size:20px;float:left'>0</div>
							</div>
							<div class='dash days_dash' style='float:left;margin-left:25px;'>
								<div class='digit' style='font-size:20px;float:left'>0</div>
								<div class='digit' style='font-size:20px;float:left'>0</div>
							</div>
							<div class='dash hours_dash'  style='float:left;margin-left:24px;'>
								<div class='digit' style='font-size:20px;float:left'>0</div>
								<div class='digit' style='font-size:20px;float:left'>0</div>
							</div>					
							<div class='dash minutes_dash' style='float:left;margin-left:23px;'>
								<div class='digit' style='font-size:20px;float:left'>0</div></td>
								<div class='digit' style='font-size:20px;float:left'>0</div></td>
							</div>
							<div class='dash seconds_dash' style='float:left;margin-left:26px;'>
								<div class='digit' style='font-size:20px;float:left'>0</div>
								<div class='digit' style='font-size:20px;float:left'>0</div>
							</div>
					</div>	 						
				</div>
	    ";
	    
	    return $data;
    }
    
    function thankYouFooter(){
    	$data="
	<div style='margin-top:310px;'></div>
	<center style='margin-top:40px;margin-left:70px;'>
		<table>	
			<tr>
				<td>
					<div class='footer-box' >
					<div class='bed-footer'>
					</div>
						<div style='clear:both'></div>
						<div style='color:#005AA2;font-size:12px;margin-top:10px;font-family:sans-serif;font-weight:bold'>
							<center>Our Craftmatic Beds Product</center>
							<br />
							<center><a href='http://".$_SERVER['SERVER_NAME']."/adjustable-beds/craftmatic-model-one/'>Model I</a></center>
							<center><a href='http://".$_SERVER['SERVER_NAME']."/adjustable-beds/craftmatic-model-two/'>Model II</a></center>
							<center><a href='http://".$_SERVER['SERVER_NAME']."/adjustable-beds/craftmatic-monaco/'>Model Monacco</a></center>
						</div>
					</div>
				</td>
				<td>
					<div class='footer-box' >
						<div class='how-it-works'>
						</div>
						<div style='clear:both'></div>
						<div style='color:#005AA2;font-size:12px;margin-top:10px;font-family:sans-serif;font-weight:bold'>
							<center>How It Works</center>
							<br />
							<center><a href='http://".$_SERVER['SERVER_NAME']."/adjustable-beds/'>Adjustablity</a></center>
							<center><a href='http://".$_SERVER['SERVER_NAME']."/adjustable-beds/'>Built in Massage</a></center>
							<center><a href='http://".$_SERVER['SERVER_NAME']."/adjustable-beds/'>Fingertips Adjustablity</a></center>
						</div>
					</div>
				</td>
				<td>
					<div class='footer-box'>
						<div class='health-info'>
						</div>
						<div style='clear:both'></div>
						<div style='color:#005AA2;font-size:12px;margin-top:10px;font-family:arial;font-weight:bold'>
							<center>Health Information</center>
							<br />				
							
							<center><a href='http://".$_SERVER['SERVER_NAME']."/craftmatic_blog/how-to-sleep-better-and-longer/'>How to Sleep ...</a></center>
							<center><a href='http://".$_SERVER['SERVER_NAME']."/craftmatic_blog/reduce-your-pain-with-an-adjustable-bed/'>Reduce Your Pain ...</a></center>
							<center><a href='http://".$_SERVER['SERVER_NAME']."/craftmatic_blog/10-tips-for-a-good-nights-sleep/'>Craftmatic ...</a></center>
						</div>
					</div>
				</td>
				<td>
					<div class='footer-box'>
						<div class='about-craftmatic'>
						</div>
						<div style='clear:both'></div>
						<div >
							<center style='color:#005AA2;font-size:12px;margin-top:10px;font-family:sans-serif;font-weight:bold'>About Craftmatic</center>
						
							<center style='font-family:arial;font-size:11px;font-weight:bold;width:170px;margin-top:20px;margin-left:12px;'>
								<a href='http://".$_SERVER['SERVER_NAME']."/about/'>
								Our aim is to have experience
								with our adjustable and electric
								beds both a plesant and rewarding one.
								</a>
							</center>
						</div>			
					</div>
				</td>
			</tr>
		</table>
	</center>";
	
	return $data;
	}
    
    function winABed(){
    	
        $data="
			<div class='sleep-report' style='border:3px solid #07316d;float:left;margin-left:-35px;margin-top:10px;width:232px;height:685px;background-color:#fffcdd'>
				<div style='margin-top:20px;'></div>
				<div style='margin-left:auto;margin:right:auto;width:200px'>
					<div style='margin-top:-15px'>
					</div>
					<div style='font-size:11.5pt;margin-left:-25px;width:220px;margin-top:0px;text-align:center;color:#004c86'>
						<b>Enter Now for Your Chance to Win A Deluxe Adjustable Bed</b> 
					</div>
					<div style='margin-left:-20px;margin-top:1px;' class='bed-form'></div>
					<div style='padding-top:145px;'>
						<form style='margin-left:-18px;' id='win-a-bed' action=''>
							<table cellpadding=0 cellspacing=0 border=0>
								<input id='case_subject' type='hidden' name='case_subject' value=1 />
									<tr>
										<td>
											<div style='float:left'>
												<div id='firstname-label' class='input-label'>First Name:</div>
												<div><input style='width:92px;' id='firstname' type='text' name='firstname' /></div>
											</div>
											<div style='float:left'>
												<div id='lastname-label' class='input-label'>Last Name:</div>
												<div><input style='width:103px;' id='lastname' type='text' name='lastname' /></div>
											</div>							
											<div style='float:left'>
												<div id='email-label' class='input-label'>Email:</div>
												<div><input style='width:200px;' id='email' type='text' name='email' /></div>
											<div style='clear:both'></div>
											<div style='float:left;'>
												<div id='phone-label' class='input-label'>Phone:</div>
												<div><input style='margin-left:0px;width:110px'  maxlength='10'  id='phone' type='text' name='phone' /></div>
											</div>
											<div style='float:left;'>
												<div id='postcode-label' class='input-label'>Postcode:</div>
												<div><input style='margin-left:0px;width:85px' onfocus='this.select()' id='postal_code' type='text' name='postal_code' /></div>
												<!--input type='text' name='post_code' id='postal_code' style='height:26px;width:103px;'-->
												<!--select name='postal_code' id='postal_code'  style='height:26px;width:103px;' >									
												<option value=' Postcode'>Postcode</option>
												<?php 
													/*
													$datapull = new Datapull();
													foreach($datapull->select_all_postcodes() as $row){
														echo '<option value='.$row.'>$row</option>';
													}*/
												?>
												</select-->
												<!--input style='width:63px' onclick='this.value='';' onfocus='this.select()' onblur='this.value=!this.value?' Postcode':this.value;' id='postal_code' type='text' name='postal_code' value=' Postcode' /-->																			
											</div>
											<div style='clear:both'></div>
												<div style='float:left'>
													<div id='homeaddress-label' class='input-label'>Home Address:</div>
													<input style='width:200px;' id='home_office' type='text' name='home_office' />
												</div>
											<div style='clear:both'></div>
												<div id='suburb-change' style='float:left'>
													<div style='float:left'>
														<input style='width:110px;' onclick='this.value='';' onfocus='this.select()' onblur='this.value=!this.value?' Suburb':this.value;' id='suburb' type='text' name='suburb' value=' Suburb' disabled='disabled'/>											
													</div>
													<div style='float:left'>
														<input style='width:85px;' onclick='this.value='';' onfocus='this.select()' onblur='this.value=!this.value?' State':this.value;' id='state' type='text' name='state' value=' State' disabled='disabled'/>
													</div>
												</div>
											<div style='clear:both'></div>
											<div style='margin-left:10px;font-family:arial;font-size:10pt'>
												<div style='margin-top:2px;'></div>
												<div style='float:left;width:180px;font-size:8pt;'>
													<div> <input style='width:10px;height:10px;' type='checkbox' name='agreement' id='agreement' value='1' />
													<div style='margin-top:-15px;margin-left:17px;' id='agreement-label'>
														I have read and understood the </div>
													<a href='#dialog' name='modal' style='text-decoration:none;padding-left:20px;'>Terms and Conditions</a></div>
													<div style='padding-left:20px;'>We respect your <a href='#privacy' name='modal' style='text-decoration:none;' >Privacy</a></div>
												</div>
											</div>
												<div style='clear:both'></div>
											<div style='padding-top:25px;'></div><center><input class='corner-button claim-button' id='submit' type='submit' name='claim' value='SUBMIT' style='font-size:19px;font-weight:bold;width:130px;height:38px;color:white;background-color:#7dbe00'/></center>											
									</td>
								</tr>
							</table>
						</form>
						<div style='width:202px;margin-top:10px;margin-left:-15px;font-weight:bold;color:#000000;line-height:20px;font-style:italic;font-size:10pt'>
							<div class='open-quote'></div>Marvelous for Bad backs! I used to have to psyche myself up to face a really 
							sharp pain every morning getting out of bed – now I don’t feel it anymore – 
							don’t know why but it’s true! &nbsp; <img src='http://craftmatic.com.au/wp-content/themes/craftmaticau2012/images/close-quote.png' />					
						</div>
						<div class='clear'></div>
						<div style='margin-top:5px;font-style:italic;color:#004C86;margin-left:-20px;font-weight:bold;font-size:10pt'>
							- Mr & Mrs Ashton, Burwood CCH
						</div>
					</div>
					<br />
				</div>
			</div>        
        ";
        
        return $data;    	
    }
    
    function winABed2(){
    	$data="
			<div style='margin-left:auto;margin-right:auto;width:1000px;margin-top:60px;'>
							<div style='font-size:23pt;color:#254b89;text-align:center;margin-top:-60px;' class='header-standard'>
								Enter Now for Your Chance to Win A Deluxe Craftmatic Adjustable Bed
							</div>
					</div>
					<!--1st row logo end-->
					<!--2nd row logo start-->
					<div class='corner' id='mechanics' style='display:none;height:400px;margin-left:auto;margin-right:auto;width:800px;margin-top:45px;background-color:#e5e3e3'>
						<div style='color:#000000;float:left;font-family:arial;margin-left:50px;width:700px;text-align:justify;margin-top:100px;'>
							<div>				
								<center>To confirm your entry, fill out our survey form.</center><br />
								<center>You may also join the raffle by calling Craftmatic toll free hotline 1800 210 330.</center><br />
								 
								<center>No purchase necessary! The prize winner will be notified by phone and in writing.</center><br />
			
								<center>This <b>Craftmatic bed promo</b> is open to Australian residents excluding all employees 
								and agents of Craftmatic Pty Ltd, or anyone connected with the offer.</center>
			
							</div> 
						</div>
					</div>
					<div class='corner' id='winner-page' style='display:none;height:400px;margin-left:auto;margin-right:auto;width:800px;margin-top:45px;background-color:#e5e3e3'>
						<div style='width:820px;'>
						<div class='blank-profile' style='float:left;padding-left:10px;margin-left:50px;margin-top:80px;'></div>
						<div style='float:left;font-family:arial;margin-left:20px;width:350px;text-align:justify;margin-top:140px;'>
							<div><center style='color:red'>Congratulations to our 2012 3rd Quarter Winners </center></div>			
							<div style='width:350px;color:#414241'>				
								<center>
									<b>Ashley Ristrom & Robyn Grace!</b><br />
									<br />  
									<b>Be one of the lucky winners of our 4th draw!</b><br /><br />
									
									<b>Enter Now for Your Chance to Win A Deluxe Adjustable Bed</b><br /><br />
								</center>
							</div> 
							</div>
						</div>
					</div>
					</div>
					<div class='corner' id='fillin' style='height:400px;margin-left:auto;margin-right:auto;width:800px;margin-top:-5px;'>
						<div class='winner-bed' style='padding-bottom:30px;padding-top:40px;float:left;margin-left:20px;margin-top:40px;'></div>
						<div style='margin-top:25px;float:left;margin-left:40px;'>
			<form class='corner' style='background-color:#fffcdd;padding:15px;border:1px solid grey;margin-left:-18px;width:304px;' id='win-a-bed' action=''>
				<div style='font-family:arial;padding-bottom:15px;width:300px;text-align:center;margin-left:0px;'>
					Please enter your details below now to register for the Win-a-Bed Competition
				</div>
				<table cellpadding=0 cellspacing=0 border=0>
					<input id='case_subject' type='hidden' name='case_subject' value=1 />
						<tr>
							<td>
								<div style='float:left'>
									<div id='firstname-label' class='input-label'>First Name:</div>
									<div><input style='width:140px;' id='firstname' type='text' name='firstname' /></div>
								</div>
								<div style='float:left'>
									<div id='lastname-label' class='input-label' style='margin-left:10px;'>Last Name:</div>
									<div><input style='margin-left:10px;width:140px;' id='lastname' type='text' name='lastname' /></div>
								</div>
								<div style='clear:both'></div>
								<div style='margin-top:3px;'></div>
								<div style='float:left'>
									<div id='email-label' class='input-label'>Email:</div>
									<div><input style='width:295px;' id='email' type='text' name='email' /></div>
								</div>
								<div style='clear:both'></div>
								<div style='margin-top:3px;'></div>
								<div style='float:left;'>
									<div id='phone-label' class='input-label'>Phone:</div>
									<div><input style='margin-left:0px;width:140px' maxlength='10' id='phone' type='text' name='phone' /></div>
								</div>
								<div style='float:left;'>
									<div id='postcode-label' style='margin-left:10px;' class='input-label'>Postcode:</div>
									<div><input style='margin-left:10px;width:140px' id='postal_code' type='text' name='postal_code' /></div>
									
								</div>
								<div style='clear:both'></div>
								<div style='margin-top:3px;'></div>
									<div style='float:left'>
										<div id='homeaddress-label' class='input-label'>Home Address:</div>
										<div><input style='width:295px;' id='home_office' type='text' name='home_office' /></div>
									</div>
								<div style='clear:both'></div>
								<div style='margin-top:15px;'></div>
									<div id='suburb-change' style='float:left'>
										<div style='float:left'>
										<div id='suburb-label' class='input-label'>Suburb:</div>
											<input style='width:140px;' onclick='this.value='';' onfocus='this.select()' onblur='this.value=!this.value?' Suburb':this.value;' id='suburb' type='text' name='suburb' value='' disabled='disabled'/>											
										</div>
										<div style='float:left'>
										<div id='state-label' class='input-label' style='margin-left:10px;'>State:</div>
											<input style='margin-left:10px;width:140px;' onclick='this.value='';' onfocus='this.select()' onblur='this.value=!this.value?' State':this.value;' id='state' type='text' name='state' value='' disabled='disabled'/>
										</div>
									</div>
								<div style='clear:both'></div>

								<div style='margin-left:70px;font-family:arial;font-size:10pt'>
									<div style='margin-top:2px;'></div>
									<div style='float:left;width:180px;font-size:8pt;'>
										<div> <input style='width:10px;height:10px;' type='checkbox' name='agreement' id='agreement' value='1' />
										<div style='margin-top:-15px;margin-left:17px;' id='agreement-label'>
											I have read and understood the </div>
										<a href='#dialog' name='modal' style='text-decoration:none;padding-left:20px;'>Terms and Conditions</a></div>
										<div style='padding-left:20px;'>We respect your <a href='#privacy' name='modal' style='text-decoration:none;' >Privacy</a></div>
									</div>
								</div>
									<div style='clear:both'></div>
								<div style='padding-top:5px;'></div><center><input class='corner-button claim-button' id='submit' type='submit' name='claim' value='SUBMIT' style='font-size:19px;font-weight:bold;width:130px;height:38px;color:white;background-color:#77B800'/></center>											
						</td>
					</tr>
				</table>
			</form>


						</div>
						<div style='clear:both'></div>
						<div style='position:absolute;text-align:justify;font-size:12px;color:#414241;margin-left:20px;margin-top:-80px;font-family:arial;width:400px;'>
							<div style='color:#000000;font-weight:bold;text-align:center;font-size:10.1pt'>The prize is a Model 1 King Single Craftmatic Adjustable Bed.</div>
							<div style='margin-top:10px;color:red;font-weight:bold;text-align:center;font-size:16pt'>NEXT DRAW DATE: November 13, 2012</div>
							<!--div style='margin-top:10px;' >Image is for illustrative purposes only and actual bed may diifer from image shown.</div-->
						</div>
					</div>
			
					<div style='margin-left:auto;margin-right:auto;width:1000px;'>
					<div style='width:420px;float:left;margin-left:120px;margin-top:25px;' class='body-standard'>
					<!--div class='check-box' style='float:left'></div>
						<div style='float:left;margin-left:10px;'>To confirm your entry, fill out our survey form.</div>
						<div style='clear:both'></div>
						<div style='margin-top:5px'></div-->
			
					<div class='check-box' style='float:left'></div>					 
						<div style='float:left;margin-left:10px;'><!-- No purchase necessary! --> Prize winner will be notified by phone <br /> and in writing.</div>
						<div style='clear:both'></div>
						<div style='margin-top:5px'></div>
					<div style='margin-top:30px;'></div>	
					<div class='check-box' style='float:left;'></div> 
						<div style='float:left;margin-left:10px;'> Craftmatic Promotion is open to Australian <br /> residents only.* </div>
						<div style='clear:both'></div>
						<!--div style='color:#414241;font-size:10pt;margin-left:35px'>excluding all employees and agents of Craftmatic Pty Ltd, or anyone connected with the offer.</div-->
					<div style='margin-top:30px;'></div>
						<div style='margin-top:5px;'></div>
						<div class='check-box' style='float:left'></div>
						<div style='float:left;margin-left:10px;'>You may also join the raffle by calling Craftmatic toll <br /> free hotline <b>1800 210 330</b>.</div>
						<div style='clear:both'></div>
						<div style='margin-top:5px'></div>
			           	</div>
					<div style='float:left'>
						<iframe class='corner' style='border: 5px solid #000000;margin-left:1px;width:330px;margin-top:30px;' width='330' height='190' src='http://www.youtube.com/embed/ZQ9otWdoRDU' frameborder='0' allowfullscreen></iframe>
					</div>
			
			
			
					</div>
					<div class='clear'></div>
			<br />
			<div style='margin-left:auto;margin-right:auto;width:1000px;'>
			<div style='margin-left:150px;'>
				<div class='speech' style='width:720px'>
			         <div style='height:150px;margin-top:5px;width:715px;-webkit-border-radius: 30px;  -moz-border-radius: 30px;  border-radius: 30px;  float:left;background-color:#f3f4f6;'>
				  <div style='margin-top:0px;text-align:justify;color:#000000;font-size:20px;font-weight:bold;font-family:arial;position:absolute;margin-left:75px;width:610px;'>
			            <i><b style='font-size:30px;color:#005AA2;'>&ldquo;</b> Marvelous for Bad backs! I used to have to psyche myself up <div style='margin-top:5px;'></div>to face a really sharp pain every morning getting out of bed - 
				     now I don't feel it anymore - don't know why but it's true!<b style='font-size:30px;color:#005AA2;'> &rdquo; </b></i> 
			         </div>
				  <div style='margin-top:120px;text-align:right;color:#005AA2;font-size:20px;font-weight:bold;font-family:arial;position:absolute;margin-left:75px;width:570px;'>
					- Mr & Mrs Ashton, Burwood CCH
				  </div>
				  <div style='height:100px;margin-left:25px;width:100px;float:left;'> &nbsp; </div>
			         </div>
			       </div>    
			</div></div>
			<br />
    	";
    	return $data;
    	
    	
    }
    
    function winABedThankyou( $firstname ){
    	$data="
				<div style='margin-left:250px;margin-top:140px;color:#005AA2;font-family:tahoma;font-size:22pt;'>
					<center>Thank you for your submission</center>
				</div>
				<div style='color:#84BD00;font-family:arial;font-size:14pt;margin-left:250px'>
					<center>Your details have been verified successfully</center>
				</div>
				<div class='winner-bed-form' style='margin-left:220px;margin-top:40px;padding-left:10px;float:left '></div>
				<div style='float:left;margin-top:-290px;margin-left:50px'>
					<div style='font-size:14px;margin-left:550px;width:290px'>
						<div style='float:left;font-family:arial;color:#59595b;padding-top:20px'>Full Name:</div>
						<div style='float:left;font-family:arial;color:#59595b;padding-top:20px'><b> &nbsp; ". $firstname ." ".$_SESSION['lastname']."</b></div>
						<div style='clear:both'></div>
						<div style='float:left;font-family:arial;color:#59595b;padding-top:20px'>Email:</div>
						<div style='float:left;font-family:arial;color:#59595b;padding-top:20px'><b> &nbsp; ". $_SESSION['email']."</b></div>
						<div style='clear:both'></div>
						<div style='float:left;font-family:arial;color:#59595b;padding-top:20px'>Contact No:</div>
						<div style='float:left;font-family:arial;color:#59595b;padding-top:20px'><b> &nbsp; ". $_SESSION['phone']."</b></div>
						<div style='clear:both'></div>
						<div style='float:left;font-family:arial;color:#59595b;padding-top:20px'>Home Address:</div>
						<div style='float:left;font-family:arial;color:#59595b;padding-top:20px'><b> &nbsp; ". $_SESSION['home_office']."</b></div>
						<div style='clear:both'></div>
						<div style='float:left;font-family:arial;color:#59595b;padding-top:20px'>Suburb:</div>
						<div style='float:left;font-family:arial;color:#59595b;padding-top:20px'><b> &nbsp; ". $_SESSION['suburb']."</b></div>
						<div style='clear:both'></div>
						<div style='float:left;font-family:arial;color:#59595b;padding-top:20px'>State:</div>
						<div style='float:left;font-family:arial;color:#59595b;padding-top:20px'><b> &nbsp; ". $_SESSION['state']."</b></div>
						<div style='clear:both'></div>
						<div style='float:left;font-family:arial;color:#59595b;padding-top:20px'>Postcode:</div>
						<div style='float:left;font-family:arial;color:#59595b;padding-top:20px'><b> &nbsp; ". $_SESSION['postal_code']."</b></div>
						</div>
				</div>
    	";
    	return $data;
    }
    
    function whatsNew(){
    	$data="
			<div class='reason' style='float:left; margin-left:-30px;margin-top:30px;width:232px;'>
			    <div class='green-corner' style='color:white;background-color:#77B800;height:40px;'>
			    <center style='font-size:15pt;padding-top:5px;font-family:tahoma'>Whats New?</center></div>
			    <div style='background-color:#FDFBFB;height:200px' class='reason'>	
			    <div id='slideshow'>
			      <img id='newpillow' height='200px;' src='http://".$_SERVER['SERVER_NAME']."/wp-content/themes/craftmaticau2012/images/slider/free-pillow.png' alt='Slideshow Image 1' class='active' />
			      <img id='newsletter' height='200px;' src='http://".$_SERVER['SERVER_NAME']."/wp-content/themes/craftmaticau2012/images/slider/free-newsletter.png' alt='Slideshow Image 2' />
			    </div>	
			    </div>	
		    </div>    	
    	";
    	return $data;
    }
	
	add_action( 'init', 'create_craftmatic_blogs_post_type' );
	
	function create_craftmatic_blogs_post_type() {
		register_post_type( 'craftmatic_blog',
			array(
				'labels' => array(
					'name' => __( 'Blogs' ),
					'singular_name' => __( 'Blog' )
				),
			'public' => true,
			'has_archive' => true,
			)
		);
	}
	
	add_action( 'init', 'create_craftmatic_thank_you_post_type' );
	
	function create_craftmatic_thank_you_post_type() {
		register_post_type( 'thank_you',
			array(
				'labels' => array(
					'name' => __( 'Thank You' ),
					'singular_name' => __( 'Thank You' )
				),
			'public' => true,
			'has_archive' => true,
			)
		);
	}

	add_action( 'init', 'create_craftmatic_forms_post_type' );
	
	function create_craftmatic_forms_post_type() {
		register_post_type( 'forms',
			array(
				'labels' => array(
					'name' => __( 'Forms' ),
					'singular_name' => __( 'Form' )
				),
			'public' => true,
			'has_archive' => true,
			)
		);
	}
    

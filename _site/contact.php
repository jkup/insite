
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>

		<title>Contact Insite Design Lab</title>

		<meta name="description" content="Looking for a website? Not sure what you're looking for? Fill out our contact form and let us get a hold of you! Some of the best in Michigan Web Design.">

		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link href="css/company.css" type="text/css" media="all" rel="stylesheet">

		<link href='http://fonts.googleapis.com/css?family=Permanent+Marker|Arvo:400,700|Ubuntu' rel='stylesheet' type='text/css'>
		
		<link rel="apple-touch-icon" href="images/insite_apple_icon.png"/>

	</head>
	<body>

		<div><a id="top"></a></div>

		<div id="header">

			<div class="wrapper">

				<h1><a href="home.html"><span>Insite</span> Design <span>Lab</span></a></h1>
			
				<div id="navigation">
					<ul>
						<li><a href="home.html">home</a></li>
						<li><a href="about.html">about</a></li>
						<li><a href="portfolio.html">work</a></li>
						<li><a href="/blog/">blog</a></li>
						<li><a href="contact.html">contact</a></li>
					</ul>
				</div><!-- END #navigation -->

			</div><!-- END .wrapper -->

		</div><!-- END #header -->

		<div id="content">
		<div class="contact">

			<?php 

				function check_input($data) {
				    $data = trim($data);
				    $data = stripslashes($data);
				    $data = htmlspecialchars($data);
						$data = strip_tags($data);
				    return $data;
				}
				
				if(isset ($_POST['submit'])) {
					$to = "jon.kuperman@gmail.com";
					$subject = check_input($_POST['name']) . " - IDL Inquiry";
					$message = check_input($_POST['message']);
					$from = check_input($_POST['email']);
					$headers = "From:" . $from;
					mail($to,$subject,$message,$headers);
				} 

			?>
		
			<h1>Coffee's On Us</h1>

			<p style="text-align: center;">We Love Talking To People About Websites</p>
			<p style="text-align: center;">If you're interested in working with us, send us an email. We'll buy you coffee and give you a cost and	pressure free 30 minute consultation. Just to see if we're a good fit.</p>

			<img src="images/coffeecup.png" alt="Contact Michigan Web Design">

			<form action="contact.php" method="post">
				
				<h2 style="color: #000;">Put Your Information Here:</h2>
			<p><input type="text" name="name" value="Your Name" onfocus="if (this.value == 'Your Name') {this.value=''}"	></p>

			<p><input type="text" name="email" value="Your Email Address" onfocus="if (this.value == 'Your Email Address') {this.value=''}"></p>

				<h2 style="color: #000;">Put Awesome Thoughts Here:</h2>
				<div><textarea name="message" rows="30" cols="10" onfocus="if (this.value == 'Say Something Awesome') {this.value=''}"></textarea></div>

				<p><input type="submit" class="css3button" name="submit" value="Send It"></p>

				</form>
							
				<?php
					if(isset ($_POST['submit'])) {
						echo "<div class=\"confirmed\">Your Message Has Been Sent Successfully. Thanks!</div>";
					}
				?>

		</div><!--END .contact-->
		</div><!-- END #content -->

		<div id="footer">

			<div class="wrapper">

				<div id="footer_image">

					<img src="images/insite_mobile.png" alt="Michigan Mobile Design">

				</div><!-- END #footer_image -->

				<div id="footer_links">

					<div class="floater_left">

					<h3>Find your way</h3>

					<ul class="sitemap">
		
						<li><a href="home.html">Home</a></li>
						<li><a href="about.html">About Us</a></li>
						<li><a href="portfolio.html">Our Work</a></li>
						<li><a href="/blog/">The Blog</a></li>
						<li><a href="contact.html">Contact Us</a></li>

					</ul>

					</div><!-- END .floater -->

					<div class="floater_right">

					<h3>Get in touch!</h3>

					<ul class="social">
				
						<li><a href="http://www.facebook.com/pages/Insite-Design-Lab/100434263378676">Facebook</a></li>
						<li><a href="http://twitter.com/#!/insitedesignlab">Twitter</a></li>
						<li><a href="http://www.linkedin.com/company/2108663?trk=tyah">Linked In</a></li>
						<li><a href="http://www.insitedesignlab.com/feed">RSS Feed</a></li>
						<li><a href="mailto:hello@inistedesignlab.com">Email</a></li>
	
					</ul>

					</div><!-- END .floater -->

				</div><!-- END #footer_links -->

			</div><!--END .wrapper -->

		</div><!--END #footer -->

		<div id="bottom_bar"></div>

<!--CLICKY-->
<script src="//static.getclicky.com/js" type="text/javascript"></script>
<script type="text/javascript">try{ clicky.init(66415713); }catch(e){}</script>
<!--END CLICKY-->
<!--GOOGLE ANALYTICS-->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-21008844-4']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<!--END GOOGLE ANALYTICS-->
	</body>
</html>
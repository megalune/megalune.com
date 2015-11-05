<!DOCTYPE html>
<html lang="en">
<head>

<!-- Title -->
<title>Pete&rsquo;s New Haven Style Apizza | Tim King</title>
<?php include '../framework/header_a.php'; ?>
		<div id="content">
			<div class="fixed">
				<div id="sticker">
					<h1>Pete&rsquo;s New Haven Style Apizza</h1>
					<p><em>Skills:
						HTML, CSS, jQuery, php, Flickr API, Google API,  mySQL</em></p>
					<p><a href="http://petesapizza.com/" target="_blank">View Site »</a> </p>
					<p>Pete&rsquo;s New Haven Style Apizza is a rapidly growing restaurant that  was seeking a strong web presence. They had already developed a strong  social media presence, but their website was not keeping up with the  growing business. In my redesign of the site I was asked to integrate  their social media from Facebook, Twitter, and Flickr, make the site  friendly to mobile visitors, and unify the separate locations while  allowing each to showcase their individual specials.</p>
					<p>In tandem with the redesign, I was asked to create an &lsquo;admin  back-end&rsquo; that would allow Pete&rsquo;s staff to update the rotating factoids  and raves that appear in the header of the site. This was done using php  and a mySQL database.</p>
				</div>
			</div>
			<div class="fluid"><img src="images/petes-1.jpg"><img src="images/petes-2.jpg"><img src="images/petes-3.jpg"></div>
<script type="text/javascript">
	// stickie
	$(document).ready(function () {
		var s = $("#sticker");
		var pos = s.position();
		$(window).scroll(function () {
			var windowpos = $(window).scrollTop();
			if (windowpos >= pos.top) {
				s.addClass("stick");
			} else {
				s.removeClass("stick");
			}
		});
	});
</script> 
		</div>
		<!-- #container -->
		
		<div style="clear:both;"></div>
		<?php include '../framework/footer_a.php'; ?>
		<!-- #footer --> 
		
	</div>
	<!-- .wrap --> 
	
</div>
<!-- #container -->
</body>
</html>

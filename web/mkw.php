<!DOCTYPE html>
<html lang="en">
<head>

<!-- Title -->
<title>Michael K. Wilkinson | Tim King</title>
<?php include '../framework/header_a.php'; ?>
		<div id="content">
			<div class="fixed">
				<div id="sticker">
					<h1>Michael K. Wilkinson</h1>
					<p><em>Skills:
						HTML, CSS,  jQuery, Flickr API, Intsagram API</em></p>
					<p><a href="http://www.mkw1.com/" target="_blank">View Site »</a> </p>
					<p>Michael K. Wilkinson is a  DC based photographer. He was  looking to create a web presence to both showcase his work and  keep followers of his work up to date on his activities.</p>
					<p>I was responsible for creating  coding this site.  The photo galleries tie in with Flickr and Instagram to allow Michael to easily  update the images in his portfolio.</p>
				</div>
			</div>
			<div class="fluid"><img src="images/mkw-1.jpg"><img src="images/mkw-2.jpg"></div>
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

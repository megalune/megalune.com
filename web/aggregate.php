<!DOCTYPE html>
<html lang="en">
<head>

<!-- Title -->
<title>Aggregate | Tim King</title>
<?php include '../framework/header_a.php'; ?>
		<div id="content">
			<div class="fixed">
				<div id="sticker">
					<h1>Aggregate</h1>
					<p><em>Skills:
						HTML, CSS, PHP, Photoshop, TypeKit</em></p>
					<p><a href="http://www.aggregatellc.com/" target="_blank">View Site »</a> </p>
					<p>Aggregate is a newly formed DC based architecture group. They were  looking to create a web presence to both showcase their work and  advertise their services.</p>
					<p>I was responsible for creating the design and fully coding this site.  The photo galleries tie in with flickr to allow the client to easily  update the images in their portfolio.</p>
				</div>
			</div>
			<div class="fluid"><img src="images/aggregate-1.jpg"><img src="images/aggregate-2.jpg"><img src="images/aggregate-3.jpg"></div>
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
